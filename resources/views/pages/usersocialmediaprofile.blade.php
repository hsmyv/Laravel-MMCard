<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
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
                        My social medias profile
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6">

                    <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
                        <!-- BEGIN: Social Media Link -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Social Media Links
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="relative flex items-center">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-4.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="{{$userinformation->facebooklink}}" class="font-medium">Facebook</a>
                                        <div class="text-gray-600 mr-5 sm:mr-5">{{$userinformation->facebooklink}}</div>

                                    </div>
                                    <div class="font-medium text-gray-700 dark:text-gray-500"></div>
                                </div>
                                <div class="relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-8.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="{{$userinformation->instagramlink}}" class="font-medium">Instagram</a>
                                        <div class="text-gray-600 mr-5 sm:mr-5">{{$userinformation->instagramlink}}</div>
                                    </div>
                                    <div class="font-medium text-gray-700 dark:text-gray-500"></div>
                                </div>
                                <div class="relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-9.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <a href="{{$userinformation->twitterlink}}" class="font-medium">Twitter</a>
                                        <div class="text-gray-600 mr-5 sm:mr-5">{{$userinformation->twitterlink}}</div>
                                    </div>
                                    <div class="font-medium text-gray-700 dark:text-gray-500"></div>

                                </div>
                            </div>
                        </div>
                        <!-- END: Social Media Link -->
                    </div>
                </div>

            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>
