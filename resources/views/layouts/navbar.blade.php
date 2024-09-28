<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        }

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        }

        // Close dropdown if clicked outside
        window.onclick = function(event) {
            const dropdownMenu = document.getElementById('dropdownMenu');
            if (!event.target.matches('button')) {
                if (!dropdownMenu.classList.contains('hidden')) {
                    dropdownMenu.classList.add('hidden');
                }
            }
        };

        // Function to submit the logout form
        function submitLogout() {
            document.getElementById('logout-form').submit();
        }
    </script>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-gray-100">
    <nav class="bg-gradient-to-r from-orange-600 to-orange-700 shadow-lg sticky top-0 z-40">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0">
                    @auth
                        <a href="{{ route('member') }}"">
                            <img src="./img/4.png" alt=""
                                class="w-32 h-auto max-w-full transition-transform duration-300 ease-in-out transform hover:scale-105">
                            <!---Logo-->
                        </a>
                    @else
                        <a href="{{ route('firstPage') }}"">
                            <img src="./img/4.png" alt=""
                                class="w-32 h-auto max-w-full transition-transform duration-300 ease-in-out transform hover:scale-105">
                            <!---Logo-->
                        </a>
                    @endauth
                </div>
                <div class="hidden md:flex items-center justify-end flex-1">
                    <div class="flex items-baseline space-x-4">
                        @auth
                            <a href="{{ route('member') }}"
                                class="text-white hover:bg-orange-500 hover:text-gray-100 px-3 py-2 rounded-md text-xl font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-md font-kanit">หน้าหลัก</a>
                        @else
                            <a href="{{ route('firstPage') }}"
                                class="text-white hover:bg-orange-500 hover:text-gray-100 px-3 py-2 rounded-md text-xl font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-md font-kanit">หน้าหลัก</a>
                        @endauth
                        <a href="{{ route('search') }}"
                            class="text-white hover:bg-orange-500 hover:text-gray-100 px-3 py-2 rounded-md text-xl font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-md font-kanit">ค้นหาของหาย</a>
                        <a href="{{ route('uploadFound') }}"
                            class="text-white hover:bg-orange-500 hover:text-gray-100 px-3 py-2 rounded-md text-xl font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-md font-kanit">แจ้งพบของ</a>
                        <a href="{{ route('uploadFind') }}"
                            class="text-white hover:bg-orange-500 hover:text-gray-100 px-3 py-2 rounded-md text-xl font-medium transition duration-300 ease-in-out transform hover:-translate-y-1 hover:shadow-md font-kanit">ค้นหาของ</a>
                        <div class="relative ml-3">
                            <button onclick="toggleDropdown()"
                                class="font-extrabold text-sm px-3 py-2 rounded-full text-white bg-orange-600 border-2 border-orange-500 hover:bg-white hover:text-orange-600 hover:border-orange-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105 flex items-center justify-center">
                                <i class="fa-solid fa-user text-lg"></i>
                            </button>
                            <div id="dropdownMenu"
                                class="hidden absolute right-0 w-48 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg animate-fadeIn">
                                <div class="px-4 py-3 bg-orange-100">
                                    <p class="text-sm font-medium text-orange-800">Account</p>
                                </div>
                                <div class="py-1">
                                    @auth
                                        <a href="{{ route('profile') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100 transition duration-200">Profile</a>
                                        <a href="#" onclick="submitLogout()"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100 transition duration-200">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-orange-100 transition duration-200">Login</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button onclick="toggleMobileMenu()" type="button"
                        class="bg-orange-600 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-orange-800 focus:ring-white transition duration-300 ease-in-out">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobileMenu" class="hidden md:hidden animate-fadeIn">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-orange-600">
                @auth
                    <a href="{{ route('member') }}"
                        class="text-white hover:bg-orange-500 hover:text-gray-100 block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out font-kanit"><i
                            class="fa-solid fa-house mr-2"></i>หน้าหลัก</a>
                @else
                    <a href="{{ route('firstPage') }}"
                        class="text-white hover:bg-orange-500 hover:text-gray-100 block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out">หน้าหลัก</a>
                @endauth
                <a href="{{ route('search') }}"
                    class="text-white hover:bg-orange-500 hover:text-gray-100 block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out font-kanit">
                    <i class="fa-solid fa-magnifying-glass mr-2"></i>ค้นหาของหาย</a>
                <a href="{{ route('uploadFound') }}"
                    class="text-white hover:bg-orange-500 hover:text-gray-100 block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out font-kanit ml-1"><i
                        class="fa-solid fa-exclamation mr-2"></i>แจ้งพบของหาย</a>
                <a href="{{ route('uploadFind') }}"
                    class="text-white hover:bg-orange-500 hover:text-gray-100 block px-3 py-2 rounded-md text-base font-medium transition duration-300 ease-in-out font-kanit"><i
                        class="fa-solid fa-hand mr-2"></i>แจ้งค้นหาของ</a>
            </div>
            <div class="pt-4 pb-3 border-t border-orange-700 bg-orange-600">
                <div class="flex items-center px-5">
                    <div class="">
                        <div class="text-base font-medium leading-none text-white font-kanit"><i
                                class="fa-solid fa-user mr-2"></i>Account</div>
                    </div>
                </div>
                <div class="mt-3 px-2 space-y-1">
                    @auth
                        <a href="{{ route('profile') }}"
                            class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-orange-500 hover:text-gray-100 transition duration-300 ease-in-out font-kanit"><i class="fa-regular fa-address-card mr-2"></i>โปรไฟล์</a>
                        <a href="#" onclick="submitLogout()"
                            class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-orange-500 hover:text-gray-100 transition duration-300 ease-in-out font-kanit"><i class="fa-solid fa-right-from-bracket mr-2"></i>ออกจากระบบ</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-orange-500 hover:text-gray-100 transition duration-300 ease-in-out font-kanit"><i class="fa-regular fa-address-card mr-2"></i>เข้าสู่ระบบ</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    @yield('content')
</body>

</html>
