<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Profile</title>
=======
    <title>หน้าโปรไฟล์</title>
>>>>>>> 2872ce3 (Adding project to GitHub)
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<<<<<<< HEAD
        
    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
        }

        // Close dropdown if clicked outside
        window.onclick = function (event) {
            const dropdownMenu = document.getElementById('dropdownMenu');
            if (!event.target.matches('button')) {
                if (!dropdownMenu.classList.contains('hidden')) {
                    dropdownMenu.classList.add('hidden');
                }
            }
        };
    </script>


</head>

<body class="flex flex-col min-h-screen h-screen">
    @include('layouts.navbar')

    <header class="flex-grow">
        <form action="" class="">
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden mt-8">

                <!-- ส่วนบน -->
                <div class="px-4 py-5 sm:px-6">
                    <h2 class="text-lg font-medium text-gray-900">Account Information</h2>
                    <img id="profileImage" src="./img/frank.png" alt="User Profile" class="w-16 h-16 rounded-full">
                    <p class="mt-1 text-sm text-gray-600">"User Name"</p>
                    <div class="flex justify-end">
                        <a type="button" id="editProfile" href="#" class="hover:bg-gray-600 rounded-xl">EditProfile
                        </a>
                    </div>
                </div>


                <div class=" border-gray-200 px-4 py-5 sm:p-0 ">
                    <!-- User detail -->
                    <dl class="">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">User detail</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <!-- Display the uploaded image -->
                            </dd>
                        </div>

                        <hr class="mt-4 border-t border-gray-200">


                        <!-- Username -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Username</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <p
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    "UserName"
                                </p>
                            </dd>
                        </div>

                        <!-- Email -->
                        <div class="py-2  sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Email</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <p
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    "UserEmail"
                                </p>
                        </div>
                        <!-- วันเดือนปีเกิด -->
                        <!-- <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">DD/MM/YY</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <p
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                    "DD/MM/YY"
                                </p>
                            </dd>
                        </div> -->
                    </dl>
                </div>
            </div>
            <div class="mt-12 text-center pt-3">
                <p class="text-blue-500 hover:text-blue-600 font-kanit ">ประวัติการแจ้งพบของ</p>
            </div>
        </form>
    </header>

    <main class="max-w-screen-xl mx-auto p-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

            <!-- Card Section -->
            <!-- Card1 -->
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <!-- Image Section -->
                <a href="#" class="relative">
                    <!-- รูปตรงนี้นะครับผม -->
                    <img class="w-full h-60 object-cover rounded-lg" src="./img/Mercedes_Remote_new_model.jpg"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                    <div
                        class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        "ประเภท"
                    </div>
                </a>
                <!-- Content Section -->
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                        กุญแจรถเบนซ์</a>
                    <p class="text-gray-500 text-sm">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <!-- Footer Card Section -->
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">6 mins ago</span>
                    </span>
                    <!-- <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span>
                    </span> -->
                </div>
            </div>

            <!-- Card2 -->
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <!-- Image Section -->
                <a href="#" class="relative">
                    <!-- รูปตรงนี้นะครับผม -->
                    <img class="w-full h-60 object-cover rounded-lg" src="./img/Mercedes_Remote_new_model.jpg"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                    <div
                        class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        "ประเภท"
                    </div>
                </a>
                <!-- Content Section -->
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                        กุญแจรถเบนซ์</a>
                    <p class="text-gray-500 text-sm">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <!-- Footer Card Section -->
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">6 mins ago</span>
                    </span>
                    <!-- <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span>
                    </span> -->
                </div>
            </div>


            <!-- Card3 -->
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <!-- Image Section -->
                <a href="#" class="relative">
                    <!-- รูปตรงนี้นะครับผม -->
                    <img class="w-full h-60 object-cover rounded-lg" src="./img/Mercedes_Remote_new_model.jpg"
                        alt="Sunset in the mountains">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                    <div
                        class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        "ประเภท"
                    </div>
                </a>
                <!-- Content Section -->
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                        กุญแจรถเบนซ์</a>
                    <p class="text-gray-500 text-sm">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <!-- Footer Card Section -->
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">6 mins ago</span>
                    </span>
                    <!-- <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span>
                    </span> -->
                </div>
            </div>
        </div>
    </main>

    <section>
        <div class="mt-12 text-center pt-3">
            <p class="text-blue-500 hover:text-blue-600 font-kanit ">ประวัติการแจ้งค้นหาของ</p>
        </div>

        <div class="max-w-screen-xl mx-auto p-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
                <!-- Card1 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <!-- Image Section -->
                    <a href="#" class="relative">
                        <!-- รูปตรงนี้นะครับผม -->
                        <img class="w-full h-60 object-cover rounded-lg" src="./img/Mercedes_Remote_new_model.jpg"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <div
                            class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            "ประเภท"
                        </div>
                    </a>
                    <!-- Content Section -->
                    <div class="px-6 py-4 mb-auto">
                        <a href="#"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                            กุญแจรถเบนซ์</a>
                        <p class="text-gray-500 text-sm">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <!-- Footer Card Section -->
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">6 mins ago</span>
                        </span>
                        <!-- <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span>
                    </span> -->
                    </div>
                </div>

                <!-- Card2 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <!-- Image Section -->
                    <a href="#" class="relative">
                        <!-- รูปตรงนี้นะครับผม -->
                        <img class="w-full h-60 object-cover rounded-lg" src="./img/Mercedes_Remote_new_model.jpg"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <div
                            class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            "ประเภท"
                        </div>
                    </a>
                    <!-- Content Section -->
                    <div class="px-6 py-4 mb-auto">
                        <a href="#"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                            กุญแจรถเบนซ์</a>
                        <p class="text-gray-500 text-sm">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <!-- Footer Card Section -->
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">6 mins ago</span>
                        </span>
                        <!-- <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span>
                    </span> -->
                    </div>
                </div>


                <!-- Card3 -->
                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <!-- Image Section -->
                    <a href="#" class="relative">
                        <!-- รูปตรงนี้นะครับผม -->
                        <img class="w-full h-60 object-cover rounded-lg" src="./img/Mercedes_Remote_new_model.jpg"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <div
                            class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            "ประเภท"
                        </div>
                    </a>
                    <!-- Content Section -->
                    <div class="px-6 py-4 mb-auto">
                        <a href="#"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                            กุญแจรถเบนซ์</a>
                        <p class="text-gray-500 text-sm">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                    </div>
                    <!-- Footer Card Section -->
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">6 mins ago</span>
                        </span>
                        <!-- <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span>
                    </span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="mt-7">
        <div class="bg-orange-700 text-white p-4 mt-8">
            <div class="container mx-auto flex justify-between">
                <p>&copy; 2024 YourWebsiteName. All rights reserved.</p>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms of Service</a></li>
                    <li><a href="#" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>



=======
    <style>
        .box {
            width: 60%;
            height: auto;
            padding: 2% 2%;
            /* ระยะห่างระหว่างเนื้อหากับกรอบ บน ซ้ายขวา*/
            margin: 1% 20% 1%;
            /* ระยะห่าง กรอบ บน ซ้ายขวา ล่าง */
            background-color: #373A40;
            /* สีพื้นหลัง */
            border-radius: 2cap;
        }
    </style>
</head>

<body>
    <nav class="bg-orange-700 ">

        <div class="container mx-auto p-5 py-2 flex justify-between">
            <div class="flex items-center">
                <img src="./img/4.png" alt="" class="w-28 h-auto max-w-full"> <!---Logo-->
            </div>

            <ul class="flex justify-end mt-3 text-xl space-x-4">
                <li>
                    <a href="{{ route('member') }}"
                        class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">หน้าหลัก</a>
                </li>
                <li>
                    <a href="{{ route('search') }}"
                        class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">ค้นหาของหาย</a>
                </li>
                <li>
                    <a href="{{ route('upload') }}"
                        class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">แจ้งของหาย</a>
                </li>
                <li>
                    <a href="#"
                        class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">พบของหาย</a>
                </li>
                <!-- <li>
                    <a href="#"
                        class="inline-block text-sm px-5 py-2.5 -mr-14 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-300 hover:bg-white mt-4 md:mt-0">Login</a>
                </li> -->
                <div>
                    <div class="flex items-center">
                        <a href="{{ route('profile') }}" class="font-extrabold text-sm px-4 py-3 ml-6 -mt-2 rounded-full text-white bg-orange-600 border-2 border-orange-600 hover:bg-white hover:text-orange-600 hover:border-orange-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105 flex items-center justify-center">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="font-extrabold text-sm px-4 py-3 ml-2 -mt-2 rounded-full text-white bg-orange-600 border-2 border-orange-600 hover:bg-white hover:text-orange-600 hover:border-orange-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105 flex items-center justify-center">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            </ul>
        </div>
    </nav>


    <h1 class="text-5xl font-extrabold dark:text-back">โปรไฟล์</h1>

    <!-- กล่องโปรไฟล์ -->
    <div class="box flex justify-center p-4">
        <!--left-->
        <div class="col-span-3 flex flex-col items-center">
            <img src="./img/hacker.jpg" alt="pofile" height="" width="200px" class="rounded-full">
        </div>
        <!--right-->
        <div class="col-span-4 flex flex-col">
            <div class="flex justify-between">
                <div class="p-4 font-kanit">
                    <p>ชื่อ (First name)</p>
                    <p>นามสกุล (Surname)</p>
                    <p>ชื่อผู้ใช้ (username)</p>
                    <p>วัน/เดือน/ปีเกิด (Date of Birth)</p>
                </div>
                <div class="p-4 font-kanit">
                    <p>text text text text</p>
                    <p>text text text text</p>
                    <p>text text text text</p>
                    <p>text text text text</p>
                </div>
            </div>
            <div class="flex justify-end"> <button type="submit" style="width: 30%;"
                    class="mb-2 bg-gray-50 font-kanit border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    แก้ไข (Edit)</button>
            </div>
        </div>
    </div>
    </div>
    <!--ประวัติ-->
    <div class="flex justify-between">
        <!--left-->
        <div class="mx-auto">
            <h2 class="border-2 font-kanit border-gray-300 bg-orange-600 p-4 rounded-full text-center w-4/5 mx-auto">
                ประวัติการแจ้งของหาย</h2>

            <a href="#" class="hover:bg-gray-700 hover:shadow-2xl">
                <div style="box-sizing: border-box; background-color: #373A40;"
                    class="flex items-center justify-between rounded-lg shadow-xl container mx-auto p-4">
                    <!-- ด้านซ้าย -->
                    <img src="./img/crimpadora.jpg" alt="Profile Image" width="80px" height="80px" class="rounded-lg">

                    <!-- ด้านขวา -->
                    <div class="ml-4">
                        <h3 class="text-white font-kanit text-lg font-bold "><b>คิมสีส้ม</b></h3>
                        <p class="text-white font-kanit text-sm">ผู้พบ : text text text text</p>
                        <p class="text-white font-kanit text-sm">สถานที่พบ: text text text text</p>
                        <p class="text-white font-kanit text-sm">ติดต่อที่ : text text text text</p>
                    </div>
                </div>
            </a>
        </div>
        <!--Right-->
        <div class="mx-auto">
            <h2 class="border-2 font-kanit border-gray-300 bg-orange-600 p-4 rounded-full text-center w-fit mx-auto">
                ประวัติการรับของหาย</h2>
        </div>
    </div>
    <br>
    <div class="flex justify-center">
        <button type="submit" style="width: 30%"
            class="mb-2 bg-gray-50 font-kanit border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            ออกจากระบบ (Log out)</button>
    </div>
    </div>
    <!-- Footer -->
    <footer class="bg-orange-700 text-white p-4 mt-8">
        <div class="container mx-auto flex justify-between">
            <p>&copy; 2024 YourWebsiteName. All rights reserved.</p>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                <li><a href="#" class="hover:underline">Terms of Service</a></li>
                <li><a href="#" class="hover:underline">Contact Us</a></li>
            </ul>
        </div>
    </footer>
>>>>>>> 2872ce3 (Adding project to GitHub)
</body>

</html>