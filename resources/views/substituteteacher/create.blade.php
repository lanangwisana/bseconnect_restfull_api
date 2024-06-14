<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 border-b-2 fixed z-50 top-0 w-full">
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
                    <a href="/dashboard" class="block pb-2 px-3 text-gray-700 rounded md:bg-transparent  md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Dashboard</a>
                </li>
                <li>
                    <a href="/presensi" class="block py-2 px-3 text-blue-700 rounded hover:bg-gray-100  underline underline-offset-[34px] md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Presence</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Substitut teacher</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Re schedule</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="relative left-[230px] mt-24 font-bold text-2xl py-1 flex flex-row gap-5">
        <a href="/presensi">
            <svg class=" relative top-[9px] w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
            </svg>
        </a>
        <h2>Substitute Teacher</h2>
    </div>
    <form id="rescheduleForm" enctype="multipart/form-data" class="mt-2">
        @csrf
        <div class="relative left-[230px] mb-5 w-2/6">
            <label for="name" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Name</label>
            <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name..." name="name" value="{{ old('name') }}">
        </div>
        <div class="relative left-[230px] mb-5 w-2/6">
            <label for="subject" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Subject</label>
            <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your subject..." name="subject" value="{{ old('subject') }}">
        </div>
        <div class="relative left-[230px] max-w-sm mb-5 w-2/6">
            <label for="subject" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Subject</label>
            <div class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input datepicker datepicker-format="yyyy/mm/dd" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="date" value="{{ old('date') }}">
            </div>
        </div>
        <div class="relative left-[230px] mb-5 w-2/6">
            <label for="grade" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Grade</label>
            <input type="text" id="grade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Use roman numerals..." name="grade" value="{{ old('grade') }}">
        </div>
        <button type="submit" class="text-white bg-blue-700 relative left-[230px] mb-5 w-2/6 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
    </form> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#rescheduleForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'http://localhost:8000/api/substitutes',
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false, 
                    success: function(response) {
                        alert('Form submitted successfully!');
                        window.location.href = '/substitute'
                    },
                    error: function(response) {
                        alert('An error occurred.');
                    }
                });
            });
        });
    </script>
</body>
</html>