@extends('layouts.navbar')

@section('content')
    
    <main class="bg-gray-100">
        <div class="container mx-auto p-6">
            <!-- Top section -->
            <div class="flex justify-start items-center space-x-4 mb-6">
                <a href="{{ route('search') }}" class="text-black hover:text-orange-600 transition duration-300">
                    <i class="fa-solid fa-arrow-left text-2xl"></i>
                </a>
                <div class="flex flex-col space-y-1">
                    <h1 class="text-3xl font-bold text-gray-800">Detail</h1>
                    <p class="text-gray-500">Posted {{ $item->created_at->diffForHumans() }}</p>
                </div>
            </div>

            <!-- Middle section -->
            <div class="mt-8 flex flex-col md:flex-row justify-between">
                <!-- Image section -->
                <div class="w-full md:w-2/3 flex flex-col items-center md:mr-8 mb-8 md:mb-0">
                    @php
                        $images = json_decode($item->img_path, true);
                        $mainImage = $images[0] ?? null;
                    @endphp
                    @if($mainImage)
                        <img src="{{ asset('storage/uploads/' . $mainImage) }}" alt="{{ $item->item }}"
                            class="object-cover rounded-lg shadow-lg max-w-sm w-full h-auto mb-4">
                    @else
                        <p class="text-gray-500">ไม่มีรูปภาพ</p>
                    @endif
                    
                    <!-- Additional images -->
                    <div class="flex justify-center space-x-4 mt-4">
                        @foreach(array_slice($images, 1, 3) as $image)
                            <img src="{{ asset('storage/uploads/' . $image) }}" alt="รูปภาพเพิ่มเติม"
                                class="w-32 h-auto object-cover rounded-lg shadow-lg">
                        @endforeach
                    </div>
                </div>

                <!-- Details section -->
                <div class="w-full md:w-1/3 flex flex-col space-y-4 md:mr-8">
                    <div class="flex items-center bg-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-user  text-lg mr-3"></i>
                        <p class="text-gray-700 font-kanit">ชื่อผู้แจ้ง: <span class="text-orange-600">{{ $item->reporter_name }}</span></p>
                    </div>
                    <div class="flex items-center bg-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-box  mr-3"></i>
                        <p class="text-gray-700 font-kanit">ของที่เจอ/หาย: <span class="text-orange-600">{{ $item->item }}</span></p>
                    </div>
                    <div class="flex items-center bg-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-list  mr-3"></i>
                        <p class="text-gray-700 font-kanit">ประเภท: <span class="text-orange-600">{{ $item->type }}</span></p>
                    </div>
                    <div class="flex items-center bg-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-square-minus mr-3"></i>
                        <p class="text-gray-700 font-kanit">ลักษณะ: <span class="text-orange-600">{{ $item->detail }}</span></p>
                    </div>
                    <div class="flex items-center bg-white p-3 rounded-lg shadow">
                        <i class="fa-solid fa-location-dot  mr-3"></i>
                        <p class="text-gray-700 font-kanit">สถานที่: <span class="text-orange-600">{{ $item->location }}</span></p>
                    </div>
                </div>
            </div>

            <!-- Bottom section -->
            <div class="mt-8">
                <!-- Contact information -->
                <div class="w-full md:w-1/2 flex justify-center items-center md:float-right bg-white p-6 rounded-lg ">
                    <div class="flex items-center space-x-6">
                        <div class="flex flex-col items-center">
                            <div class="flex items-center mb-2">
                                <i class="fa-solid fa-address-card mr-2"></i>
                                <span class="font-semibold text-gray-700">ติดต่อ:</span>
                            </div>
                            <img class="w-24 h-24 rounded-full mt-2" src="{{ asset('img/default-avatar.png') }}" alt="รูปโปรไฟล์">
                            <p class="font-bold mt-2  hover:underline">
                                <a href="{{ route('profile') }}">{{ $item->reporter_name }}</a>
                            </p>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <i class="fa-solid fa-phone  mr-2"></i>
                                <p class="text-gray-700 font-kanit">TEL: <span class="text-orange-600 font-Lato">{{ $item->contact }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map section -->
            <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
                <p class="text-2xl font-semibold text-gray-800 mb-4">Location</p>
                <p class="mt-2 font-kanit text-gray-600">{{ $item->location }}</p>
                <!-- Add a map here if you have coordinates in your database -->
                <div class="mt-4 bg-gray-200 h-64 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">แผนที่จะแสดงที่นี่</p>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
@endsection