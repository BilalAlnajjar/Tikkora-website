<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$general ? $general->name : 'web'}}</title>
    <link href="{{asset('css/new-style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{$general ? $general->favicon : ''}}">
    <script src="https://cdn.tailwindcss.com"></script>

    <script
        src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
        crossorigin="anonymous"></script>


    <meta name="description" content="تيك كورة لبث المباريات اون لاين وبجودة عالية HD وبدون تقطيع ويمكن متابعة موقعنا علي جميع انواع الشاشات حيث يتميز موقع تيك كورة بسهولة التصفح بالاضافة الى اهم اخبار الكورة الاوربية والعالمية">
    <meta name="keywords" content=" tikkora،تيك كرره ،تيك كورة، رياضة، كرة القدم، بث مباريات، موقع رياضي، كرة القدم العالمية، تغطية مباريات، الدوريات العالمية">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        html {
            scroll-behavior: smooth;
        }
        body{
            font-family: 'Cairo', sans-serif !important;
        }
        img{
            max-width: 100%;
        }


        .section{
            color:white;
        }

        .max-w-full *,.section *,newsDescription *{
            font-family: 'Cairo', sans-serif !important;
        }
        *{
            max-width: 100%;
        }
        .active {
            /*border-color: currentColor;*/
            border-color: #ffffff !important;

        }
        .hidden{
            display: none;
        }
        .items{
            font-family: "Tajawal", sans-serif;
            font-weight: 500;
        }
    </style>
</head>
<body>

<header>
    <nav class="py-0.5 md:px-20 px-2.5 box-border border-gray-200 bg-purple-800 dark:bg-blue-800 dark:border-gray-700"
         style="background: #5514B4">
        <div class="container px-5 flex flex-wrap items-center justify-between mx-auto"
             style="flex-direction: row-reverse">
            <a href="/" class="flex items-center justify-center gap-3">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{$general ? $general->name : 'web'}}</span>
                <img src="{{$general ? asset($general->logo_header) : ''}}" class="h-20 mr-3" alt="Logo">
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden  focus:outline-none"
                    aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col mt-4 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent">
                    <li>
                        @auth
                            @php
                                $user = \Illuminate\Support\Facades\Auth::user()
                            @endphp

                            @if($user->type == 'admin')
                                <a href="{{route('dashboard')}}"
                                   class="btn-dashboard btn border-2 px-2 rounded border-warning text-warning mr-3">لوحة
                                    التحكم</a>
                            @endif

                        @endauth
                    </li>
                    <li>
                        <a href="/#news"
                           class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            اخر الاخبار</a>
                    </li>
                    <li>
                        <a href="/#matches"
                           class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">قائمة
                            المباريات</a>
                    </li>
                    <li>
                        <a href="/#about_us"
                           class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0  md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">من
                            نحن</a>
                    </li>
                    <li>
                        <a href="/"
                           class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">الرئيسية</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



@yield('content')


<footer class="p-4 bg-white sm:p-6 dark:bg-gray-800" style="background: #5514B4">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between items-baseline">
            <div class="">
                <div>
                    <ul class="flex text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="{{route('dmca')}}" class=" mr-4  hover:underline  md:mr-6">DMCA</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{route('privacy.policy')}}" class="mr-4 hover:underline md:mr-6">سياسة الخصوصية</a>
                        </li>

                        <li class="mb-4">
                            <a href="{{route('contact.us')}}" class=" hover:underline">اتصل بنا</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{$general ? $general->name : 'web'}}</span>
                    <img src="{{$general ? asset($general->logo_footer) : ''}}" class="h-20 ml-3" alt="FlowBite Logo" />
                </a>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center justify-between text-center">
            <span class="text-sm text-white sm:text-center">© 2023 <a href="https://www.mediabirdco.com" class="hover:underline">. جميع الحقوق محفوظة لصالح شركة ميديا بيرد</a>
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                @foreach($socials as $social)
                    <a href="{{$social->link}}" class="dark:hover:text-white">
                        {!!html_entity_decode($social->icon)!!}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>



{{--<script src="../path/to/flowbite/dist/flowbite.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

<script
    src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
    crossorigin="anonymous"></script>

<!-- Javascript code -->
<script>
    var gameitems = []
    var levelTeams = document.getElementById("levelTeams");
    var chanel = document.getElementById("chanel");
    var commentator = document.getElementById("commentator");
    var pitch = document.getElementById("pitch");


    setInterval(function () {
        $('.changeBg').css('background-color', function (_, bgColor) {
            return bgColor === 'rgb(85, 33, 181)' ? 'rgb(213,12,12)' : 'rgb(85, 33, 181)';
        });
    }, 250);


    var buttonLevelTeams = document.getElementById("buttonLevelTeams");
    var buttonChanel = document.getElementById("buttonChanel");
    var buttonCommentator = document.getElementById("buttonCommentator");
    var buttonPitch = document.getElementById("buttonPitch");

    function showDetails(tag) {
        // Show the dots

        var element = tag.parentElement.children[1].classList;
        let iconUp = tag.children[0].classList
        let iconDown = tag.children[1].classList

        if (iconUp.contains('hidden')) {
            iconUp.remove('hidden')
        } else {
            iconUp.add('hidden')
        }

        if (iconDown.contains('hidden')) {
            iconDown.remove('hidden')
        } else {
            iconDown.add('hidden')
        }

        if (element.contains('hidden')) {
            element.remove('hidden')
        } else {
            element.add('hidden')
        }
    }

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "{{route('today.game')}}",
            data: "check",
            success: function (response) {
                $(".items").empty()
                $("#today").addClass('active')
                $('#yesterday').removeClass('active')
                $('#all').removeClass('active')
                $('#tomorrow').removeClass('active')
                let games = response
                $.each(games, itemGame)

            }
        });
    });


    $("#all").click(function () {
        $.ajax({
            type: "GET",
            url: "{{route('all.game')}}",
            data: "check",
            success: function (response) {
                $(".items").empty()
                $("#all").addClass('active')
                $('#today').removeClass('active')
                $('#yesterday').removeClass('active')
                $('#tomorrow').removeClass('active')
                let games = response
                $.each(games, itemGame)

            }
        });
    });

    $("#tomorrow").click(function () {
        $.ajax({
            type: "GET",
            url: "{{route('tomorrow.game')}}",
            data: "check",
            success: function (response) {
                $(".items").empty()
                $("#tomorrow").addClass('active')
                $('#today').removeClass('active')
                $('#yesterday').removeClass('active')
                $('#all').removeClass('active')
                let games = response
                $.each(games, itemGame)

            }
        });
    });

    $("#yesterday").click(function () {
        $.ajax({
            type: "GET",
            url: "{{route('yesterday.game')}}",
            data: "check",
            success: function (response) {
                $(".items").empty()
                $("#yesterday").addClass('active')
                $('#today').removeClass('active')
                $('#all').removeClass('active')
                $('#tomorrow').removeClass('active')
                let games = response
                $.each(games, itemGame)

            }
        });
    });

    $("#today").click(function () {
        $.ajax({
            type: "GET",
            url: "{{route('today.game')}}",
            data: "check",
            success: function (response) {
                $(".items").empty()
                $("#today").addClass('active')
                $('#yesterday').removeClass('active')
                $('#all').removeClass('active')
                $('#tomorrow').removeClass('active')
                let games = response
                $.each(games, itemGame)

            }
        });
    });


    function itemGame(key, game) {
        let date = new Date(game.partydate)
        var timeZone = 'Asia/Jerusalem';

// استخدام Intl.DateTimeFormat() لتنسيق التاريخ والوقت بناءً على المنطقة الزمنية المحددة
        var options = {
            timeZone: timeZone,
            hour12: true,
            hour: 'numeric',
            minute: 'numeric',
        };
        var partydate = new Intl.DateTimeFormat('en-US', options).format(date);
        let result = ""
        console.log(game.country)
        if(game.result != null){
            result = game.result
        }
        gameitems = game

        $('.items').append(
            '<div class=" relative w-full h-full py-6 sm:px-10 px-3  z-0 items-center match-container border border-gray-200 rounded-lg shadow md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">' +
            '<div class="flex flex-col relative z-40 ">' +
            '<div class="title flex flex-row md:text-xl text-sm justify-center mb-2.5">' +
            '<p class="flex flex-row-reverse gap-2 justify-center">' +
            '<span class="w-auto">'+game.country+'</span>'+
            '<span class="flex flex-row-reverse w-auto">'+game.league+
            ',</span>'+
            '<span class="w-auto">'+game.round+',</span>'+
            '<img class="md:w-6 h-auto" src="' + game.logo_league + '" alt="logo" width="25"/>' +
            '</p>' +
            '</div>' +
            '<a class="flex flex-row relative z-40 justify-around"' +
            ((game.state === 'جارية الان' || game.state === 'بعد قليل')? 'href="/show-match/' + game.id +'"': '')+
            '>' +
            '<div class="right-content w-2/6 flex flex-col gap-3 mt-7">' +
            '<div class="right-logo col-5 flex justify-center">' +
            '<img alt="img" class="w-3/6" src="' + game.logo_team_one + '" width="100"/>' +
            '</div>' +
            '<div class="team-name text-center">' +
            '<h1 class="md:text-xl text-sm">' + game.name_team_one + '</h1>' +
            '</div>' +
            '</div>' +
            '<div class="center-content w-1/2 gap-5 flex flex-col text-center justify-center">' +
            '<div class="date_time flex flex-col gap-6">' +
            '<div class="time md:text-xl text-sm">' +
            '' + partydate + '' +
            '</div>' +
            '</div>' +
            '<div class="result">' +
            '<h1 class="md:text-4xl text-2xl"> ' + result + ' </h1>' +
            '</div>' +
            '<div class="state bg-purple-800 w-2/4 rounded-full mx-auto md:text-xl text-sm">' +
            '' + game.state + '' +
            '</div>' +
            '</div>' +
            '<div class="left-content w-2/6 flex flex-col gap-3 mt-7">' +
            '<div class="right-logo flex justify-center">' +
            '<img alt="img" class="w-3/6" src="' + game.logo_team_two + '" width="100"/>' +
            '</div>' +
            '<div class="team-name text-center">' +
            '<h1 class="md:text-xl text-sm">' + game.name_team_two + '</h1>' +
            '</div>' +
            '</div>' +
            '</a>' +

            '<div class="flex flex-row-reverse justify-center sm:gap-0 gap-3 mt-4">' +

            '<div class=" w-1/3 flex flex-col items-center">' +
            '<button onclick="showDetails(this)" id="buttonChanel" class="mt-3 flex justify-between gap-1 sm:gap-2 sm:px-5  py-2 text-white sm:text-base text-xs duration-300">' +
            '<i  class="fa-solid fa-chevron-up  hidden iconUp sm:text-base text-xs "></i>'+
            '<i  class="fa-solid fa-chevron-down   iconDown sm:text-base text-xs"></i>'+
            'القناة' +
            '<i class="fas fa-tv sm:text-base text-xs box-border"></i>'+
            ' </button>' +
            '<div id="chanel" class="hidden">' + game.chanel + ' </div>' +
            '</div>' +
            '<div class=" w-1/3 flex flex-col items-center">' +
            '<button onclick="showDetails(this)" id="buttonCommentator" class="mt-3 flex justify-between gap-1 sm:gap-2 sm:px-5 py-2 text-white duration-300 sm:text-base text-xs ">' +
            '<i  class="fa-solid fa-chevron-up  hidden iconUp sm:text-base text-xs"></i>'+
            '<i  class="fa-solid fa-chevron-down  iconDown sm:text-base text-xs"></i>'+
            'المعلق' +
            '<i class="fas fa-microphone  sm:text-base text-xs"></i>'+
            '</button>' +
            '<div id="commentator" class="hidden">' + game.speaker + '</div>' +
            '</div>' +
            '<div class=" w-1/3 flex flex-col items-center">' +
            '<button onclick="showDetails(this)" id="buttonPitch" class="mt-3 flex justify-between sm:px-5 gap-1 sm:gap-2 py-2 text-white duration-300 sm:text-base text-xs">' +
            '<i  class="fa-solid fa-chevron-up  hidden iconUp sm:text-base text-xs"></i>'+
            '<i  class="fa-solid fa-chevron-down   iconDown sm:text-base text-xs"></i>'+
            'الملعب' +
            '<i class="fas fa-futbol sm:text-base text-xs"></i>'+
            '</button>' +
            '<div id="pitch" class="hidden">' + game.stadium + '</div>' +
            '</div>' +


            '</div>' +

            '</div>' +

            '<div class="absolute rounded-lg overlay-match z-10 top-0 bottom-0 left-0 right-0 w-full h-full bg-purple-800">' +

            '</div>' +
            '</div>')

        if (game.state == "جارية الان") {
            $('.state').addClass('changeBg');
        }
    }

    function formatAMPM(date) {
        console.log(date)
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0' + minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;
        return strTime;
    }
</script>


</body>
</html>
