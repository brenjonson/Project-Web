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
                            <img class="w-24 h-24 rounded-full mt-4" src="{{ auth()->user()->profile_photo_url }}" alt="Rounded avatar">
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
            <div class="mx-auto p-6">
                <div class="flex items-center">
                    <p class="text-2xl">Location</p>
                    <button id="showMapBtn" class="ml-4 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
                        <i class="fa-solid fa-arrow-up"></i> Show Map
                    </button>
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

    <!-- Styles for the markers and map -->
    <style>
        .map-container {
            position: relative;
            width: 100%;
            height: 70vh;
            overflow: hidden;
        }
        .map-scroll-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: auto;
        }
        .map-marker {
            position: absolute;
            background-image: url("/img/pin-8-24.png");
            background-size: contain;
            background-repeat: no-repeat;
            width: 24px;
            height: 24px;
            transform: translate(-50%, -100%);
            cursor: pointer;
        }
    </style>

    <!-- Pass data to JavaScript -->
    <script>
        const item = @json($item);
    </script>

    <script type="text/javascript" src="{{ asset('js/calLocation.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const showMapBtn = document.getElementById('showMapBtn');
            const closeMapBtn = document.getElementById('closeMapBtn');
            const mapOverlay = document.getElementById('mapOverlay');
            const mapContainer = document.getElementById('mapContainer');
            const noLocationMessage = document.getElementById('noLocationMessage');

            showMapBtn.addEventListener('click', function() {
                mapOverlay.classList.remove('hidden');
                if (!window.item.latitude || !window.item.longitude) {
                    mapContainer.classList.add('hidden');
                    noLocationMessage.classList.remove('hidden');
                } else {
                    mapContainer.classList.remove('hidden');
                    noLocationMessage.classList.add('hidden');
                    // Ensure the map image is loaded before placing markers
                    const mapImage = document.querySelector('.map-container img');
                    if (mapImage.complete) {
                        window.placeMarkers($item); 
                    } else {
                        mapImage.onload = window.placeMarkers;
                    }
                }
            });

            closeMapBtn.addEventListener('click', function() {
                mapOverlay.classList.add('hidden');
            });
        });
    </script>

    @include('layouts.footer')
@endsection
