@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-0 lg:px-0">
    <div class="flex justify-center pt-0 sm:justify-start sm:pt-0">
        <div class="mt-6 text-black-600 dark:text-black-400 text-sm">
            <h1>FANGPLAY OFFICIAL</h1>
            <h3 id="MyClockDisplay" class="clock" onload="showTime()"></h3>
            <div>
                <img src="/img/prologue-time.jpg" height="100%" width="100%" alt="Image">
            </div>
          <script>
            function showTime(){
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";

            if(h == 0){
                h = 12;
            }

            if(h > 12){
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();</script>
        </div>
    </div>

    {{-- <div class="mt-8 bg-gray dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/info" class="underline text-gray-900 dark:text-white">Information</a></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/expirences" class="underline text-gray-900 dark:text-white">Gamer & Expirience</a></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/game-list" class="underline text-gray-900 dark:text-white">Game List</a></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/contact" class="underline text-gray-900 dark:text-white">Contact</a></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/generations" class="underline text-gray-900 dark:text-white">Generations</a></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/projects" class="underline text-gray-900 dark:text-white">Projects</a></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/release" class="underline text-gray-900 dark:text-white">Game Release List</a></div>
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        <div class="ml-5 text-lg leading-5 font-semibold"><a href="/diary" class="underline text-gray-900 dark:text-white">Diary</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
