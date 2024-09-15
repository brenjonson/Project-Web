@extends('layouts.navbar')

@section('content')

    <header>

        <div class="container mx-auto p-5 py-2 gap-4 mt-2 flex items-center">
            <div class="text-3xl">
                <p class="font-kanit">ค้นหาของหาย</p>
            </div>

            <!-- Search -->
            <form class="max-w-md ">
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input
                        class="border-2 font-kanit border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none placeholder-gray-500"
                        type="search" name="search" placeholder="ค้าหา">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
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

            <!-- ส่วนล่างSeclect -->
            <div class="max-w-md">
                <div class="block w-full mb-2 mt-4">
                    <select id="small_select"
                        class="border-2 font-kanit border-gray-300 text-gray-500 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none">
                        <option selected>เลือกประเภท</option>
                        <option value="key">กุญแจ</option>
                        <option value="phone">โทรศัพท์/แท็บเล็ต</option>
                        <option value="bagpack">กระเป๋า</option>
                        <option value="decorations">เครื่องประดับ</option>
                        <option value="student_card">บัตรนักศึกษา</option>
                    </select>
                </div>

            </div>
        <div>
    </header>

    <main>
        <div class="container mx-auto p-5 py-2 flex gap-40">
            <!-- Map Section -->
            <div class="map-container" style="position: relative; width: 954px; height: 1559px;">
                <img src="./img/fansmap.png" alt="Map" style="width: 100%; height: 100%;">
                <div id="markers-container"></div>
            </div>


            <!-- ด้านขวา -->
            <div class="flex flex-col  justify-start gap-5">
                <!-- กล่องที่ 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
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
                        <a href="{{ route('item.detail', ['id' => $found->id]) }}" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                            <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset($imagePath ?? 'storage/uploads/') }}" alt="Card Image" class="h-12 w-12 object-cover">
                                </div>
                                <div class="ml-6 pt-1 font-kanit">
                                    <h4 class="text-white text-xl font-bold">{{ $found->type }}</h4>
                                    <p class="text-base text-white">ผู้แจ้ง: {{ $found->reporter_name }}</p>
                                    <p class="text-base text-white">สถานที่: {{ $found->location }}</p>
                                    <p class="text-base text-white">ติดต่อที่: {{ $found->contact ?? 'ไม่ระบุ' }}</p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div class="col-span-3 text-center py-8">
                            <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งพบของในขณะนี้</p>
                        </div>
                    @endforelse
                </div>
                <!-- กล่องที่ 2 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรนักศึกษา: Curry</h4>
                            <p class="text-base text-white">ผู้แจ้ง: ณัฐธเนศ กำเนิดกลีม</p>
                            <p class="text-base text-white">สถานที่หาย: หอสมุดคณะวิศวะ</p>
                            <p class="text-base text-white">ติดต่อที่: ig abc_987</p>
                        </div>
                    </div>
                </a>           
            </div>
        </div>
    </main>

    @include('layouts.footer')

    <!-- Styles for the markers -->
    <style>
        .map-container {
            position: relative;
            width: 954px;
            height: 1559px;
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
        const items = @json($itemsForSearch);
    </script>
    
    <!-- Map Script -->
    {{-- <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mapWidth = 954;
            const mapHeight = 1559;
            const latMin = 16.441250;
            const latMax = 16.482222;
            const lonMin = 102.806139;
            const lonMax = 102.832306;
    
            const markersContainer = document.getElementById('markers-container');
    
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
                    marker.style.left = x + 'px';
                    marker.style.top = y + 'px';
    
                    // Optional: Add tooltip or click event
                    marker.title = `${item.type} reported by ${item.reporter_name}`;
                    marker.addEventListener('click', () => {
                        // Redirect to item detail page or show more info
                        window.location.href = `/item/${item.id}`;
                    });
    
                    // Append marker to container
                    markersContainer.appendChild(marker);
                }
            });
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const mapImage = document.querySelector('.map-container img');
        const markersContainer = document.getElementById('markers-container');
        const latMin = 16.441250;
        const latMax = 16.482222;
        const lonMin = 102.806139;
        const lonMax = 102.832306;

        function placeMarkers() {
            const mapWidth = mapImage.offsetWidth;
            const mapHeight = mapImage.offsetHeight;

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
                    marker.style.left = x + 'px';
                    marker.style.top = y + 'px';

                    // Optional: Add tooltip or click event
                    marker.title = `${item.type} reported by ${item.reporter_name}`;
                    marker.addEventListener('click', () => {
                        // Redirect to item detail page or show more info
                        window.location.href = `/item/${item.id}`;
                    });

                    // Append marker to container
                    markersContainer.appendChild(marker);
                }
            });
        }

        // Ensure the image has loaded before placing markers
        if (mapImage.complete) {
            placeMarkers();
        } else {
            mapImage.onload = placeMarkers;
        }
    });

    </script>

    
@endsection