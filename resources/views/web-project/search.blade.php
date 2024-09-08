<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="bg-orange-700">
        <div class="container mx-auto p-5 py-2 flex justify-between">
            <div class="flex items-center">
                <img src="./img/4.png" alt="" class="w-28 h-auto max-w-full"> <!---Logo-->
            </div>
            <ul class="flex justify-end mt-3 text-xl space-x-4">
                @if(auth()->check())
                    <li>
                        <a href="{{ route('member') }}"
                            class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">หน้าหลัก</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('firstPage') }}"
                            class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">หน้าหลัก</a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('search') }}"
                        class="px-4 text-white font-kanit bg-gray-700  p-22px transition duration-300 ease-in-out">ค้นหาของหาย</a>
                </li>
                <li>
                    <a href="{{ route('upload') }}"
                        class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">แจ้งของหาย</a>
                </li>
                <li>
                    <a href="#"
                        class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">พบของหาย</a>
                </li>
                <div>
                    <div class="flex items-center">
                        <a href="{{ route('profile.show') }}" class="font-extrabold text-sm px-4 py-3 ml-6 -mt-2 rounded-full text-white bg-orange-600 border-2 border-orange-600 hover:bg-white hover:text-orange-600 hover:border-orange-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105 flex items-center justify-center">
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

        <div class="container mx-auto p-5 py-2 gap-4 mt-2 flex items-center">
            <div class="text-3xl">
                <p class="font-kanit">ค้นหาของหาย</p>
            </div>

            <!-- Search -->
            <form class="max-w-md ">
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input
                        class="border-2 font-kanit border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none placeholder-gray-500"
                        type="search" name="search" placeholder="ค้าหา">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                            xml:space="preserve" width="512px" height="512px">
                            <path
                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </form>

            <!-- ส่วนล่างSeclect -->
            <div class="max-w-md">
                <div class="block w-full mb-2 mt-4">
                    <select id="small_select"
                        class="border-2 font-kanit border-gray-300 text-gray-500 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                        <option selected>เลือกประเภท</option>
                        <option value="card">บัตรประชาชน/นักศึกษา</option>
                        <option value="key">กุญแจ</option>
                        <option value="money">เงิน</option>
                        <option value="tech">อุปกรณ์อิเล็กทรอนิค</option>
                    </select>
                </div>

            </div>
        <div>
    </header>

    <main>
        <div class="container mx-auto p-5 py-2 flex gap-40">
            <!-- photo -->
            <div class="">
                <img src="./img/mapY.png" alt="" class="">
            </div>

            <!-- ด้านขวา -->
            <div class="flex flex-col  justify-start gap-5">
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
                <!-- กล่องที่ 4 -->
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

        </div>
    </main>

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