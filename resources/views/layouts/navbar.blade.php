<!-- resources/views/navbar.blade.php -->
<nav class="bg-orange-700 ">
    <div class="container mx-auto p-5 py-2 flex justify-between">
        <div class="flex items-center">
            <img src="./img/4.png" alt="" class="w-28 h-auto max-w-full"> <!---Logo-->
        </div>

        <ul class="flex justify-end mt-3 text-xl space-x-4">
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">หน้าหลัก</a>
            </li>
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">ค้นหาของหาย</a>
            </li>
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">แจ้งของหาย</a>
            </li>
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">พบของหาย</a>
            </li>
            <div class="relative inline-block text-left">
                <!-- Dropdown Trigger -->
                <button onclick="toggleDropdown()"
                    class="font-extrabold text-sm px-4 py-3 ml-6 -mt-2 rounded-full text-white bg-orange-600 border-2 border-orange-600 hover:bg-white hover:text-orange-600 hover:border-orange-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105 flex items-center justify-center">
                    <i class="fa-solid fa-user text-lg"></i>
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdownMenu"
                    class="hidden absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg">
                    <div class="px-4 py-3">
                        <p class="text-sm font-medium text-gray-900">My Account</p>
                    </div>
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                    </div>
                </div>
        </ul>
    </div>
</nav>
