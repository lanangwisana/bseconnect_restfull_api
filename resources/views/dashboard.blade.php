<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>BSEConnect</title>
</head>
<body class = "bg-gray-100">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 border-b-2 w-full">
        <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset ("images/bsec-logo.jpg")}}" class="h-14, w-14" alt="BSEC Logo" />
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-[600px] w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full ml-8 mt-1 md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/dashboard" class="block pb-2 px-3 text-blue-700 rounded underline underline-offset-[34px] md:bg-transparent  md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Dashboard</a>
                </li>
                <li>
                    <a href="/presensi" class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Presence</a>
                </li>
                <li>
                    <a href="/substitute" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Substitut teacher</a>
                </li>
                <li>
                    <a href="/reschedule" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Re schedule</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class = "mt-2">  
        <div class="relative left-[240px] max-w-7xl p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img src="{{asset ("images/bsec-logo.jpg")}}" class="h-24, w-24" alt="BSEC Logo" />
            <a href="#">
                <h5 class="mt-3 mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Welcome to BSEConnect Dashboard</h5>
            </a>
            <p class="mt-5 mb-1 font-normal text-gray-500 dark:text-gray-400">BSEConnect adalah sebuah sistem presensi guru yang dimiliki oleh Yayasan Tohbe Niti Sastra Brown Smart Education Center</p>
            <p class="mb-1 font-normal text-gray-500 dark:text-gray-400">BSEConnect resmi dibentuk pada 15 Juli 2012</p>
            <a href="https://www.instagram.com/brownsmarteducation/" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                See our social media
                <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778"/>
                </svg>
            </a>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>