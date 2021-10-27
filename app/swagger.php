<?php

/**
 *  @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Spam Blocker"
 *  )
 *  @OA\SecurityScheme(type="http", securityScheme="BearerAuth", scheme="bearer", bearerFormat="JWT"),
*/



/**
     * @OA\Post(
     *  path="/refresh-token",
     *  tags={"Auth"},
     *  summary="Refresh Token",
     *  @OA\RequestBody(description="", required=true,
     *      @OA\MediaType(mediaType="application/json",
     *          @OA\Schema(
     *              @OA\Property(property="refresh_token", type="string", example="def5020075819e4748adefe1f860566c3b41437f2b7e396db025b4d384e6b5db5911a3cfc224e2b2471b111be6113e5a807aac58edc41634ec7babd26d4482de8412402ec1798f6c2e793249d8993e3b02506de8d1bbcd45fe551cd23c5695d2f79e11dec3e6502ff31588f5deefe65885041108513b40321afe392628cd0867cb4d5df1a023c30f5d4f2dc4c87f2c140a6bc625e0d5fa98ce2b20f15492ecca590ada4557540e7231c33587eb434cc027ec7e5e0d07d6d9bd16d7c1520110093e5d228707fc8ebae8020d062cea8cce01eeb3344fcf9854fabcb89660d68966a05c878656bb9acc5df678156e9729278152dae00f6198660faebe52beb74c629aef8ed4cf49ab0ca86978679a17cc273afe8ca3f1c86f989c7c01f017d1479002885640d68e01b59df5bdce5438306195ee7c51ca72b7e8149d3ed3b94402f528569956ca833b074aa74cb42098df96023e9f1bc0b0c3bdddd233337130633239388bf1"),
     *          )
     *      )
     *  ),
     *  @OA\Response(response="200", description="Refresh token generated successfully",
     *      @OA\MediaType(mediaType="application/json")
     *  ),
     *  @OA\Response(response="401", description="Token is either expired or revoked. In such cases, redirect the user to login screen",
     *      @OA\MediaType(mediaType="application/json")
     *  ),
     * )
     *
     */

/**
 * @OA\Post(
 *     path="/signup",
 *     summary="Sign up process",
 *     tags={"Auth"},
 *     security={},
 *     @OA\RequestBody(description="", required=true,
 *         @OA\MediaType(mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="email", type="string", format="email", example="iroid.test1@gmail.com"),
 *                 @OA\Property(property="password", type="string", minimum="8", example="password"),
 *                 @OA\Property(property="password_confirmation", type="string", minimum="8", example="password"),
 *                 @OA\Property(property="phone", type="string", example="+91 9033911549"),
 *                 required={"email", "password", "password_confirmation", "phone"}
 *             ),
 *         ),
 *     ),
 *     @OA\Response(response="200", description="Sign up successfully",
 *         @OA\MediaType(mediaType="application/json")
 *     ),
 *     @OA\Response(response="422", description="Validation error",
 *         @OA\MediaType(mediaType="application/json")
 *     ),
 *  )
 */

 /**
 * @OA\Post(
 *     path="/checkmail",
 *     summary="Check Email is allready exist or not",
 *     tags={"Auth"},
 *     security={},
 *     @OA\RequestBody(description="", required=true,
 *         @OA\MediaType(mediaType="application/json",
 *             @OA\Schema(
 *                 @OA\Property(property="email", type="string", format="email", example="iroid.test1@gmail.com"),
 *                 required={"email"}
 *             ),
 *         ),
 *     ),
 *     @OA\Response(response="200", description="Sign up successfully",
 *         @OA\MediaType(mediaType="application/json")
 *     ),
 *     @OA\Response(response="422", description="Validation error",
 *         @OA\MediaType(mediaType="application/json")
 *     ),
 *  )
 */


/**
 * @OA\Post(
 * path="/login",
 * summary="Sign in",
 * description="Login by email, password",
 * operationId="authLogin",
 * tags={"Auth"},
 * @OA\RequestBody(
 *    required=true,
 *    description="Pass user credentials",
 *

 *    @OA\JsonContent(
 *       required={"email","password"},
 *       @OA\Property(property="email", type="string", format="email", example="iroid.test1@gmail.com"),
 *       @OA\Property(property="password", type="string", format="password", example="password"),
 *    ),
 * ),
 * @OA\Response(
 *    response=422,
 *    description="Wrong credentials response",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
 *        )
 *     )
 * )
 */

/**
     *  @OA\Post(path="/send-otp", summary="Send otp", tags={"Auth"}, security={}, deprecated=false,
     *     description="***Note: Otp is valid for 15minute***",
     *     @OA\RequestBody(description="", required=true,
     *         @OA\MediaType(mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(property="phone_number", type="string", format="+{country-code} {phone-number}", example="+1 9033911549"),
     *                 required={"phone_number"},
     *             ),
     *         ),
     *     ),
     *     @OA\Response(response="200", description="OTP sent successfully",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *     @OA\Response(response="422", description="Validation error",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *  )
     */

     /**
     *  @OA\Post(path="/verify-otp", summary="Verify otp", tags={"Auth"}, security={}, deprecated=false,
     *     description="status->true indicates valid otp and false indicates invalid otp",
     *     @OA\RequestBody(description="", required=true,
     *         @OA\MediaType(mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(property="code", type="string", example="786542"),
     *                 required={"code"},
     *             ),
     *         ),
     *     ),
     *     @OA\Response(response="200", description="Verfication data fetched",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *  )
     */




     /**
     *  @OA\Get(path="/get/states", summary="Get US Country State list",
     *     tags={"Servey"}, security={},
     *     @OA\Response(response="200", description="states retreived successfully",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *  )
     */

     /**
     *  @OA\Get(path="/get/companies", summary="Get company industries list",
     *     tags={"Servey"}, security={},
     *     @OA\Response(response="200", description="company list retreived successfully",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *  )
     */

     /**
     * @OA\Post(
     *  path="/servey/post",
     *  tags={"Servey"},security={{ "BearerAuth"={} }},
     *  summary="Servey Question option submit",
     *  @OA\RequestBody(description="***Note:pass values in double inverted comma's ***format to pass data=>[{'que':1,'answer':'1'},{'que':2,'answer':'1,2,3'},{'que':3,'answer':'1,2,3'}]", required=true,
     *      @OA\MediaType(mediaType="application/json",
     *          @OA\Schema(
     *              @OA\Property(property="questions",deprecated=false, type="json", example="[{'que':1,'answer':'1'},{'que':2,'answer':'1,2,3'},{'que':3,'answer':'1,2,3'}]"),
     *          )
     *      )
     *  ),
     *  @OA\Response(response="200", description="Submitted successfully successfully",
     *      @OA\MediaType(mediaType="application/json")
     *  ),
     *  @OA\Response(response="422", description="Invalid data passed",
     *      @OA\MediaType(mediaType="application/json")
     *  ),
     * )
     *
     */


    /**
     * @OA\Post(
     *     path="/force/update",
     *     summary="Result status 1->stands for force update, 2->recommend to update, 0->Allready up to date",
     *     tags={"Auth"}, security={{}},
     *     @OA\RequestBody(description="Pass current app version and type(iOS/Android)", required=true,
     *         @OA\MediaType(mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(property="version", type="string", example="1.6"),
     *                 @OA\Property(property="type", type="string", example="iOS"),
     *                 required={"version", "type"}
     *             ),
     *         ),
     *     ),
     *     @OA\Response(response="200", description="result fetched",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *     @OA\Response(response="401", description="Unauthenticated",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *  )
     */



     /**
     *  @OA\Get(path="/get/max_blocking", summary="Get servey form matched contact list",
     *     tags={"Servey"}, security={{ "BearerAuth"={} }},
     *     @OA\Response(response="200", description="contact list retreived successfully",
     *         @OA\MediaType(mediaType="application/json")
     *     ),
     *  )
     */



?>


