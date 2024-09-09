<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พบของหาย</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
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

<body class="min-h-screen flex flex-col  text-white">

@include('layouts.navbar')

    <h1 class="text-5xl font-bold text-center py-8 text-black font-kanit">พบของหาย</h1>

    <div class="max-w-3xl bg-gray-700 mx-auto p-8 rounded-xl shadow-2xl">
        <form class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left -->
                <div>
                    <div>
                        <label for="file_input" class="block mb-2 font-kanit">อัพโหลดภาพ</label>
                        <input id="file_input" accept="image/*" type="file" required
                            class="w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>
                    <div>
                        <img id="preview" class="mt-4 rounded-lg w-full max-w-xs border border-gray-600"
                            alt="Image Preview">
                    </div>

                    <div class="mt-6">
                        <label for="file_input_more" class="block mb-2 font-kanit">อัพโหลดภาพเพิ่มเติม (อัพได้สูงสุด 3
                            ไฟล์)</label>
                        <input id="file_input_more" type="file" accept="image/*" multiple required
                            class="w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        <p id="file_count_warning" class="text-red-500 text-sm mt-2"></p>
                        <div id="preview-container" class="flex flex-wrap gap-2 mt-4"></div>
                    </div>
                </div>

                <!-- Right -->
                <div class="space-y-4">
                    <div>
                        <label for="name-input" class="block mb-2 font-kanit">ชื่อ-นามสกุล</label>
                        <input type="text" id="name-input" required placeholder="กรอกชื่อที่นี่"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>

                    <div>
                        <label for="item-input" class="block mb-2 font-kanit">ของที่พบ</label>
                        <input type="text" id="item-input" required placeholder="กรอกที่นี่"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>

                    <div>
                        <label for="type" class="block mb-2 font-kanit">ประเภทของที่พบ</label>
                        <select id="type" required
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="" selected>จงเลือกประเภท</option>
                            <option value="monny">เงิน</option>
                            <option value="phone">โทรศัพท์/แท็บเล็ต</option>
                            <option value="bagpack">กระเป๋า</option>
                            <option value="decorations">เครื่องประดับ</option>
                            <option value="animal">สัตว์เลี้ยง</option>
                        </select>
                        <p id="error-message" class="text-red-500 text-sm mt-2"></p>
                    </div>

                    <div>
                        <label for="message" class="block mb-2 font-kanit">ลักษณะเพิ่มเติม</label>
                        <textarea id="message" rows="4" required placeholder="จงอธิบาย"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"></textarea>
                    </div>

                    <div>
                        <label for="base-input" class="block mb-2 font-kanit">สถานที่พบ</label>
                        <input type="text" id="base-input" required placeholder="กรอกที่นี่"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>

                    <div>
                        <label for="contact-input" class="block mb-2 font-kanit">ช่องทางการติดต่อ</label>
                        <input type="text" id="contact-input" required placeholder="กรอกที่นี่"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-4 font-kanit">
                <button type="submit"
                    class="w-1/2 text-white text-sm p-3 rounded-lg bg-gradient-to-r from-red-500 to-orange-500 hover:from-red-600 hover:to-orange-600 shadow-lg transform hover:scale-105 transition duration-300 ease-in-out focus:ring-4 focus:ring-red-300 focus:outline-none">
                    Submit
                </button>





            </div>
        </form>
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

    <script>
        // อัพภาพหลัก
        document.getElementById('file_input').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const imgElement = document.getElementById('preview');
                    imgElement.src = e.target.result;
                    imgElement.style.display = 'block';
                }

                reader.readAsDataURL(file);
            }
        });

        // อัพภาพเพิ่มเติม
        document.getElementById('file_input_more').addEventListener('change', function(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById('preview-container');
            const warningElement = document.getElementById('file_count_warning');
            previewContainer.innerHTML = '';
            warningElement.textContent = '';

            if (files.length > 3) {
                warningElement.textContent = 'คุณสามารถอัปโหลดได้สูงสุด 3 ไฟล์เท่านั้น.';
                event.target.value = '';
                return;
            }

            Array.from(files).forEach(file => {
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('w-24', 'h-auto', 'border', 'border-gray-300', 'rounded-lg');
                        img.alt = 'Image Preview';
                        previewContainer.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>

</html>
