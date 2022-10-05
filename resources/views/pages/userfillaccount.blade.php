<x-authentication.layout>

                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Add profile
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                        <div class="intro-x mt-8">
                            <form method="POST" action="{{route('userfillaccount')}}" enctype="multipart/form-data">
                                @csrf

                                <div>
                            <input name="username" type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Username" value="{{old('username')}}" required>
                            @error('username')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        </div>

                            <div>
                            <input name="profilepicture" type="file" class="intro-x login__input input input--lg border border-gray-300 block mt-4"  value="{{old("profilepicture")}}">
                            @error('profilepicture')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        </div>

                        <div>
                            <textarea name="about" type="body" class="intro-x login__input input input--lg border border-gray-300 block mt-4" value="{{old("about")}}" placeholder="About"></textarea>
                            @error('about')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        </div>

                        <div>
                            <input name="facebooklink" type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" value="{{old("facebooklink")}}" placeholder="Add facebook profile link">
                            @error('facebooklink')
                            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                @enderror
                         </div>

                        <div>
                            <input name="instagramlink" type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" value="{{old("instagramlink")}}" placeholder="Add instagram profile link">
                            @error('instagramlink')
                            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                @enderror
                        </div>

                        <div>
                        <input name="twitterlink" type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" value="{{old("twitterlink")}}" placeholder="Add twitter profile link">
                        @error('twitterlink')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        </div>


                    </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-center">
                            <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top">Add</button>
                        </form>

                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>

    </x-authentication.layout>

