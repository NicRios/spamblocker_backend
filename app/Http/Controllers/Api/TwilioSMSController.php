<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Ichtrojan\Otp\Otp;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Ichtrojan\Otp\Models\Otp as OTPModal;

class TwilioSMSController extends Controller
{


    /**
     * index
     * this method is not currently in used it only for twillio setup reference
     * @return void
     */
    public function index()
    {
        $receiverNumber = "9724885061";
        $message = "This is testing from Spam app blocker";

        try {

            $account_sid = env("TWILIO_SID");
            $auth_token = env("TWILIO_TOKEN");
            $twilio_number = env("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            dd('SMS Sent Successfully.');

        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
    }

    /**
     * sendOtp
     * this method is used to send otp to given contact number
     * @param  mixed $request
     * @return responseJson failure or success message
     */
    public function sendOtp(Request $request)
    {

        $validator = \Validator::make(request()->all(), [
            'phone_number' => 'required',
        ]);
        if ($validator->fails()) {

            return response()->json(['message' => $validator->errors()->get('phone_number')[0]],422);
         }
         \Log::info($request->phone_number);
         $check = User::where('phone',$request->phone_number)->first();
         $check2 = User::where('phone',str_replace('+1 ','',str_replace('+91 ','',$request->phone_number)))->first();
         \Log::info($check);
         if($check||$check2){
            return response()->json(['message' => 'This phone number is taken by another account'],422);
         }


        $receiverNumber = $request->phone_number;
        $otp=new Otp();


        $check=OTPModal::where('identifier', $request->phone_number)->delete();
        // if ($otp){
        //     if ($otp->valid == true) {
        //         $carbon = new Carbon();
        //         $now = $carbon->now();
        //         $validity = $check->created_at->addMinutes($check->validity);

        //         if (strtotime($validity) >= strtotime($now)) {
        //             return (object)[
        //                 'message' => 'OTP is allready exist'
        //             ];
        //         }
        //     }
        // }



        $otp = $otp->generate($request->phone_number, 4, 15);
        $message = "Your OTP IS $otp->token. Valid for 15minutes";

        try {

            $account_sid = env("TWILIO_SID");
            $auth_token = env("TWILIO_TOKEN");
            $twilio_number = env("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $response=$client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

                return \response()->json(['message' => "OTP Sent!"], 200);

        } catch (Exception $e) {
            return \response()->json(['message' => "The number is unverified or can not send otp on this number"], 404);
        //    return $e->getMessage();
        }
    }


    /**
     * verify
     * this method is used to check passed otp is valid or not
     * @param  mixed $request
     * @return responseJson failure or success message
     */
    public function verify(Request $request){


        $otp=new Otp();
        $verify=$otp->validate('mmichael@okoh.co.uk',$request->code);
        if($verify->status==true){
            return \response()->json(["data"=>$verify], 200);
        }else{
            $verify=(object)[
                'status' => false,
                'message' => 'Entered OTP is invalid'
            ];
            return \response()->json($verify, 422);
        }

        dd($verify);
        // $otp = Otp::validate('michael@okoh.co.uk', '282581');
    }
}
