<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
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




    <main class="">
        <div class="container mx-auto p-6 ">
            <!-- ส่วนบน -->
            <div class="flex justify-start items-center space-x-4 ">
                <a href="./popularItem" class="text-black hover:text-orange-600">
                    <i class="fa-solid fa-arrow-left w-12"></i>
                </a>
                <div class="flex flex-col space-y-2">
                    <h1 class="text-3xl font-bold">Detail</h1>
                    <p class="text-gray-500">Posted 20 days ago</p>

                </div>

            </div>


            <!-- ส่วนกลาง -->
            <div class=" mt-8 flex justify-items-center">
                <!-- ส่วนภาพ -->
                <div class="w-2/3 flex justify-center mr-24"> <!-- Changed from w-3/4 to w-2/3 -->
                    <img src="./img/Mercedes_Remote_new_model.jpg" alt="Image"
                        class="object-cover rounded-lg shadow-lg max-w-sm w-full h-auto">
                </div>

                <!-- ส่วนรายละเอียด -->
                <!-- ชื่อ-นามสกุล -->
                <div class="w-1/3 flex flex-col space-y-4 mr-8 justify-center">
                    <!-- Changed from w-1/4 to w-1/3 and reduced ml-6 to ml-4 -->
                    <div class="flex items-center">
                        <i class="fa-solid fa-user text-lg mr-2"></i>
                        <p class="text-gray-600 font-kanit">ชื่อ-นามสกุล: <span class="text-orange-600">Frank
                                Ocean</span></p>
                    </div>

                    <!-- ของที่หาย -->
                    <div class="flex items-center">
                        <i class="fa-solid fa-box mr-2"></i>
                        <p class="text-gray-600 font-kanit">ของที่หาย: <span class="text-orange-600">กุญแจรถเบนซ์</span>
                        </p>
                    </div>

                    <!-- ประเภท -->
                    <div class="flex items-center">
                        <i class="fa-solid fa-list mr-2"></i>
                        <p class="text-gray-600 font-kanit">ประเภท: <span class="text-orange-600">กุญแจ</span></p>
                    </div>


                    <div class="flex items-center">
                        <i class="fa-solid fa-square-minus mr-2"></i>
                        <p class="text-gray-600 font-kanit">ลักษณะ: <span class="text-orange-600">กุญแจรถ Mercedes
                                Benz</span></p>
                    </div>


                    <div class="flex items-center">
                        <i class="fa-solid fa-location-dot mr-2"></i>
                        <p class="text-gray-600 font-kanit">สถานที่พบ: <span class="text-orange-600">Science
                                Square</span></p>
                    </div>
                </div>
            </div>

            <!-- ส่วนล่าง -->
            <div class="container mx-auto p-6 ">
                <!-- รูปประกอบเพิ่มเติม -->
                <div class="w-1/2 flex justify-end space-x-4 -ml-8 ">
                    <img src="./img/Mercedes_Remote_new_model.jpg" alt="Image"
                        class="w-32 h-auto object-cover rounded-lg shadow-lg">
                    <img src="./img/Mercedes_Remote_new_model.jpg" alt="Image"
                        class="w-32 h-auto object-cover rounded-lg shadow-lg">
                    <img src="./img/Mercedes_Remote_new_model.jpg" alt="Image"
                        class="w-32 h-auto object-cover rounded-lg shadow-lg">
                </div>

                <!-- ข้อมูลติดต่อ -->
                <div class="w-1/2 flex justify-center items-center float-right">
                    <div class="flex items-center space-x-4">
                        <!-- ไอคอนและข้อความด้านซ้าย -->
                        <div class="flex flex-col items-center">
                            <div class="flex items-center">
                                <i class="fa-solid fa-address-card"></i>
                                <span class="ml-2 font-semibold">ติดต่อ:</span>
                            </div>
                            <img class="w-24 h-24 rounded-full mt-4" src="./img/frank.png" alt="Rounded avatar">
                            <p class="font-bold mt-2 underline">
                                <a href="#" class="underline">Franksea</a>
                            </p>

                        </div>

                        <!-- ข้อมูลการติดต่อด้านขวา -->
                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <i class="fa-solid fa-phone mr-2"></i>
                                <p class="text-gray-600 font-kanit">TEL: <span
                                        class="text-orange-600 font-Lato">0885723422
                                    </span></p>
                            </div>
                            <div class="flex items-center">
                                <i class="fa-brands fa-instagram mr-3"></i>
                                <p class="text-gray-600 font-kanit">IG: <span
                                        class="text-orange-600 font-Lato ">frank_ocean
                                    </span></p>
                            </div>
                            <div class="flex items-center">
                                <i class="fa-solid fa-envelope mr-2"></i>
                                <p class="text-gray-600 font-kanit">EMAIL: <span
                                        class="text-orange-600 font-Lato">Franksea@gmail.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- แผนที่ -->
            <div class="mx-auto p-6 ">
                <p class="text-2xl">Location</p>
                <p class="mt-4 font-kanit text-gray-500">บริเวณสระพลาสติก</p>
                <img src="./img/map.png" alt="" class="w-2/4  shadow-xl mt-4">

            </div>
            <div>


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
