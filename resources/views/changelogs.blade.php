<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }} | API changelogs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css"
        integrity="sha256-nwNjrH7J9zS/Ti4twtWX7OsC5QdQHCIKTv5cLMsGo68=" crossorigin="anonymous" />
    <div class="container">
        <div class="row justify-content-center">
            <h3 class="pt-2 pb-4">{{ env('APP_NAME') }} API Changelogs</h3>
            <hr><br>
            <div class="col-lg-12 col-md-12 col-12 mx-auto my-auto">


                <div class="row d-flex">
                    <div class="col-lg-2">
                        <h6 class="mt-4">
                            <span class="p-2 bg-light shadow rounded text-success">
                                Version 1.0
                            </span>
                        </h6>
                    </div>
                    <div class="col-lg-10" style="border-left:1px solid #88bbcc1a">
                        <h6 class="mt-4">14th of Oct 2021</h6>
                        <br>
                        <span class="badge badge-secondary">Changes</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/send-otp</code>
                                <br>
                                ✓ also added validation that number is allready exist or not
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/get/companies</code>
                                <br>
                                ✓ Comapnies list updated accordingly client's company list
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/servey/post</code>
                                <br>
                                ✓ Also allow to update questions if previously submitted
                            </li>
                        </ul>
                        <br>
                        <span class="badge badge-success">New additions</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/checkmail</code>
                                <br>
                                ✓ Will allow to check email is allready exist or not
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="row d-flex">
                    <div class="col-lg-2">
                        <h6 class="mt-4">
                            <span class="p-2 bg-light shadow rounded text-success">
                                Version 1.0
                            </span>
                        </h6>
                    </div>
                    <div class="col-lg-10" style="border-left:1px solid #88bbcc1a">
                        <h6 class="mt-4">11th of Oct 2021</h6>
                        <br>
                        <span class="badge badge-secondary">Changes</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/verify-otp</code>
                                <br>
                                ✓ Error message changed
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/signup</code>
                                <br>
                                ✓ Error message changed for phone validation
                            </li>
                        </ul>
                        <br>
                        <span class="badge badge-success">New additions</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/get/max_blocking</code>
                                <br>
                                ✓ Max blocking contact list api
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row d-flex">
                    <div class="col-lg-2">
                        <h6 class="mt-4">
                            <span class="p-2 bg-light shadow rounded text-success">
                                Version 1.0
                            </span>
                        </h6>
                    </div>
                    <div class="col-lg-10" style="border-left:1px solid #88bbcc1a">
                        <h6 class="mt-4">09th of Oct 2021</h6>
                        <br>
                        <span class="badge badge-success">New additions</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/get/states</code>
                                <br>
                                ✓ To get list of states
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/get/companis</code>
                                <br>
                                ✓ To get list of company industries
                            </li>

                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/servey/post</code>
                                <br>
                                ✓ To Submit servey form(please note pass data in below format)<br>[{"que":1,"answer":"1"},{"que":2,"answer":"1,2,3"},{"que":3,"answer":"1,2,3"}]
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-lg-2">
                        <h6 class="mt-4">
                            <span class="p-2 bg-light shadow rounded text-success">
                                Version 1.0
                            </span>
                        </h6>
                    </div>
                    <div class="col-lg-10" style="border-left:1px solid #88bbcc1a">
                        <h6 class="mt-4">08th of Oct 2021</h6>
                        <br>
                        <span class="badge badge-secondary">Change</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/send-otp</code>
                                <br>
                                ✓ Error message shows when otp can't send or failed
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row d-flex">
                    <div class="col-lg-2">
                        <h6 class="mt-4">
                            <span class="p-2 bg-light shadow rounded text-success">
                                Version 1.0
                            </span>
                        </h6>
                    </div>
                    <div class="col-lg-10" style="border-left:1px solid #88bbcc1a">
                        <h6 class="mt-4">01st Oct 2021</h6>
                        <br>
                        <span class="badge badge-success">New Additions</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/send-otp</code>
                                <br>
                                ✓ Send otp
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/verify-otp</code>
                                <br>
                                ✓ Verify otp for is valid or not expired
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/signup</code>
                                <br>
                                ✓ User Registration
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/login</code>
                                <br>
                                ✓ User Login
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/refresh-token</code>
                                <br>
                                ✓ Generate token using refresh token
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="row d-flex">
                    <div class="col-lg-2">
                        <h6 class="mt-4">
                            <span class="p-2 bg-light shadow rounded text-success">
                                Version 1.0
                            </span>
                        </h6>
                    </div>
                    <div class="col-lg-10" style="border-left:1px solid #88bbcc1a">
                        <h6 class="mt-4">17th Sept 2021</h6>
                        <br>
                        <span class="badge badge-success">New Additions</span>
                        <ul class="mt-3">
                            <li class="text-muted ml-3 mb-2">
                                <code>/api/v1/register</code>
                                <br>
                                ✓ User register api using phone / email
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/register/verify</code>
                                <br>
                                ✓ User register otp verification api
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/register/create/password</code>
                                <br>
                                ✓ User create password api
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/login</code>
                                <br>
                                ✓ User login api using phone / email
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/social/login</code>
                                <br>
                                ✓ User social login api
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/forget/password</code>
                                <br>
                                ✓ User forget password api
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/forget/password/verify</code>
                                <br>
                                ✓ User forget password otp verification api
                            </li>
                            <li class="text-muted ml-3 mb-2">
                                <code>/forget/password/save</code>
                                <br>
                                ✓ User forget password save api
                            </li>
                        </ul>

                    </div>
                </div> --}}
                {{-- <div class="row d-flex">
                    <div class="col-lg-2">
                        <h6 class="mt-4">
                            <span class="p-2 bg-light shadow rounded text-success">
                                Version 1.0
                            </span>
                        </h6>
                    </div>
                    <div class="col-lg-10" style="border-left:1px solid #88bbcc1a">
                        <h6 class="mt-4">15th Sep, 2021</h6>
                        <ul class="list-unstyled mt-3">
                            <li class="text-muted ml-3"><i class="mdi mdi-circle-medium mr-2"></i>Initial Released</li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <style type="text/css">
        body {
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .text-muted {
            color: #8492a6 !important;
        }

        .bg-light {
            background-color: #add8e624 !important;
        }

        ul {
            list-style-position: outside
        }

        .text-success {
            color: #0f84ab !important;
        }
        }

    </style>
</body>

</html>
