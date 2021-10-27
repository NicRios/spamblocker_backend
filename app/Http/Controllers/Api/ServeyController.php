<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\ContactListResource;
use App\Http\Resources\CountryStateResource;
use App\Models\Company;
use App\Models\Countrystate;
use App\Models\User;
use App\Models\UserQuestion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServeyController extends Controller
{

    /**
     * states
     * this method is used to return states list
     * @return responseJson resource data
     */
    public function states(){

        $data=Countrystate::all();

        return CountryStateResource::collection($data);


    }

    /**
     * companies
     * this method is used to return companies list
     * @return responseJson resource data
     */
    public function companies(){

        $data=Company::all();

        return CompanyResource::collection($data);


    }

    /**
     * serveysubmit
     * this method is used to fill or update question answer data of auth user
     * @param  mixed $request
     * @return responseJson success or failure message only
     */
    public function serveysubmit(Request $request){

        if(count($request->questions)>0||!empty($request->questions)){

            foreach($request->questions as $val){

                $query=UserQuestion::where('user_id',Auth::user()->id)->where('question_id',$val['que'])->first();
                if(!$query){
                    $query=new UserQuestion();
                    $query->user_id=Auth::user()->id;
                    $query->question_id=$val['que'];
                    $query->option_id=$val['answer'];
                    $query->created_at=Carbon::now();
                    $query->updated_at=Carbon::now();
                    $query->save();
                }else{
                    $query->option_id=$val['answer'];
                    $query->updated_at=Carbon::now();
                    $query->save();
                }

            }

            return \response()->json(['message' => "Successfully submitted "], 200);

        }else{
            return \response()->json(['message' => "Invalid or Empty data!!"], 422);
        }


    }


    /**
     * contactList
     * This method is used to return users list return all user if question answer not filled
     *  else will return only those user list whoose answers match with auth user
     * @return responseJson resource
     *
     */
    public function contactList(){


        $data=UserQuestion::where('user_id',Auth::user()->id)->get();

        if(count($data)>0){

            $states=UserQuestion::with('user')->where('user_id',Auth::user()->id)->where('question_id',2)->first();
            $states=$states->option_id;
            $companies=UserQuestion::with('user')->where('user_id',Auth::user()->id)->where('question_id',3)->first();
            $companies=$companies->option_id;
            $usersIds=UserQuestion::where(function ($q) use ($states) {
                $q->where(DB::raw("FIND_SET_EQUALS('$states',`option_id`)"),1)->where('question_id',2)->where('user_id','!=',Auth::user()->id);
            })->orWhere(function ($q) use ($companies) {
                $q->where(DB::raw("FIND_SET_EQUALS('$companies',`option_id`)"),1)->where('question_id',3)->where('user_id','!=',Auth::user()->id);
            })->pluck('user_id');
            $contacts=User::whereIn('id',$usersIds)->get();

        }else{

            $contacts=User::where('id','!=',Auth::user()->id);

        }

        return ContactListResource::collection($contacts);
    }
}
