@extends('layouts.navbar')


@vite('resources/css/other.css') {{-- นำเข้าไฟล์ CSS --}}
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

@section('content')
    <nav class="p-4 border-b">
        <div class="flex flex-col md:flex-row items-center mb-4 space-y-4 md:space-y-0">
            <h1
                class="bg-blue-600 text-white rounded-md py-2 px-3 shadow-md font-kanit text-2xl mx-auto md:mx-0 md:mr-4 m-1 border-b-2 border-blue-500">
                ของที่แจ้งหายทั้งหมด
            </h1>

            <div class="select-menu font-kanit">
                <div class="select-btn">
                    <span class="sBtn-text">Select your option</span>
                    <i class="bx bx-chevron-down"></i>
                </div>
                <ul class="options">
                    <li class="option">
                        <i class="fa-solid fa-address-card"></i>
                        <span class="option-text">บัตรนักศึกษา</span>
                    </li>
                    <li class="option">
                        <i class="fa-solid fa-key text-xs"></i>
                        <span class="option-text">กุญแจ</span>
                    </li>
                    <li class="option">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <span class="option-text">โทรศัพท์/ไอแพด</span>
                    </li>
                    <li class="option">
                        <i class="fa-solid fa-wallet"></i>
                        <span class="option-text">กระเป๋า</span>
                    </li>
                    <li class="option">
                        <i class="fa-solid fa-gem"></i>
                        <span class="option-text">เครื่องประดับ</span>
                    </li>
                </ul>
            </div>



        </div>

        <div class="flex justify-end">
            <input type="text" placeholder="ค้นหา" class="px-2 py-1 border rounded-lg">
            <button class="bg-green-500 text-white px-4 py-1 rounded-r">Search</button>
        </div>
    </nav>

    <main class="container mx-auto mt-8 px-4">
        @forelse($itemsForMember->where('stage', 3) as $sucess)
            @php
                $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                $imagePath = null;
                foreach ($imageExtensions as $ext) {
                    if (Storage::disk('public')->exists('uploads/' . $sucess->id . '-1.' . $ext)) {
                        $imagePath = 'storage/uploads/' . $sucess->id . '-1.' . $ext;
                        break;
                    }
                }
            @endphp

            <div class="mb-8 pb-8 border-b font-kanit">
                <div class="flex flex-col md:flex-row">
                    <img src="{{ asset($imagePath ?? 'path/to/default/image.jpg') }}" alt="{{ $sucess->type }}"
                        class="w-full h-auto md:w-32 md:h-32 object-cover mb-4 md:mb-0 md:mr-6 rounded-md">

                    <div>
                        <h2 class="text-xl font-semibold mb-2 font-kanit">{{ $sucess->item ?? 'ชื่อเรื่องที่ไม่ระบุ' }}</h2>
                        <p class="font-kanit">รายละเอียด</p>
                        <p class="text-gray-600 text-sm font-kanit">
                            <i class="fa-regular fa-clock"></i>
                            {{ \Carbon\Carbon::parse($sucess->created_at)->translatedFormat('d F Y, เวลา h:i A') }}
                            <span class="text-red-600">{{ $sucess->type }}</span>
                        </p>
                        <a href="{{ route('item.detail', ['id' => $sucess->id]) }}">
                            <button
                                class="mt-2 bg-blue-600 text-white py-1 px-3 text-sm rounded-lg hover:bg-blue-500 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                                ดูรายละเอียด
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-3 text-center py-8">
                <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งพบของในขณะนี้</p>
            </div>
        @endforelse
    </main>
    <script>
        const optionMenu = document.querySelector(".select-menu"),
            selectBtn = optionMenu.querySelector(".select-btn"),
            options = optionMenu.querySelectorAll(".option"),
            sBtn_text = optionMenu.querySelector(".sBtn-text");

        selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

        options.forEach(option => {
            option.addEventListener("click", () => {
                let selectedOption = option.querySelector(".option-text").innerText;
                sBtn_text.innerText = selectedOption;
                optionMenu.classList.remove("active");
            });
        });
    </script>
    @include('layouts.footer')
@endsection
