<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พบของหาย</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* ภาพหลัก */
        .box {
            width: 800px;
            height: auto;
            padding: 20px;
            /* ระยะห่างระหว่างเนื้อหากับกรอบ */
            margin: 20px auto 40px;
            /* ระยะห่างรอบๆ กรอบ */
            background-color: #373A40;
            /* สีพื้นหลัง */
            border-radius: 2cap;
        }

        /* ภาพเพิ่มเติม */
        .image-preview {
            width: 90px;
            /* ขนาดความกว้างของภาพ */
            height: auto;
            /* ความสูงของภาพอัตโนมัติ */
            margin-right: 1px;
            /* ระยะห่างระหว่างภาพ */
            border: 2px solid #ccc;
            /* กำหนดกรอบภาพ */
            border-radius: 8px;
            /* กำหนดความโค้งมุมกรอบภาพ */
        }

        .preview-container {
            display: flex;
            /* ใช้ flexbox เพื่อจัดแนวภาพ */
            flex-wrap: wrap;
            /* อนุญาตให้ภาพเรียงลำดับได้ */
            gap: 10px;
            /* ระยะห่างระหว่างภาพ */
        }

        h1{
            font-family: 'Kanit', sans-serif;
            font-size: xx-large;
            text-align: center;
            padding: 20px 10px 0px 10px;
        }
        h2{
            font-family: 'Kanit', sans-serif;
            font-size: 120%;
            text-align: center;
            padding: 0px 0px 0px;
        }
        div{
            /* color: aliceblue; */
            font-family: 'Kanit';
            
        }
    </style>

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

<body class="min-h-screen flex flex-col">

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
                    <a href="{{ route('lost') }}"
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
                            <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </nav>

    <h1 class="text-5xl font-extrabold dark:text-back">พบของหาย</h1>

    <div class="box ">
        <form action="/upload" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="file_input" class="block mb-2 font-semibold">อัพโหลดภาพหลัก</label>
                    <input id="file_input" name="files[]" type="file" accept="image/*" class="form-input" required>
                    <img id="preview" class="mt-4 rounded-lg max-w-full h-auto" style="display: none;" alt="Image Preview">
                </div>
                <div>
                    <label for="file_input_more" class="block mb-2 font-semibold">อัพโหลดภาพเพิ่มเติม (สูงสุด 3 ไฟล์)</label>
                    <input id="file_input_more" name="files[]" type="file" accept="image/*" multiple class="form-input">
                    <p id="file_count_warning" class="text-red-500 text-sm mt-2"></p>
                    <div id="preview-container" class="preview-container"></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="reporter_name" class="block mb-2 font-semibold">ชื่อผู้แจ้ง</label>
                    <input type="text" id="reporter_name" name="reporter_name" class="form-input" placeholder="กรอกชื่อที่นี่" required>
                </div>
                <div>
                    <label for="name" class="block mb-2 font-semibold">ของที่พบ</label>
                    <input type="text" id="name" name="item" class="form-input" placeholder="กรอกที่นี่" required>
                </div>
            </div>

            <div>
                <label for="type" class="block mb-2 font-semibold">ประเภทของที่พบ</label>
                <select id="type" name="type" class="form-input" required>
                    <option value="" selected disabled>จงเลือกประเภท</option>
                    <option value="key">กุญแจ</option>
                    <option value="money">เงิน</option>
                    <option value="phone">โทรศัพท์/แท็บเล็ต</option>
                    <option value="bagpack">กระเป๋า</option>
                    <option value="decorations">เครื่องประดับ</option>
                    <option value="student_card">บัตรนักศึกษา</option>
                </select>
            </div>

            <div>
                <label for="detail" class="block mb-2 font-semibold">ลักษณะเพิ่มเติม</label>
                <textarea id="detail" name="detail" rows="4" class="form-input" placeholder="จงอธิบาย"></textarea>
            </div>

            <div>
                <label for="location" class="block mb-2 font-semibold">สถานที่พบ</label>
                <input type="text" id="location" name="location" class="form-input" placeholder="กรอกที่นี่" required>
            </div>

            <div>
                <label for="contact" class="block mb-2 font-semibold">ช่องทางการติดต่อ</label>
                <input type="text" id="contact" name="contact" class="form-input" placeholder="กรอกที่นี่" required>
            </div>

            <div class="flex justify-center mt-8">
                <button type="submit" class="submit-button">ส่งข้อมูล</button>
            </div>
        </form>

        <script>
            document.getElementById('file_input').addEventListener('change', function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imgElement = document.getElementById('preview');
                        imgElement.src = e.target.result;
                        imgElement.style.display = 'block';
                    }
                    reader.readAsDataURL(file);
                }
            });
    
            document.getElementById('file_input_more').addEventListener('change', function (event) {
                const files = event.target.files;
                const previewContainer = document.getElementById('preview-container');
                const warningElement = document.getElementById('file_count_warning');
                previewContainer.innerHTML = '';
                warningElement.textContent = '';
    
                if (files.length > 3) {
                    warningElement.textContent = 'คุณสามารถอัปโหลดได้สูงสุด 3 ไฟล์เท่านั้น';
                    event.target.value = '';
                    return;
                }
    
                Array.from(files).forEach(file => {
                    if (file && file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.classList.add('image-preview');
                            img.alt = 'Image Preview';
                            previewContainer.appendChild(img);
                        }
                        reader.readAsDataURL(file);
                    }
                });
            });
        </script>
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