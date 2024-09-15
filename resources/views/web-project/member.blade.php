@extends('layouts.navbar')

@section('content')
    @include('layouts.banner')

    <header>
        <div class="container flex justify-center mt-8 max-w-full ">
            <button
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700 mr-14">
                <a href="{{ route('popularItem') }}">ของที่หายบ่อย</a>
            </button>
            <button
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700">
                <a href="#">ค้นหาของ</a>
            </button>
            <button
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700 ml-14">
                <a href="#">แจ้งพบของที่หาย</a>
            </button>
        </div>
    </header>

    <main>
        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6">แจ้งพบของ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                @forelse($itemsForMember->where('stage', 1) as $found)
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
        </div>


        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6">ค้นหาของ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                @forelse($itemsForMember->where('stage', 2) as $find)
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
                    <a href="{{ route('item.detail', ['id' => $find->id]) }}" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                        <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                            <div class="flex-shrink-0">
                                <img src="{{ asset($imagePath ?? 'storage/uploads/') }}" alt="Card Image" class="h-12 w-12 object-cover">
                            </div>
                            <div class="ml-6 pt-1 font-kanit">
                                <h4 class="text-white text-xl font-bold">{{ $find->type }}</h4>
                                <p class="text-base text-white">ผู้แจ้ง: {{ $find->reporter_name }}</p>
                                <p class="text-base text-white">สถานที่: {{ $find->location }}</p>
                                <p class="text-base text-white">ติดต่อที่: {{ $find->contact ?? 'ไม่ระบุ' }}</p>
                            </div>
                        </div>  
                    </a>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลแจ้งค้นหาของในขณะนี้</p>
                    </div>
                @endforelse
            </div>
        </div>


        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---ของที่รับไปแล้ว-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-700 -mt-6 ">ของที่รับไปแล้ว</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">

                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">I phone 7 สีดำ</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>

    @include('layouts.footer')
@endsection
