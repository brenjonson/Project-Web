@extends('layouts.navbar')

@section('content')
    
    <main class="">
        <div class="container mx-auto p-6">
            <!-- Top section -->
            <div class="flex justify-start items-center space-x-4">
                <a href="{{ route('member') }}" class="text-black hover:text-orange-600">
                    <i class="fa-solid fa-arrow-left w-12"></i>
                </a>
                <div class="flex flex-col space-y-2">
                    <h1 class="text-3xl font-bold">Details</h1>
                    <p class="text-gray-500">Posted {{ $item->created_at->diffForHumans() }}</p>
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
                        <p class="text-gray-600 font-kanit">ชื่อผู้แจ้ง: <span class="text-orange-600">{{ $item->reporter_name }}</span></p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-box mr-2"></i>
                        <p class="text-gray-600 font-kanit">ของที่เจอ/หาย: <span class="text-orange-600">{{ $item->item }}</span></p>
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
                        <p class="text-gray-600 font-kanit">สถานที่: <span class="text-orange-600">{{ $item->location }}</span></p>
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
                                <a href="{{ route('profile') }}" class="underline">{{ $item->reporter_name }}</a>
                            </p>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <i class="fa-solid fa-phone mr-2"></i>
                                <p class="text-gray-600 font-kanit">TEL: <span class="text-orange-600 font-Lato">{{ $item->contact }}</span></p>
                            </div>
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

    @include('layouts.footer')
@endsection