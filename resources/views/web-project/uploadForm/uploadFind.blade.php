@extends('layouts.upload')
@extends('layouts.navbar')

@section('contentUpload')
    <h1 class="text-5xl font-bold text-center py-8 text-black font-kanit">แจ้งค้นหาของหาย</h1>

    <div class="max-w-3xl bg-gray-700 mx-auto p-8 rounded-xl shadow-2xl">
        <form action="{{ route('uploadFind') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left -->
                <div>
                    <div>
                        <label for="file_input" class="block mb-2 font-kanit text-white">อัพโหลดภาพ</label>
                        <input id="file_input" name="files[]" accept="image/*" type="file" required
                            class="w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>
                    <div>
                        <img id="preview" class="mt-4 rounded-lg w-full max-w-xs border border-gray-600"
                            src="storage/uploads/Rick.png" alt="Image Preview">
                    </div>

                    <div class="mt-6">
                        <label for="file_input_more" class="block mb-2 font-kanit text-white">อัพโหลดภาพเพิ่มเติม (อัพได้สูงสุด 3 ไฟล์)</label>
                        <input id="file_input_more" name="files[]" type="file" accept="image/*" multiple required
                            class="w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg cursor-pointer focus:outline-none dark:text-gray-400 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                        <p id="file_count_warning" class="text-red-500 text-sm mt-2"></p>
                        <div id="preview-container" class="flex flex-wrap gap-2 mt-4"></div>
                    </div>
                </div>

                <!-- Right -->
                <div class="space-y-4">
                    <div>
                        <label for="name-input" class="block mb-2 font-kanit text-white">ชื่อผู้แจ้ง</label>
                        <input type="text" id="name-input" name="reporter_name" required placeholder="กรอกชื่อที่นี่"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <input hidden type="text" name="stage" value=2>
                    </div>

                    <div>
                        <label for="item-input" class="block mb-2 font-kanit text-white">ของที่หา</label>
                        <input type="text" id="item-input" name="item" required placeholder="กรอกที่นี่"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>

                    <div>
                        <label for="type" class="block mb-2 font-kanit text-white">ประเภทของที่หา</label>
                        <select id="type" name="type" required
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="" selected>จงเลือกประเภท</option>
                            <option value="key">กุญแจ</option>
                            <option value="phone">โทรศัพท์/แท็บเล็ต</option>
                            <option value="bagpack">กระเป๋า</option>
                            <option value="decorations">เครื่องประดับ</option>
                            <option value="student_card">บัตรนักศึกษา</option>
                        </select>
                        <p id="error-message" class="text-red-500 text-sm mt-2"></p>
                    </div>

                    <div>
                        <label for="message" class="block mb-2 font-kanit text-white">ลักษณะเพิ่มเติม</label>
                        <textarea id="message" name="detail" rows="4" required placeholder="จงอธิบาย"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"></textarea>
                    </div>

                    <div>
                        <label for="base-input" class="block mb-2 font-kanit text-white">สถานที่ที่คาดว่าทำหาย</label>
                        <input type="text" id="base-input" name="location" required placeholder="กรอกที่นี่"
                            class="w-full p-2 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>

                    <div>
                        <label for="contact-input" class="block mb-2 font-kanit text-white">ช่องทางการติดต่อ</label>
                        <input type="text" id="contact-input" name="contact" required placeholder="กรอกที่นี่"
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

    @include('layouts/footer')

@endsection
