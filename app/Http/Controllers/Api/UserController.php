<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Laravel\Passport\Client as OClient;
use Symfony\Component\HttpKernel\Exception\HttpException;

class UserController extends Controller
{


    /**
     * refreshToken
     * this method is used to regenerate token using refresh token
     * @param  mixed $request
     * @return responseJson
     */
    public function refreshToken(Request $request)
    {
        $validator = \Validator::make(request()->all(), [
            'refresh_token' => 'required|string',
        ]);
        if ($validator->fails()) {

            return response()->json(['message' => $validator->errors()->first()],422);
         }
        // $request->validate([
        //     'refresh_token' => 'required|string'
        // ]);

        $tokens = $this->refreshAuthToken($request->refresh_token);

        return [ 'data' => $tokens ];
    }



    /**
     * refreshAuthToken
     * here  this method is used to return tokens
     * @param  mixed $refreshToken
     * @return responseJson
     */
    public function refreshAuthToken(string $refreshToken)
    {
        $http = new \GuzzleHttp\Client;
        $oClient = OClient::where('password_client', 1)->first();

        try {
            $response = $http->post(url('oauth/token'), [
                'form_params' => [
                    'grant_type' => 'refresh_token',
                    'refresh_token' => $refreshToken,
                    'client_id' => $oClient->id,
                    'client_secret' => $oClient->secret,
                ],
            ]);

            return json_decode((string) $response->getBody(), true);
        } catch (GuzzleException $e) {
            if ($e->getCode() === 401) {
                throw new HttpException($e->getCode(), 'Either refresh token is expired or revoked');
            }
        }
    }
}
