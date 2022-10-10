<x-authentication.layout>

                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Edit Account
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Edit all your social medias on yor account. Manage all your social media accounts in one place</div>
                        <div class="intro-x mt-8">

                            <form id="dynamic_form" method="POST" action="{{route('edituserfillaccount', $userinformation->username)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                            <div>
                            <input name="username" type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Username" value="{{old('username' , $userinformation->username)}}">
                            @error('username')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        </div>
                            <div>
                            <input name="profilepicture" type="file" class="intro-x login__input input input--lg border border-gray-300 block mt-4"  value="{{old('profilepicture', $userinformation->profilepicture)}}">
                            @error('profilepicture')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        </div>

                        <div>
                            <textarea name="about" type="body" class="intro-x login__input input input--lg border border-gray-300 block mt-4" value="{{old('about' , $userinformation->about)}}" placeholder="About">{{old('about', $userinformation->about)}}</textarea>
                            @error('about')
                        <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                            @enderror
                        </div>
                        <a>Add your social media profiles:</a>
                          <div id = "dynamicTable">
                        <div>

                            @foreach ($socialmedialinks as $socialmedialink )

                            <input name="addmore[0][socialmedialink]" type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" value="{{$socialmedialink->socialmedialink}}" placeholder="Add socialmedia profile link">
                                @endforeach
                            @error('socialmedialink')
                            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
                                @enderror
                         </div>
                         <button type="button" name="add" id="add" class="button xl:w-32 text-white bg-theme-1 xl:mr-3 align-top mt-2 btn btn-success">Add</button>
                        </div>


                    </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-center">
                            <button name="save" id="save" type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top btn btn-success">Edit</button>
                        </form>
                        <a href="{{route('showuserprofile', $userinformation->username)}}"><button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top">Cancel</button></a>


                        </div>
                    </div>
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <script type="text/javascript">

            var i = 0;

            $("#add").click(function(){

                ++i;

                $("#dynamicTable").append('<tr><td><input class="intro-x login__input input input--lg border border-gray-300 block mt-4 type="text" name="addmore['+i+'][socialmedialink]" placeholder="Add social media profile link" </td><td><button type="button" class="button button--lg w-full xl:w-25 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 xl:mt-0  remove-tr">Remove</button></td></tr>');
            });

            $(document).on('click', '.remove-tr', function(){
                 $(this).parents('tr').remove();
            });

        </script>
    </x-authentication.layout>
