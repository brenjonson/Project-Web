@extends('layouts.navbar')

@section('content')
    @include('layouts.banner')

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
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6">บัตรนักศึกษา</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                @forelse($items->where('type', 'student_card') as $card)
                    @php
                    $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                    $imagePath = null;
                    foreach ($imageExtensions as $ext) {
                        if (Storage::disk('public')->exists('uploads/' . $card->id . '-1.' . $ext)) {
                            $imagePath = 'storage/uploads/' . $card->id . '-1.' . $ext;
                            break;
                        }
                    }
                    @endphp
                    <a href="{{ route('item.detail', ['id' => $card->id]) }}" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                        <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                            <div class="flex-shrink-0">
                                <img src="{{ asset($imagePath ?? 'storage/uploads/') }}" alt="Card Image" class="h-12 w-12 object-cover">
                            </div>
                            <div class="ml-6 pt-1 font-kanit">
                                <h4 class="text-white text-xl font-bold">บัตรนักศึกษา:</h4>
                                <p class="text-base text-white">ผู้แจ้ง: {{ $card->reporter_name }}</p>
                                <p class="text-base text-white">สถานที่: {{ $card->location }}</p>
                                <p class="text-base text-white">ติดต่อที่: {{ $card->contact ?? 'ไม่ระบุ' }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลบัตรนักศึกษาที่หายในขณะนี้</p>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="bg-slate-100 rounded-lg mt-5 flex flex-col items-center py-24 mx-auto w-3/4 shadow-2xl">
            <p class="text-5xl font-kanit mb-8 text-center text-gray-700 -mt-6">กุญแจ</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full max-w-6xl">
                @forelse($items->where('type', 'key') as $key)
                    @php
                    $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                    $imagePath = null;
                    foreach ($imageExtensions as $ext) {
                        if (Storage::disk('public')->exists('uploads/' . $key->id . '-1.' . $ext)) {
                            $imagePath = 'storage/uploads/' . $key->id . '-1.' . $ext;
                            break;
                        }
                    }
                    @endphp
                    <a href="{{ route('item.detail', ['id' => $key->id]) }}" class="hover:bg-gray-700 hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2">
                        <div class="flex p-6 bg-gray-600 rounded-lg shadow-xl">
                            <div class="flex-shrink-0">
                                <img src="{{ asset($imagePath ?? 'storage/uploads/') }}" alt="Key Image" class="h-12 w-12 object-cover">
                            </div>
                            <div class="ml-6 pt-1 font-kanit">
                                <h4 class="text-white text-xl font-bold">กุญแจ:</h4>
                                <p class="text-base text-white">ผู้แจ้ง: {{ $key->reporter_name }}</p>
                                <p class="text-base text-white">สถานที่: {{ $key->location }}</p>
                                <p class="text-base text-white">ติดต่อที่: {{ $key->contact ?? 'ไม่ระบุ' }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีข้อมูลกุญแจที่หายในขณะนี้</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>

    @include('layouts.footer')
@endsection
