<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstpage</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <nav class="bg-orange-700 ">

        <div class="container mx-auto p-5 py-2 flex justify-between items-center">
            <div class="flex items-center">
                <img src="./img/4.png" alt="" class="w-28 h-auto max-w-full"> <!---Logo-->
            </div>
        
            <div class="flex items-center space-x-4">
                <ul class="flex justify-end text-xl space-x-4">
                    <li>
                        <a href="#"
                            class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="{{ route('search') }}"
                            class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">ค้นหาของหาย</a>
                    </li>
                    <li>
                        <a href="{{ route('uploadFound') }}"
                            class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">แจ้งพบของ</a>
                    </li>
                    <li>
                        <a href=""
                            class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">ค้นหาของ</a>
                    </li>
                </ul>
                <div>
                    <a href="/login" class="inline-block bg-orange-600 text-white font-semibold py-2 px-5 rounded-md hover:bg-orange-700 shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-1">
                        Login
                    </a>
                </div>
            </div>
        </div>
        
    </nav>

    <header>
        <div>
            <img src="./img/banner.png" alt="" class="w-screen">
        </div>

        <div class="container flex justify-center mt-8 max-w-full ">
            <button
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700 mr-14">
                <a href="{{ route('popularItem') }}">ของที่หายบ่อย</a>
            </button>
            <a href="./login"
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700 mr-14">
                เข้าสู่ระบบ
            </a>
            <a href="./register"
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700">
                ลงชื่อเข้าใช้
            </a>
        </div>
    </header>


    <main>
        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---ของที่แจ้งหาย-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6 ">ของที่แจ้งหาย</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">

                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">I phone 7 สีดำ</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 2 -->
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">เงินสด 1000 บาท</h4>
                            <p class="text-base text-white">ผู้แจ้ง: ณัฐธเนศ กำเนิดกลีม</p>
                            <p class="text-base text-white">สถานที่หาย: หอสมุดคณะวิศวะ</p>
                            <p class="text-base text-white">ติดต่อที่: ig abc_987</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 3 -->
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
        </div> <!-- End ของที่แจ้งหาย -->

        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---พบของที่หาย-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-700 -mt-6 ">พบของที่หาย</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                <!-- กล่องที่ 1 -->
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">I phone 7 สีดำ</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 2 -->
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">เงินสด 1000 บาท</h4>
                            <p class="text-base text-white">ผู้แจ้ง: ณัฐธเนศ กำเนิดกลีม</p>
                            <p class="text-base text-white">สถานที่หาย: หอสมุดคณะวิศวะ</p>
                            <p class="text-base text-white">ติดต่อที่: ig abc_987</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 3 -->
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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

        </div>  <!-- End พบของหาย -->


        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---ของที่รับไปแล้ว-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-700 -mt-6 ">ของที่รับไปแล้ว</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">

                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">I phone 7 สีดำ</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 2 -->
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">เงินสด 1000 บาท</h4>
                            <p class="text-base text-white">ผู้แจ้ง: ณัฐธเนศ กำเนิดกลีม</p>
                            <p class="text-base text-white">สถานที่หาย: หอสมุดคณะวิศวะ</p>
                            <p class="text-base text-white">ติดต่อที่: ig abc_987</p>
                        </div>
                    </div>
                </a>

                <!-- กล่องที่ 3 -->
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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
                <a href="#" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
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

        </div> <!-- End ของที่รับไปแล้ว -->

    </main>  <!---End main-->

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