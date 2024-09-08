<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function toggleDropdown() {
            const dropdownMenu = document.getElementById('dropdownMenu');
            dropdownMenu.classList.toggle('hidden');
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
    </script>
</head>

<body class="">
    @include('layouts.navbar')
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

    <header>
        <div>
            <img src="./img/banner.png" alt="" class="w-screen">
        </div>

        <div class="container flex justify-center mt-8 max-w-full ">
            <button
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700 ">
                <a href="#">ของที่หายบ่อย</a>
            </button>
        </div>
    </header>


    <main>
        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---ของที่แจ้งหาย-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6 ">บัตรนักศึกษา</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">

                <!-- กล่องที่ 1 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรนักศึกษา:James</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 2 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรนักศึกษา: Curry</h4>
                            <p class="text-base text-white">ผู้แจ้ง: ณัฐธเนศ กำเนิดกลีม</p>
                            <p class="text-base text-white">สถานที่หาย: หอสมุดคณะวิศวะ</p>
                            <p class="text-base text-white">ติดต่อที่: ig abc_987</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 3 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรประชาชน:Leo Messi</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่4 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรประชาชน: Allan</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 5 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรประชาชน:Yamal</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 6 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรนักศึกษา:Mainoo</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>
            </div>
        </div> <!-- End ของที่แจ้งหาย -->

        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---พบของที่หาย-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-700 -mt-6 ">กุญแจ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                <!-- กล่องที่ 1 -->
                <a href="{{ route('detail') }}"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">กุญแจรถเบนซ์</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 2 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">กุญแจรถเบนซ์</h4>
                            <p class="text-base text-white">ผู้แจ้ง: ณัฐธเนศ กำเนิดกลีม</p>
                            <p class="text-base text-white">สถานที่หาย: หอสมุดคณะวิศวะ</p>
                            <p class="text-base text-white">ติดต่อที่: ig abc_987</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 3 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">กุญแจรถเบนซ์</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่4 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">กุญแจรถเบนซ์</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 5 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">กุญแจรถเบนซ์</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 6 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">กุญแจรถเบนซ์</h4>
                            <p class="text-base text-white">ผู้แจ้ง: แก้วเพรชรัตน์ สีสันต์</p>
                            <p class="text-base text-white">สถานที่หาย: ข้างถนนบึงศรีฐาน</p>
                            <p class="text-base text-white">ติดต่อที่: FB แก้วเพรชรัตน์ สีสันต์</p>
                        </div>
                    </div>
                </a>
            </div>

        </div> <!-- End พบของหาย -->
    </main> <!---End main-->


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


</body>

</html>
