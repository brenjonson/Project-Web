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
    <nav class="bg-orange-700 ">

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




    {{-- <main class="">
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


    </main> <!---End main--> --}}

    <main class="">
        <div class="container mx-auto p-6">
            <!-- Top section -->
            <div class="flex justify-start items-center space-x-4">
                <a href="{{ route('popularItem') }}" class="text-black hover:text-orange-600">
                    <i class="fa-solid fa-arrow-left w-12"></i>
                </a>
                <div class="flex flex-col space-y-2">
                    <h1 class="text-3xl font-bold">Details</h1>
                    <p class="text-gray-500">Posted</p>
                </div>
            </div>

            <!-- Middle section -->
            <div class="mt-8 flex justify-items-center">
                <!-- Image section -->
                <div class="w-2/3 flex justify-center mr-24">
                    @php
                        $images = json_decode($item->img_path, true);
                        $mainImage = $images[0] ?? null;
                    @endphp
                    @if($mainImage)
                        <img src="{{ asset('storage/uploads/' . $mainImage) }}" alt="{{ $item->item }}"
                            class="object-cover rounded-lg shadow-lg max-w-sm w-full h-auto">
                    @else
                        <p>No image available</p>
                    @endif
                </div>

                <!-- Details section -->
                <div class="w-1/3 flex flex-col space-y-4 mr-8 justify-center">
                    <div class="flex items-center">
                        <i class="fa-solid fa-user text-lg mr-2"></i>
                        <p class="text-gray-600 font-kanit">ชื่อ-นามสกุล: <span class="text-orange-600">{{ $item->reporter_name }}</span></p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-box mr-2"></i>
                        <p class="text-gray-600 font-kanit">ของที่หาย: <span class="text-orange-600">{{ $item->item }}</span></p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-list mr-2"></i>
                        <p class="text-gray-600 font-kanit">ประเภท: <span class="text-orange-600">{{ $item->type }}</span></p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-square-minus mr-2"></i>
                        <p class="text-gray-600 font-kanit">ลักษณะ: <span class="text-orange-600">{{ $item->detail }}</span></p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-location-dot mr-2"></i>
                        <p class="text-gray-600 font-kanit">สถานที่พบ: <span class="text-orange-600">{{ $item->location }}</span></p>
                    </div>
                </div>
            </div>

            <!-- Bottom section -->
            <div class="container mx-auto p-6">
                <!-- Additional images -->
                <div class="w-1/2 flex justify-end space-x-4 -ml-8">
                    @foreach(array_slice($images, 1, 3) as $image)
                        <img src="{{ asset('storage/uploads/' . $image) }}" alt="Additional Image"
                            class="w-32 h-auto object-cover rounded-lg shadow-lg">
                    @endforeach
                </div>

                <!-- Contact information -->
                <div class="w-1/2 flex justify-center items-center float-right">
                    <div class="flex items-center space-x-4">
                        <div class="flex flex-col items-center">
                            <div class="flex items-center">
                                <i class="fa-solid fa-address-card"></i>
                                <span class="ml-2 font-semibold">ติดต่อ:</span>
                            </div>
                            <img class="w-24 h-24 rounded-full mt-4" src="{{ asset('img/default-avatar.png') }}" alt="Rounded avatar">
                            <p class="font-bold mt-2 underline">
                                <a href="#" class="underline">{{ $item->reporter_name }}</a>
                            </p>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <i class="fa-solid fa-phone mr-2"></i>
                                <p class="text-gray-600 font-kanit">TEL: <span class="text-orange-600 font-Lato">{{ $item->contact }}</span></p>
                            </div>
                            <!-- Add more contact details if available in your database -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map section -->
            <div class="mx-auto p-6">
                <p class="text-2xl">Location</p>
                <p class="mt-4 font-kanit text-gray-500">{{ $item->location }}</p>
                <!-- Add a map here if you have coordinates in your database -->
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
