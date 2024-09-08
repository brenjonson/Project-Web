<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พบของหาย</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="styte.css">
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
    </style>
</head>

<body class="min-h-screen flex flex-col">

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
                <!-- <li>
                    <a href="#"
                        class="inline-block text-sm px-5 py-2.5 -mr-14 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-300 hover:bg-white mt-4 md:mt-0">Login</a>
                </li> -->
                <div>
                    <button
                        class="font-extrabold text-sm px-4 py-3 ml-6 -mt-2 rounded-full text-white bg-orange-600 border-2 border-orange-600 hover:bg-white hover:text-orange-600 hover:border-orange-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105 flex items-center justify-center">
                        <a href="#" class="flex items-center justify-center">
                            <i class="fa-solid fa-user text-lg"></i>
                        </a>
                    </button>
                </div>
            </ul>
        </div>
    </nav>

    <h1 class="text-5xl font-extrabold dark:text-back">พบของหาย</h1>

    <div class="box ">
        <form class="max-w-sm mx-auto ">
            <div class="flex  justify-between">
                <!-- lift -->
                <div>
                    <div>
                        อัพโหลดภาพ
                        <input id="file_input" accept="image/*" style="width: 100%; height: auto;"
                            class="mb-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="file_input" type="file" required>
                    </div>
                    <div><!-- ภาพหลัก -->
                        <img id="preview" class="mt-2 rounded-lg "
                            style="width: 100%; max-width: 300px; height: auto; border: 1px solid #4b5563; "
                            alt="Image Preview">
                    </div>
                    <div><!-- ภาพเพิ่มเติม -->
                        อัพโหลดภาพเพิ่มเติม (อัพได้สูงสุด 3 ไฟล์)
                        <div>
                            <input id="file_input_more" type="file" accept="image/*" multiple
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" required/>
                            <p id="file_count_warning" class="text-red-500 text-sm mt-2"></p>
                        </div>
                        <div id="preview-container" class="preview-container mt-4"></div>
                    </div>
                </div>
                <!-- Right -->
                <div class="">
                    <div>
                        ชื่อ-นามสกุล
                        <input type="name" id="name-input" style="width: 150%; height: 30px;"
                            placeholder="กรอกชื่อที่นี่"
                            class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        ของที่พบ
                        <input type="text" id="item-input" style="width: 150%; height: 30px;" placeholder="กรอกที่นี่"
                            class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    </div>
                    <div>
                        ประเภทของที่พบ
                        <select id="type" name="type" required
                                class="mb-2 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                style="width: 150%; height: 40px;">
                            <option value="" selected>จงเลือกประเภท</option>
                            <option value="monny">เงิน</option>
                            <option value="phone">โทรศัพท์/แท็บเล็ต</option>
                            <option value="bagpack">กระเป๋า</option>
                            <option value="decorations">เครื่องประดับ</option>
                            <option value="animal">สัตว์เลี้ยง</option>
                        </select>
                        <p id="error-message" class="error-message"></p>
                    </div>
                    <div>
                        ลักษณะเพิ่มเติม
                        <textarea id="message" rows="4" style="width: 150%; height: 80px;"
                            class="mb-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="จงอธิบาย"required></textarea>
                    </div>

                    <div>
                        สถานที่พบ
                        <input type="text" id="base-input" style="width: 150%; height: 30px;" placeholder="กรอกที่นี่"
                            class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                    </div>
                    <div>
                        ช่องทางการติดต่อ
                        <input  type="text" id="base-input" style="width: 150%; height: 30px;" placeholder="กรอกที่นี่"
                            class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
                    </div>
                </div>
                <br>
            </div>
            <div class="flex justify-center mt-4">
                <button type="submit" style="width: 40%"
                    class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Submit</button>
            </div>
        </form>

        <script>
            //อัพภาพหลัก
            document.getElementById('file_input').addEventListener('change', function (event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        const imgElement = document.getElementById('preview');
                        imgElement.src = e.target.result;  // ตั้งค่าที่มาของภาพเป็น URL ของไฟล์ที่อ่านได้
                        imgElement.style.display = 'block';  // แสดงภาพที่ซ่อนอยู่
                    }

                    reader.readAsDataURL(file);  // อ่านไฟล์เป็น Data URL เพื่อแสดงภาพ
                }
            });

            //อัพภาพเพิ่มเติม
            document.getElementById('file_input_more').addEventListener('change', function (event) {
                const files = event.target.files;
                const previewContainer = document.getElementById('preview-container');
                const warningElement = document.getElementById('file_count_warning');
                previewContainer.innerHTML = ''; // ล้างภาพที่แสดงก่อนหน้า
                warningElement.textContent = ''; // ลบข้อความเตือน

                if (files.length > 3) {
                    warningElement.textContent = 'คุณสามารถอัปโหลดได้สูงสุด 3 ไฟล์เท่านั้น.';
                    event.target.value = ''; // ล้างการเลือกไฟล์
                    return;
                }

                Array.from(files).forEach(file => {
                    if (file && file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.classList.add('image-preview'); // เพิ่มคลาสสำหรับสไตล์
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