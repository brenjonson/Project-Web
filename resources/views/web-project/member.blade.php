@extends('layouts.navbar')

@section('content')
    @include('layouts.banner')

    <header>
        <div class="container flex justify-center mt-8 max-w-full px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 w-full max-w-4xl">
                <a href="{{ route('popularItem') }}">
                    <button
                        class="w-full bg-amber-500 hover:bg-amber-600 text-white py-4 px-6 md:px-8 rounded-lg flex items-center justify-center font-kanit text-lg md:text-xl transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <i class="fa-solid fa-location-dot mr-3"></i>
                        ของที่หายบ่อย
                    </button>
                </a>
                <a href="{{ route('search') }}">
                    <button
                        class="w-full bg-teal-500 hover:bg-teal-600 text-white py-4 px-6 md:px-8 rounded-lg flex items-center justify-center font-kanit text-lg md:text-xl transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <i class="fa-solid fa-magnifying-glass mr-3"></i>
                        ค้นหาของ
                    </button>
                </a>
                <a href="{{ route('uploadFound') }}">
                    <button
                        class="w-full bg-rose-500 hover:bg-rose-600 text-white py-4 px-6 md:px-8 rounded-lg flex items-center justify-center font-kanit text-lg md:text-xl transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <i class="fa-solid fa-exclamation mr-3"></i>
                        แจ้งพบของหาย
                    </button>
                </a>
            </div>
        </div>
    </header>






    <main>
        <div
            class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center pt-16 pb-12 mx-auto w-3/4 shadow-2xl font-kanit">
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6">แจ้งพบของ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                @forelse($itemsForMember->where('stage', 1)->take(6) as $found)
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
                        class="block mb-4 hover:shadow-xl transition duration-300 ease-in-out hover:-translate-y-2 ml-4 mr-4 mt-4">
                        <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start">
                            <img src="{{ asset($imagePath ?? 'path/to/default/image.jpg') }}" alt="{{ $found->type }}"
                                class="w-16 h-16 object-cover rounded-lg mr-4">
                            <div>
                                <h3 class="text-lg font-semibold">{{ $found->item }}</h3>
                                <p>ผู้แจ้ง: {{ $found->reporter_name }}</p>
                                <p>สถานที่: {{ $found->location }}</p>
                                <p>ติดต่อที่: {{ $found->contact ?? 'ไม่ระบุ' }}</p>
                                <button
                                    class="mt-2 bg-blue-600 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด</button>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งพบของในขณะนี้</p>
                    </div>
                @endforelse
            </div>
            <div class="mt-8">
                <a href="{{ route('other') }}">
                    <button
                        class="bg-blue-600 text-white py-2 px-6 rounded-full hover:bg-blue-500 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        ดูเพิ่มเติม
                    </button>
                </a>
            </div>
        </div>


        <!-- ส่วน "ค้นหาของ" -->
        <div
            class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center pt-16 pb-12 mx-auto w-3/4 shadow-2xl font-kanit">
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6">ค้นหาของ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                @forelse($itemsForMember->where('stage', 2)->take(6) as $find)
                    @php
                        $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                        $imagePath = null;
                        foreach ($imageExtensions as $ext) {
                            if (Storage::disk('public')->exists('uploads/' . $find->id . '-1.' . $ext)) {
                                $imagePath = 'storage/uploads/' . $find->id . '-1.' . $ext;
                                break;
                            }
                        }
                    @endphp
                    <a href="{{ route('item.detail', ['id' => $find->id]) }}"
                        class="block mb-4 hover:shadow-xl transition duration-300 ease-in-out hover:-translate-y-2 ml-4 mr-4 mt-4">
                        <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start">
                            <div class="flex-shrink-0">
                                <img src="{{ asset($imagePath ?? 'storage/uploads/') }}" alt="Card Image"
                                    class="w-16 h-16 object-cover rounded-lg mr-4">
                            </div>
                            <div class="ml-6 pt-1 font-kanit">
                                <h3 class="text-lg font-semibold">{{ $find->type }}</h3>
                                <p class="text-base">ผู้แจ้ง: {{ $find->reporter_name }}</p>
                                <p class="text-base">สถานที่: {{ $find->location }}</p>
                                <p class="text-base">ติดต่อที่: {{ $find->contact ?? 'ไม่ระบุ' }}</p>
                                <button
                                    class="mt-2 bg-blue-600 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด</button>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งค้นหาของในขณะนี้</p>
                    </div>
                @endforelse
            </div>
            <div class="mt-8">
                <a href="{{ route('otherFind') }}">
                    <button
                        class="bg-blue-600 text-white py-2 px-6 rounded-full hover:bg-blue-500 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        ดูเพิ่มเติม
                    </button>
                </a>
            </div>
        </div>


        <!-- ส่วน "ของที่รับไปแล้ว" -->
        <div
            class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center pt-16 pb-12 mx-auto w-3/4 shadow-2xl font-kanit">
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6">ของที่รับไปแล้ว</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                @forelse($itemsForMember->where('stage', 3)->take(6) as $sucess)
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
                    <a href="{{ route('item.detail', ['id' => $sucess->id]) }}"
                        class="block mb-4 hover:shadow-xl transition duration-300 ease-in-out hover:-translate-y-2 ml-4 mr-4 mt-4">
                        <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start">
                            <div class="flex-shrink-0">
                                <img src="{{ asset($imagePath ?? 'storage/uploads/') }}" alt="Card Image"
                                    class="w-16 h-16 object-cover rounded-lg mr-4">
                            </div>
                            <div class="ml-6 pt-1 font-kanit">
                                <h3 class="text-lg font-semibold">{{ $sucess->type }}</h3>
                                <p class="text-base">ผู้แจ้ง: {{ $sucess->reporter_name }}</p>
                                <p class="text-base">สถานที่: {{ $sucess->location }}</p>
                                <p class="text-base">ติดต่อที่: {{ $sucess->contact ?? 'ไม่ระบุ' }}</p>
                                <button
                                    class="mt-2 bg-blue-600 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด</button>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งค้นหาของในขณะนี้</p>
                    </div>
                @endforelse
            </div>
            <div class="mt-8">
                <a href="{{ route('otherSuccess') }}">
                    <button
                        class="bg-blue-600 text-white py-2 px-6 rounded-full hover:bg-blue-500 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105">
                        ดูเพิ่มเติม
                    </button>
                </a>
            </div>
        </div>
    </main>

    @include('layouts.footer')
@endsection
