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

        <title>Login - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="/dist/css/app.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- END: CSS Assets-->
    </head>
    @if (session()->has('success'))
<div x-data = "{show:true}"
    x-init = "setTimeout(() => false, 1000)"
    x-show = "show"
    class = "fixed bg-blue-500 text-white py-1 px-5 rounded-xl bottom-50 right-7 text-sm"
    >
  <p>{{session('success')}} </p>
 </div>
 @endif
        <!-- END: Head -->
        <body class="login">
            <div class="container sm:px-10">
                <div class="block xl:grid grid-cols-2 gap-4">
                    <!-- BEGIN: Login Info -->
                    <div class="hidden xl:flex flex-col min-h-screen">
                        <a href="" class="-intro-x flex items-center pt-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="/dist/images/logo.svg">
                            <span class="text-white text-lg ml-3"> Mid<span class="font-medium">One</span> </span>
                        </a>
                        <div class="my-auto">
                            <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="/dist/images/illustration.svg">
                            <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                                A few more clicks to
                                <br>
                                manage all social media on your account.
                            </div>
                            <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">Manage all your social media accounts in one place</div>
                        </div>
                    </div>
                    <!-- END: Login Info -->


        {{$slot}}

    <!-- BEGIN: JS Assets-->
    <script src="/dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>
