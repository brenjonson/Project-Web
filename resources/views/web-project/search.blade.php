@extends('layouts.navbar')

@section('content')
    <div class="container mx-auto">
        <!-- Header Section -->
        <header class="mb-8">
            <h1 class="text-3xl font- mb-4 font-kanit mt-6">ค้นหาของหาย</h1>
            <div class="flex flex-col sm:flex-row gap-4">
                <!-- Search Input -->
                <form class="max-w-md">
                    <div class="relative">
                        <input
                            class="border-2 font-kanit border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none placeholder-gray-500 w-full"
                            type="search" name="search" placeholder="ค้นหา">
                        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px" height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </form>
                <!-- Select Input -->
                <div class="relative inline-block w-[180px]">
                    <select id="small_select"
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow leading-tight focus:outline-none focus:shadow-outline font-kanit">
                        <option selected>เลือกประเภท</option>
                        <option value="key">กุญแจ</option>
                        <option value="phone">โทรศัพท์/แท็บเล็ต</option>
                        <option value="bagpack">กระเป๋า</option>
                        <option value="decorations">เครื่องประดับ</option>
                        <option value="student_card">บัตรนักศึกษา</option>
                    </select>
                </div>
            </div>
        </header>

        <!-- Main Section -->
        <main class="flex flex-col lg:flex-row gap-8">
            <!-- Map Section -->
            <div class="lg:w-2/3 relative">
                <div class="w-full rounded-lg overflow-hidden">
                    <img src="./img/mapY.png" alt="Map" class="w-auto h-auto mx-auto" id="map-image">
                </div>

                <div id="markers-container" class="absolute top-0 left-0 w-full h-full "></div>
                <div id="popup" class="hidden absolute bg-white p-4 rounded-lg shadow-lg z-10"></div>
            </div>

            <!-- Items List -->
            <div class="lg:w-1/3">
                <h2 class="text-2xl font mb-4 font-kanit">รายการของหาย</h2>

                @forelse($itemsForSearch as $found)
                    @php
                        $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                        $imagePath = null;
                        foreach ($imageExtensions as $ext) {
                            if (Storage::disk('public')->exists('uploads/' . $found->id . '-1.' . $ext)) {
                                $imagePath = 'storage/uploads/' . $found->id . '-1.' . $ext;
                                break;
                            }
                        }
                    @endphp
                    <a href="{{ route('item.detail', ['id' => $found->id]) }}"
                        class="block mb-4  hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                        <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start">
                            <img src="{{ asset($imagePath ?? 'path/to/default/image.jpg') }}" alt="{{ $found->type }}"
                                class="w-16 h-16 object-cover rounded-full mr-4">
                            <div>
                                <h3 class="text-lg font-semibold">{{ $found->type }}</h3>
                                <p>ผู้แจ้ง: {{ $found->reporter_name }}</p>
                                <p>สถานที่: {{ $found->location }}</p>
                                <p>ติดต่อที่: {{ $found->contact ?? 'ไม่ระบุ' }}</p>
                                <button
                                    class="mt-2 bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด</button>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งพบของในขณะนี้</p>
                    </div>
                @endforelse
            </div>
        </main>
    </div>

    @include('layouts.footer')

    <!-- Styles for the markers and popup -->
    <style>
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

        .map-marker:hover {
            filter: brightness(1.2);
        }

        #popup {
            max-width: 250px;
            font-size: 14px;
        }

        #popup img {
            width: 100%;
            height: auto;
            max-height: 150px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 8px;
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
    
        .map-marker:hover {
            filter: brightness(1.2);
        }
    
        #popup {
            max-width: 250px;
            font-size: 14px;
            z-index: 1000; /* Ensure popup is above everything */
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            transform: translate(-50%, -100%);
        }
    </style>

    <!-- Pass data to JavaScript -->
    <script>
        const items = @json($itemsForSearch);
    </script>

    <!-- Map Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mapImage = document.getElementById('map-image');
            const markersContainer = document.getElementById('markers-container');
            const popup = document.getElementById('popup');
            const latMin = 16.441250;
            const latMax = 16.482222;
            const lonMin = 102.806139;
            const lonMax = 102.832306;
    
            function placeMarkers() {
                const mapWidth = mapImage.offsetWidth;
                const mapHeight = mapImage.offsetHeight;
    
                markersContainer.innerHTML = ''; // Clear existing markers
    
                items.forEach(item => {
                    if (item.latitude && item.longitude) {
                        const lat = parseFloat(item.latitude);
                        const lon = parseFloat(item.longitude);
    
                        // Map latitude and longitude to x and y
                        const x = ((lon - lonMin) / (lonMax - lonMin)) * mapWidth;
                        const y = ((latMax - lat) / (latMax - latMin)) * mapHeight;
    
                        // Create marker element
                        const marker = document.createElement('div');
                        marker.classList.add('map-marker');
                        marker.style.left = `${x}px`;
                        marker.style.top = `${y}px`;
    
                        // Add mouseover event to show popup
                        marker.addEventListener('mouseover', () => {
                            showPopup(item, marker);
                        });
    
                        // Add mouseout event to hide popup
                        marker.addEventListener('mouseout', () => {
                            hidePopup();
                        });
    
                        // Add click event to redirect to item detail page
                        marker.addEventListener('click', () => {
                            window.location.href = `/item/${item.id}`;
                        });
    
                        // Append marker to container
                        markersContainer.appendChild(marker);
                    }
                });
            }
    
            function showPopup(item, marker) {
                const imagePath = item.image_path ? item.image_path : '{{ asset($imagePath ?? 'path/to/default/image.jpg') }}';    //รูปภาพ
                popup.innerHTML = `
                    <img src="${imagePath}" alt="${item.type}">
                    <h3 class="font-semibold">${item.type}</h3>
                    <p>ผู้แจ้ง: ${item.reporter_name}</p>
                    <p>สถานที่: ${item.location}</p>
                    <p>ติดต่อที่: ${item.contact || 'ไม่ระบุ'}</p>
                `;
    
                // Get the relative position of the marker within the container
                const markerRect = marker.getBoundingClientRect();
                const containerRect = markersContainer.getBoundingClientRect();
    
                // Calculate the popup position based on the marker's position relative to the container
                popup.style.left = `${markerRect.left - containerRect.left}px`;
                popup.style.top = `${markerRect.top - containerRect.top - popup.offsetHeight - 10}px`; // Position the popup above the marker
    
                // Ensure the popup has a high z-index
                popup.style.zIndex = '1000';
    
                popup.classList.remove('hidden');
            }
    
            function hidePopup() {
                popup.classList.add('hidden');
            }
    
            // Ensure the image has loaded before placing markers
            if (mapImage.complete) {
                placeMarkers();
            } else {
                mapImage.onload = placeMarkers;
            }
    
            // Add window resize event listener to reposition markers when the window is resized
            window.addEventListener('resize', placeMarkers);
        });
    </script>
    
    
    
@endsection