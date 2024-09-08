<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าโปรไฟล์</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</body>

</html>