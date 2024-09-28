@extends('layouts.navbar')
@vite('resources/css/other.css') {{-- นำเข้าไฟล์ CSS --}}
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

@section('content')
    <div class="container mx-auto">
        <!-- Header Section -->
        <header class="mb-8">
            <h1 class="text-3xl font- mb-4 font-kanit mt-6">ค้นหาของหาย</h1>
            <div class="flex flex-col sm:flex-row gap-4">
                <!-- Search Input -->
                <form class="max-w-md" onsubmit="return false;">
                    <div class="relative">
                        <input
                            id="searchInput"
                            class="border-2 font-kanit border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none placeholder-gray-500 w-full"
                            type="search" name="search" placeholder="ค้นหา">
                        <button type="button" class="absolute right-0 top-0 mt-3 mr-4" onclick="filterItems()">
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

            </div>
        </header>

        <!-- Main Section -->
        <main class="flex flex-col lg:flex-row gap-8">
            <!-- Map Section -->
            <div class="lg:w-2/3 relative">
                <div id="map-container" class="map-container" style="position: relative; width: 954px; height: 1559px;">
                    <img id="map-image" src="{{ asset('img/fansmap.png') }}" alt="Map" style="width: 100%; height: 100%;">
                    <div id="markers-container" class="absolute top-0 left-0 w-full h-full"></div>
                </div>
                <div id="popup" class="hidden absolute bg-white p-4 rounded-lg shadow-lg z-10"></div>
            </div>

            <!-- Items List -->
            <div class="lg:w-1/3">
                <h2 class="text-2xl font mb-4 font-kanit">รายการของหาย</h2>


                <!-- Select Input -->
                <div class="relative inline-block w-[180px] mb-6 ">
                    <select id="typeSelect"
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg shadow leading-tight focus:outline-none focus:shadow-outline font-kanit"
                        onchange="filterItems()">
                        <option value="">เลือกประเภท</option>
                        <option value="key">กุญแจ</option>
                        <option value="phone">โทรศัพท์/แท็บเล็ต</option>
                        <option value="bagpack">กระเป๋า</option>
                        <option value="decorations">เครื่องประดับ</option>
                        <option value="student_card">บัตรนักศึกษา</option>
                    </select>
                </div>

                <div id="itemsList">
                @forelse($itemsForSearch as $found)
                @php
                    $itemsWithImages = $itemsForSearch->map(function($item) {
                        $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                        $imagePath = null;
                        foreach ($imageExtensions as $ext) {
                            if (Storage::disk('public')->exists('uploads/' . $item->id . '-1.' . $ext)) {
                                $imagePath = 'storage/uploads/' . $item->id . '-1.' . $ext;
                                break;
                            }
                        }
                        $item->image_path = asset($imagePath ?? 'storage/uploads/Rick.png');
                        return $item;
                    });
                @endphp
                        <a href="{{ route('item.detail', ['id' => $found->id]) }}"
                            class="block mb-4  hover:shadow-xl transition duration-300 ease-in-out hover:-translate-y-2 ml-4 mr-4">
                            <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start ">
                                <img src="{{ asset($imagePath ?? 'storage/uploads/Rick.png') }}" alt="{{ $found->type }}"
                                    class="w-16 h-16 object-cover rounded-full mr-4">
                                <div>
                                    <h3 class="text-lg font-semibold">{{ $found->item }}</h3>
                                    <p>ผู้แจ้ง: {{ $found->reporter_name }}</p>
                                    <p>สถานที่: {{ $found->location }}</p>
                                    <p>ติดต่อที่: {{ $found->contact ?? 'ไม่ระบุ' }}</p>
                                    <button
                                        class="mt-2 bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด
                                    </button>
                                </div>
                            </div>
                        </a>
                @empty
                    <div class="text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งพบของในขณะนี้</p>
                    </div>
                @endforelse
                </div>
            </div>
        </main>
    </div>

    @include('layouts.footer')

    <!-- Styles for the markers and popup -->
    <style>
        .map-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            overflow: hidden;
        }
        .map-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
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
            z-index: 1000; /* Ensure popup is above everything */
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

    <!-- Pass data to JavaScript -->
    <script>
        const items = @json($itemsForSearch);
    </script>

    <!-- Map Script -->
    <script type="text/javascript" src="{{ asset('js/calLocation.js') }}"></script>

    <script>
        function showPopup(item, marker) {
            const imagePath = item.image_path ? item.image_path : '{{ asset($imagePath ?? 'storage/uploads/Rick.png') }}';    //รูปภาพ
            popup.innerHTML = `
               <img src="${imagePath}" alt="${item.type}">
                <h3 class="font-semibold">${item.item}</h3>
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

        function filterItems() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const typeSelect = document.getElementById('typeSelect').value.toLowerCase();
            const itemsList = document.getElementById('itemsList');

            itemsList.innerHTML = '';

            items.forEach(item => {
                if ((item.item.toLowerCase().includes(searchInput) || searchInput === '') &&
                    (item.type.toLowerCase() === typeSelect || typeSelect === '')) {
                    const imagePath = item.image_path ? item.image_path : '{{ asset($imagePath ?? 'storage/uploads/Rick.png') }}';
                    const itemHtml = `
                        <a href="/item/${item.id}" class="block mb-4 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start">
                                <img src="${imagePath}" alt="${item.type}" class="w-16 h-16 object-cover rounded-full mr-4">
                                <div>
                                    <h3 class="text-lg font-semibold">${item.item}</h3>
                                    <p>ผู้แจ้ง: ${item.reporter_name}</p>
                                    <p>สถานที่: ${item.location}</p>
                                    <p>ติดต่อที่: ${item.contact || 'ไม่ระบุ'}</p>
                                    <button class="mt-2 bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด</button>
                                </div>
                            </div>
                        </a>
                    `;
                    itemsList.innerHTML += itemHtml;
                }
            });

            if (itemsList.innerHTML === '') {
                itemsList.innerHTML = `
                    <div class="text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่พบรายการที่ตรงกับการค้นหา</p>
                    </div>
                `;
            }

            // Update markers on the map
            updateMarkers();
        }

        function updateMarkers() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const typeSelect = document.getElementById('typeSelect').value.toLowerCase();
            const markersContainer = document.getElementById('markers-container');

            // markersContainer.innerHTML = '';

            items.forEach(item => {
                if ((item.item.toLowerCase().includes(searchInput) || searchInput === '') &&
                    (item.type.toLowerCase() === typeSelect || typeSelect === '')) {
                    const marker = document.createElement('div');
                    marker.className = 'map-marker';
                    marker.style.left = `${item.x_coordinate}%`;
                    marker.style.top = `${item.y_coordinate}%`;
                    marker.addEventListener('click', () => showPopup(item, marker));
                    marker.addEventListener('mouseleave', hidePopup);
                    markersContainer.appendChild(marker);
                }
            });
        }

        // Initial filter on page load
        filterItems();
    </script>

@endsection
