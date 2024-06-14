<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
        {{-- navigation bar --}}
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
                        <a href="/presensi" class="block py-2 px-3 text-blue-700 rounded underline underline-offset-[34px] hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Presence</a>
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
        <div class="relative left-[230px] font-bold text-2xl py-1 flex flex-row gap-2">
            <a href="/presensi">
                <svg class=" relative top-[9px] w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
                </svg>
            </a>
            <h2>Substitute Teacher</h2>
        </div>
        <form id="editForm" class="mt-24">
            <input type="hidden" id="presensiId" name="presensiId" value="{{ $id }}">
            <div class="relative left-[230px] mb-5 w-2/6">
                <label for="name" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Name</label>
                <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your name..." name="name">
            </div>
            <div class="relative left-[230px] mb-5 w-2/6">
                <label for="subject" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Subject</label>
                <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your subject..." name="subject">
            </div>
            <div class="relative left-[230px] max-w-sm mb-5 w-2/6">
                <label for="subject" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Date</label>
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V4ZM2 6h16v3H2V6Zm2 11v-7h2v7H4Zm4 0v-7h4v7H8Zm8 0h-2v-7h2v7Z"/>
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="date">
                </div>
            </div>
            <div class="relative left-[230px] mb-5 w-2/6">
                <label for="grade" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">Grade</label>
                <input type="text" id="grade" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter your grade..." name="grade">
            </div>
            <div class="relative left-[230px] mb-5 w-2/6">
                <button type="submit" class="w-full px-4 py-2 text-base font-medium text-center text-white transition duration-500 ease-in transform bg-blue-600 shadow-md lg:w-full hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 rounded">Save</button>
            </div>
        </form>
        
        <script>
            $(document).ready(function() {
                let id = {{ $id }};
                $.ajax({
                    url: `http://127.0.0.1:8000/api/substitutes/${id}`,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log('Data presensi:', response.data); // Debugging line
                        if (response.data) {
                            $('#name').val(response.data.name);
                            $('#subject').val(response.data.subject);
                            $('#date').val(response.data.date);
                            $('#grade').val(response.data.grade);
                        } else {
                            alert('Data tidak ditemukan.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data:', status, error); // Debugging line
                        alert('Gagal memuat data. Silakan periksa koneksi internet Anda atau hubungi administrator.');
                    }
                });
        
                $('#editForm').submit(function(e) {
                    e.preventDefault();
                    let url = `http://127.0.0.1:8000/api/substitutes/${id}`;
                    let method = 'PUT';
        
                    $.ajax({
                        url: url,
                        type: method,
                        dataType: 'json',
                        data: $(this).serialize(),
                        success: function(response) {
                            alert('Data berhasil disimpan!');
                            window.location.href = '/substitute';
                        },
                        error: function(xhr) {
                            alert('Gagal menyimpan data.');
                        }
                    });
                });
            });
        </script>  
</body>
</html>