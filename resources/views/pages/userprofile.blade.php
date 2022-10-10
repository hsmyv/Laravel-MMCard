<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="/dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>User Profile</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="/dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <body class="app">
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">

                </div>
                <!-- END: Top Bar -->
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        My Profile
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Profile Menu -->
                    <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
                        <div class="intro-y box mt-5">
                            <div class="relative flex items-center p-5">
                                <div class="w-12 h-12 image-fit">
                                    <div class="intro-x dropdown w-8 h-8">
                                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                                            <img alt="Midone Tailwind HTML Admin Template" src="/dist/images/profile-1.jpg">
                                        </div>
                                        <div class="dropdown-box w-56">
                                            <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
                                                <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                                                    <div class="font-medium">{{$userinformation->username}}</div>

                                                </div>
                                                <div class="p-2">
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                                    <a href="{{route('showforgetpassword')}}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                                </div>
                                                <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                                                    <form method="POST" action="{{route('logout')}}">
                                                        @csrf
                                                    <a class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i><button type="submit" >Logout</button> </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="ml-4 mr-auto">

                                    <div class="font-medium text-base">{{$userinformation->username}}</div>
                                    <div class="text-gray-600">{{$userinformation->about}}</div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-700 dark:text-gray-300"></i> </a>
                                    <div class="dropdown-box w-56">
                                        <div class="dropdown-box__content box dark:bg-dark-1">
                                            <div class="p-4 border-b border-gray-200 dark:border-dark-5 font-medium">Language Options</div>
                                            <div class="p-2">
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="activity" class="w-4 h-4 text-gray-700 dark:text-gray-300 mr-2"></i> Russian </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="activity" class="w-4 h-4 text-gray-700 dark:text-gray-300 mr-2"></i> English </a>
                                                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                    <i data-feather="box" class="w-4 h-4 text-gray-700 dark:text-gray-300 mr-2"></i> Spain
                                                    <div class="text-xs text-white px-1 rounded-full bg-theme-6 ml-auto">new</div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                                <a class="flex items-center" href=""> <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                                <a class="flex items-center mt-5" href="{{route('showedituserfillaccount', $userinformation->username)}}"> <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings </a>
                                <a class="flex items-center mt-5" href="{{route('showforgetpassword')}}"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                                <a class="flex items-center mt-5" href=""> <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings </a>
                            </div>

                            <div class="p-5 border-t flex">
                                <button  type="button" class="button button--sm block bg-theme-1 text-white"><a href="{{route('publishprofile', auth()->user()->token)}}">View Your Profile</a></button>
                            </div>
                        </div>
                        <div class="p-5 border-t border-gray-200 dark:border-dark-5">

                   {!! QrCode::size(150)->generate(url('userprofile/user/'.$user->token)); !!}

                   <div>
                   <a class="flex items-center mt-5" ><i data-feather="box" class="w-4 h-4 mr-2"></i> Your Profile Link: </a>
                   <input type="text" value="{{url("/userprofile/user/$user->token")}}" id="myProfileLink">
                   <button class="button button--sm border text-gray-700 dark:border-dark-5 dark:text-gray-300 ml-auto"" onclick="myFunction()">Copy </button>
                   </div>

                    </div>
                    </div>

                    <!-- END: Profile Menu -->
                    <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                        <!-- BEGIN: Social Media Link -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Social Media Links

                                </h2>
                                <div class="font-medium text-gray-700 dark:text-gray-500"> <a href = "{{route('showedituserfillaccount', $userinformation->username)}}"><button type="button" class="button button--sm block bg-theme-1 text-white">Edit</button></a></div>
                            </div>
                            <div class="p-5">
                                <div class="relative flex items-center">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-4.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="{{$userinformation->socialmedialink}}" class="font-medium">Facebook</a>
                                        <div class="text-gray-600 mr-5 sm:mr-5">{{$userinformation->socialmedialink}}</div>
                                    </div>
                                </div>
                                <div class="relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="{{$userinformation->instagramlink}}" class="font-medium">Instagram</a>
                                        <div class="text-gray-600 mr-5 sm:mr-5">{{$userinformation->instagramlink}}</div>
                                    </div>
                                </div>
                                <div class="relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-9.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="{{$userinformation->twitterlink}}" class="font-medium">Twitter</a>
                                        <div class="text-gray-600 mr-5 sm:mr-5">{{$userinformation->twitterlink}}</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Social Media Link -->

                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    About your information

                                </h2>
                                <div class="font-medium text-gray-700 dark:text-gray-500"> <a href = "{{route('showedituserfillaccount', $userinformation->username)}}"><button type="button" class="button button--sm block bg-theme-1 text-white">Edit</button></a></div>
                            </div>
                            <div class="p-5">
                                <p>{{$userinformation->about}}</p>
                            </div>
                        </div>
                        <!-- END: Social Media Link -->
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>

        <script>
            function myFunction() {

              var copyText = document.getElementById("myProfileLink");

              copyText.select();
              copyText.setSelectionRange(0, 99999); // For mobile devices

              navigator.clipboard.writeText(copyText.value);
            }
            </script>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
