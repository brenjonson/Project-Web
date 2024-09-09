@extends('layouts.navbar')

@section('content')
    @include('layouts/banner')

    <header>
        <div class="container flex justify-center mt-8 max-w-full ">
            <button
                class="font-kanit text-white bg-blue-400 dark:bg-orange-600   rounded-full text-2xl px-24 py-3.5 text-center hover:bg-orange-700 ">
                <a href="#">ของที่หายบ่อย</a>
            </button>
        </div>
    </header>

    <main>
        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---ของที่แจ้งหาย-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-700 -mt-6 ">บัตรนักศึกษา</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">

                <!-- กล่องที่ 1 -->
                <a href="#"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">บัตรนักศึกษา:James</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>
            </div>
        </div> <!---บัตร-->


        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <!---พบของที่หาย-->
            <p class="text-5xl font-kanit mb-8 text-center text-gray-700 -mt-6 ">กุญแจ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                <!-- กล่องที่ 1 -->
                <a href="{{ route('detail') }}"
                    class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                    <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                        <div class="flex-shrink-0"> <!--รูปภาพ-->
                            <img src="./img/4.png" alt="" class="h-12 w-12">
                        </div>
                        <div class="ml-6 pt-1 font-kanit"> <!---เนื้อหา-->
                            <h4 class="text-white text-xl font-bold">กุญแจรถเบนซ์</h4>
                            <p class="text-base text-white">ผู้แจ้ง: อรรณพ แสงศิลา</p>
                            <p class="text-base text-white">สถานที่หาย: SC.09 หน้าห้อง 9127</p>
                            <p class="text-base text-white">ติดต่อที่: 087-6543210</p>
                        </div>
                    </div>
                </a>
            </div>
        </div> <!---กุญแจ-->

    </main>

    @include('layouts/footer')
@endsection