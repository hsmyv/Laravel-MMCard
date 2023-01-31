<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <title>User Profile</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="/dist/css/app.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>

        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/templatemo-seo-dream.css">
        <link rel="stylesheet" href="/assets/css/animated.css">
        <link rel="stylesheet" href="/assets/css/owl.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <!-- END: CSS Assets-->
    </head>
    <body class="app">
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
  </div>
    <!-- BEGIN:  Information -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
                 Information
            </h2>
        </div>
        <div class="p-5">
            <div class="grid grid-cols-12 gap-5">
                <div class="col-span-12 xl:col-span-4">
                    <div class="border border-gray-200 dark:border-dark-5 rounded-md p-12">
                        <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                            @if(file_exists(public_path().'/storage/'.$userinformation->profilepicture))
                            <img class="rounded-md" src="{{ asset('storage/' .$userinformation->profilepicture)}}">
                            @else
                            <img class="rounded-md" src="/dist/images/profile-6.jpg">
                            @endif
                        </div>

                    </div>
                </div>
                <div class="col-span-12 xl:col-span-8">
                    <div>
                        <label>Username</label>
                        <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$userinformation->username}}" disabled>
                    </div>
                    <div class="mt-3">
                        <label>About</label>
                        <textarea type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$userinformation->about}}" disabled>{{$userinformation->about}}</textarea>
                    </div>
                    <div class="mt-3">
                        <label>Phone</label>
                        <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="{{$userinformation->phone}}" disabled>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!--Start: Corusuel -->
    <div id="portfolio" class="our-portfolio section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                <h6>Social Medias</h6>
                <h2>My Social<em> Media Profiles</em></h2>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="row">
            <div class="col-lg-12">
              <div class="loop owl-carousel">
                @foreach ($datas as $data )
                <div class="item">
                  <div class="portfolio-item">
                    <div class="thumb">
                      <img src="/assets/images/facebook.avif" alt="">
                      <div class="hover-content">
                        <div class="inner-content">
                          <a class="buttonlink" target="_blank" href="{{$data->socialmedialink}}" value="" id="{{$data->id}}"><h4>View</h4></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- END: Corusuel-->



    <!-- END:  Information -->
                        <!-- BEGIN: Social Media Link -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                                <h2 class="font-medium text-base mr-auto">
                                    Social Media Links
                                </h2>
                            </div>
                            <div class="p-5">
                                @foreach( $datas as $data)
                                <div class="relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="/dist/images/profile-4.jpg">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                    <a class="buttonlink" href="{{$data->socialmedialink}}" value="" id="{{$data->id}}" name="link" class="font-medium">view</a>
                                    <div class="text-gray-600 mr-5 sm:mr-5">{{$data->socialmedialink}}</div>
                                    </div>
                                    <div class="font-medium text-gray-700 dark:text-gray-500"></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- END: Social Media Link -->
                    </div>
                </div>

            </div>
            <!-- END: Content -->
        </div>

        <script>

            $( document ).ready(function(e) {

                $(".buttonlink").on('click', function(){
                    var el = $(this);

                   // let linkid = $('#link').val();
                    $.ajax({
                        url: '/socialmedialink',
                        method: 'GET',
                        data: {link: el.attr('id') },
                        success:function(data) {
                            console.log(data);
                        }
                   });
                   e.preventDefault();
                });
            });
            </script>

        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="/dist/js/app.js"></script>
        <!-- END: JS Assets-->
    <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/owl-carousel.js"></script>
  <script src="/assets/js/animation.js"></script>
  <script src="/assets/js/imagesloaded.js"></script>
  <script src="/assets/js/custom.js"></script>


    </body>
</html>

