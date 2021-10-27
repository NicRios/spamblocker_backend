<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laravel\Passport\Client as OClient;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class AuthController extends Controller
{

    /**
     * Login
     * This method is used to login user via email and password
     * @param  mixed $request
     * @return responseJson with user data and token
     */

    public function Login(Request $request){

        $validator = \Validator::make(request()->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email',$request->email)->first();
        if($user && (Hash::check($request->password,$user->password))){
            $oClient = OClient::where('password_client', 1)->first();

            //  Here method getTokenAndRefreshToken() is used to generate token and referesh token
            $accessToken = $this->getTokenAndRefreshToken($oClient, $user->email, $request->password)->getData();
            return (new UserResource($user))->additional(['data' => ['access_token' => $accessToken]]);


        }else{
            return response()->json(['message' => 'Sorry, wrong email address or password. Please try again.'], 422);
        }

    }


    /**
     * checkmail
     * use to check email is allready exist or not
     * @param  mixed $request
     * @return responseJson
     */

    public function checkmail(Request $request){
        $validator = \Validator::make(request()->all(), [
            'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return response()->json(['message' => 'This email is taken by another account'],422);
        }else{
            return response()->json(['message' => 'Valid email'], 200);
        }

    }


    /**
     * signup
     * This method is used to perform user registration
     * @param  mixed $request
     * @return responseJson with user data and token
     */

    public function signup(Request $request){

        $validator = \Validator::make(request()->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'phone' => 'required|string|unique:users',
        ]);
        if ($validator->fails()) {
            if($validator->errors()->first()=='The phone has already been taken.'){
                return response()->json(['message' => 'Oops! The Phone number has already been used'],422);
            }
            return response()->json(['message' => $validator->errors()->first()],422);
         }
        $check=User::where('email',$request->email)->first();
        if($check){
            return response()->json(['error' => 'Email allready exist'], 422);
        }
        // $data = $request->validated();
        $password = $request->password;
        $data['password']=bcrypt($password);
        $user=new User();
        $user->email=$request->email;
        $user->password=bcrypt($password);
        $user->phone=$request->phone;
        $user->save();

        // $user = User::create($data);

        $oClient = OClient::where('password_client', 1)->orderBy('id','desc')->first();
        $accessToken = $this->getTokenAndRefreshToken($oClient, $user->email, $password)->getData();
        return (new UserResource($user))->additional(['data' => ['access_token' => $accessToken]]);
    }




    /**
     * getTokenAndRefreshToken
     * this method is use to generate laravel passport tokens
     * @param  mixed $oClient
     * @param  mixed $email
     * @param  mixed $password
     * @return responseJson with generated token
     */
    public function getTokenAndRefreshToken(OClient $oClient, $email, $password) {
        $oClient = OClient::where('password_client', 1)->orderBy('id','desc')->first();
        $http = new Client;
        $url = env('APP_URL').'/oauth/token';
        try{
            $response = $http->request('POST', $url, [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => $oClient->id,
                    'client_secret' => $oClient->secret,
                    'username' => $email,
                    'password' => $password,
                    'scope' => '*',
                ],
            ]);
            $result = json_decode((string) $response->getBody(), true);
            return response()->json($result, 200);
        }catch (GuzzleException $exception) {

            if ($exception->getCode() === 400) {
                throw new UnauthorizedHttpException('', 'Incorrect email or password');
            }
        }

    }


}
