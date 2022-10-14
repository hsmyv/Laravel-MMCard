<div class="col-span-12 lg:col-span-8 xxl:col-span-9">
    <!-- BEGIN: Social Media Link -->
    <div class="intro-y box lg:mt-5">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
            <h2 class="font-medium text-base mr-auto">
                Social Media Links
            </h2>
            <div class="font-medium text-gray-700 dark:text-gray-500">
                <a href = "{{route('showeditsocialmedialinks', $userinformation->username)}}">
                <button type="button" class="button button--sm block bg-theme-1 text-white">Edit</button></a>
            </div>
        </div>

        <div class="p-5">
            @foreach ($socialmedialinks as $socialmedialink )
            <div class="relative flex items-center mt-3">
                <div class="w-12 h-12 flex-none image-fit">
                    <img alt="" class="rounded-full" src ="">
                </div>
                <div class="ml-4 mr-auto">
                    <a href="{{$socialmedialink->socialmedialink}}" class="font-medium">{{$socialmedialink->socialmedialink}}</a>
                    <div class="text-gray-600 mr-5 sm:mr-5">{{$socialmedialink->socialmedialink}}</div>
                </div>
                    <form method="POST" action="{{route('deletesocialmedialink', $socialmedialink->id)}}">
                        @csrf
                        @method('DELETE')
                        <div class="font-medium text-gray-700 dark:text-gray-500"><button class="button button--sm block bg-theme-1 text-white">Delete</button></div>
                         <a href = "{{route('showAddSocialmedia')}}">
                            <button type="button" class="button button--sm block bg-theme-1 text-white">Add</button></a>

                    </form>
                </div>
            @endforeach
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
            <p>{{$userinformation->username}}</p>
        </div>

        <div class="p-5">
            <p>{{$userinformation->about}}</p>
        </div>
        <div class="p-5">
            <p>+994{{$userinformation->phone}}</p>
        </div>

    </div>
    <!-- END: Social Media Link -->
</div>
