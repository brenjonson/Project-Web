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
                            @auth
                                <img class="w-24 h-24 rounded-full mt-4" src="{{ auth()->user()->profile_photo_url }}" alt="Rounded avatar">
                            @else
                                <img class="w-24 h-24 rounded-full mt-4" src="{{ asset('storage/uploads/Rick.png') }}" alt="Default avatar">
                            @endauth

                            <p class="font-bold mt-2 underline">
                                <a href="{{ route('profile') }}" class="underline">{{ $item->reporter_name }}</a>
                            </p>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <i class="fa-solid fa-phone mr-2"></i>
                                <p class="text-gray-600 font-kanit">Contact: <span class="text-orange-600 font-Lato">{{ $item->contact }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map section -->
            <div class="mt-8 bg-white p-6 rounded-lg shadow-lg">
                <p class="text-2xl font-semibold text-gray-800 mb-4">Location</p>
                <p class="mt-2 font-kanit text-gray-600">{{ $item->location }}</p>
                <!-- Map -->
                <div class="mt-4 relative rounded-lg flex items-center justify-center">
                    <div class="map-container">
                        <div class="map-scroll-container">
                            <div class="map-content">
                                <img id="map-image" src="{{ asset('img/fansmap.png') }}" alt="Map" class="map-image">
                                <div id="markers-container"></div>
                            </div>
                        </div>
                    </div>
                    <div id="popup" class="hidden absolute bg-white p-4 rounded-lg shadow-lg z-10"></div>
                </div>
            </div>
        </div>
    </main>

    <!-- Map Overlay -->
    <div id="mapOverlay" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden" style="z-index: 1000;">
        <div class="relative top-10 mx-auto p-5 border w-11/12 max-w-4xl shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Location Map</h3>
                <div class="mt-2 px-7 py-3">
                    <div id="mapContainer" class="map-container mt-4">
                        <div class="map-scroll-container">
                            <img src="{{ asset('img/fansmap.png') }}" alt="Map" class="map-image">
                            <div id="markers-container"></div>
                        </div>
                    </div>
                    <div id="noLocationMessage" class="hidden mt-4 text-red-500">
                        Location information is not available for this item.
                    </div>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="closeMapBtn" class="px-4 py-2 bg-gray-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles for the markers and popup -->
    <style>
    .map-container {
        position: relative;
        width: 100%;
        height: 400px; /* Fixed height for the container */
        overflow: hidden;
        border: 1px solid #ccc;
        border-radius: 8px;
    }
    .map-scroll-container {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: auto;
    }
    .map-content {
        position: relative;
        width: 100%;
        height: auto;
    }
    .map-image {
        width: 100%;
        height: auto;
        display: block;
    }
    .map-marker {
        position: absolute;
        background-image: url("{{ asset('img/pin-8-24.png') }}");
        background-size: contain;
        background-repeat: no-repeat;
        width: 24px;
        height: 24px;
        transform: translate(-50%, -100%);
        cursor: pointer;
    }
    .map-marker:hover {
        filter: brightness(1.2);
    }
    #popup {
        max-width: 250px;
        font-size: 14px;
        z-index: 1000;
        background-color: white;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: absolute;
        transform: translate(-50%, -100%);
    }
    #popup img {
        width: 100%;
        height: auto;
        max-height: 150px;
        object-fit: cover;
        border-radius: 4px;
        margin-bottom: 8px;
    }
</style>

    @php
    $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
    $imagePath = null;
    foreach ($imageExtensions as $ext) {
        if (Storage::disk('public')->exists('uploads/' . $item->id . '-1.' . $ext)) {
            $imagePath = 'storage/uploads/' . $item->id . '-1.' . $ext;
            break;
        }
    }
    $item->image_path = asset($imagePath ?? 'storage/uploads/Rick.png');
    @endphp


    <!-- Pass data to JavaScript -->
    <script>
        const item = @json($item);
        const defaultImagePath = "{{ asset('storage/uploads/Rick.png') }}";
    </script>

<script type="text/javascript" src="{{ asset('js/calLocationForDetail.js') }}"></script>

    @include('layouts.footer')
@endsection
