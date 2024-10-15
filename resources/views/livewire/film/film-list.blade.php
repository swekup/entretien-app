<div>
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-center">
            <h2>Liste des films</h2>
        </div>
        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                @foreach($films as $film)
                    <a href="{{route('film.show',['film'=> $film])}}"
                       class="scale-100 p-6 bg-white  from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 flex items-center justify-center">
                                <img src="{{$film->poster_path}}" alt="{{$film->title}}"/>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900">{{$film->title}}</h2>

                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                {{$film->overview}}
                            </p>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                {{ $films->links() }}
            </div>
        </div>
    </div>
</div>
