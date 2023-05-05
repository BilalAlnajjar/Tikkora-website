@extends('pages.layouts.user')
@section('content')

    @if($general)
        @if($general->state_slides == "on")
    <div id="default-carousel" class="relative" data-carousel="static">

        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden slider">
            <!-- Item 1 -->
            {{--        <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
            {{--            <span--}}
            {{--                class="absolute text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>--}}
            {{--            <img src="{{asset('images/b6ef361d-3a2f-4066-b5cb-0b294dd46c47.jpg')}}" width="100"--}}
            {{--                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
            {{--        </div>--}}
            <!-- Item 2 -->
            @foreach($slides as $slaid)
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img width="100" src="{{asset($slaid->image)}}"
                         class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            @endforeach
            <!-- Item 3 -->
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            @foreach($slides as $key => $slaid)
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="{{$key}}"></button>
            @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>
        @endif
    @endif

    @if($general)
        @if($general->state_aboutAs == "on")
        <div id="about_us" class="text-gray-700 py-8 border-t-4 border-white bg-white">
            <h2 class="text-3xl text-center"> من نحن </h2>
            <div class="flex flex-row-reverse justify-around flex-wrap">
                <div class="lg:w-1/3 md:w-full p-5">

                    <img src="{{asset($general->about_as_image)}}" class="w-full rounded-lg mx-auto">

                </div>
                <div class="px-4 flex items-center text-end lg:w-1/2 md:w-full p-5">
                    <p class="max-w-full" style="font-family:'Cairo'!important;">
                        {!! html_entity_decode($general->about_as_text) !!}
                    </p>
                </div>

            </div>
        </div>
            @endif
    @endif

    <div id="matches" class="pt-8 pb-20 border-t-4 border-white list-matches">
        <h2 class="text-3xl text-center">قائمة المباريات</h2>
        <div class=" lg:w-8/12 w-full py-8 mt-14  mx-auto px-8 flex flex-col justify-center items-center gap-9 rounded-lg">
            <div class="btns flex justify-center w-full">

                <button id="tomorrow" class=" mx-2 sm:w-1/5 w-1/3  font-bold md:text-lg text-sm border-b-2 border-double
    border-transparent hover:border-current cursor-pointer select-none">
                    مباريات الغد
                </button>
                <button id="today" class=" mx-2  sm:w-1/5 w-1/3 font-bold border-b-2 md:text-lg text-sm border-double
    border-transparent hover:border-current cursor-pointer select-none">
                    مباريات اليوم
                </button>
                <button id="yesterday" class=" mx-2 sm:w-1/5 w-1/3  font-bold md:text-lg text-sm   border-b-2 border-double
    border-transparent hover:border-current cursor-pointer select-none">
                    مباريات الامس
                </button>
            </div>
            <div class="items w-full flex flex-col justify-center items-center gap-4">

            </div>
        </div>

    </div>
    @if($general)
        @if($general->state_news == "on")
    <div id="news" class="text-gray-700 py-8 border-t-4 border-white bg-white">
        <h2 class="text-3xl text-center"> اخر الاخبار </h2>
        <div class="flex flex-row-reverse p-4 flex-wrap justify-center">
            @foreach($newses as $news)
                <div class="lg:w-1/4 md:w-1/2 sm:w-full p-5">
                    <div
                        class="max-w-sm bg-white border text-end border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{asset($news->image)}}" alt=""/>
                        </a>
                        <div class="p-5">
                            <a href="{{route('news.show',$news)}}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{$news->title}}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 newsDescription">{!! html_entity_decode($news->part_description) !!}</p>
                            <a href="{{route('news.show',$news)}}" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-1.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 cursor-pointer">قراءة
                                المزيد</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
        @endif
    @endif

@endsection
