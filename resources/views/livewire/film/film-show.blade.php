<div class="flex items-center justify-center mt-10 w-full">
    <div class="md:w-1/2 ">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-white rounded rounded-r-lg shadow-md">
            <div>
                <img src="{{$film->poster_path}}" alt="{{$film->title}}" width="500" height="500"
                     class="rounded-l-lg object-cover"/>
            </div>
            <div class="">
                <h3>{{$film->title}}</h3>
                <div class="mr-5 ml-5 mt-10">
                    {{$film->overview}}
                </div>
            </div>
        </div>
    </div>
</div>
