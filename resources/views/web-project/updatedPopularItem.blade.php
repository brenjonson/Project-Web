@extends('layouts.navbar')

@section('content')
    @include('layouts.banner')

    <header>
        <div class="container flex justify-center mt-8 max-w-full px-4">
            <div class="grid grid-cols-1 gap-6 md:gap-8 w-full max-w-4xl">
                <a href="{{ route('popularItem') }}">
                    <button
                        class="w-full bg-amber-500 hover:bg-amber-600 text-white py-4 px-6 md:px-8 rounded-lg flex items-center justify-center font-kanit text-lg md:text-xl transition-transform transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <i class="fa-solid fa-location-dot mr-3"></i>
                        ของที่หายบ่อย
                    </button>
                </a>
            </div>
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
                    <a href="{{ route('item.detail', ['id' => $card->id]) }}"
                        class="block mb-4  hover:shadow-xl transition duration-300 ease-in-out hover:-translate-y-2 ml-4 mr-4">
                        <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start ">
                            <img src="{{ asset($imagePath ?? 'path/to/default/image.jpg') }}" alt="{{ $card->type }}"
                                class="w-16 h-16 object-cover rounded-full mr-4">
                            <div>
                                <h3 class="text-lg font-semibold">บัตรนักศึกษา:</h3>
                                <p>ผู้แจ้ง: {{ $card->reporter_name }}</p>
                                <p>สถานที่: {{ $card->location }}</p>
                                <p>ติดต่อที่: {{ $card->contact ?? 'ไม่ระบุ' }}</p>
                                <button
                                    class="mt-2 bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด
                                </button>
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
            <p class="text-5xl font-kanit mb-8 text-center text-gray-900 -mt-6">กุญแจ</p>
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
                    <a href="{{ route('item.detail', ['id' => $key->id]) }}"
                        class="block mb-4  hover:shadow-xl transition duration-300 ease-in-out hover:-translate-y-2 ml-4 mr-4">
                        <div class="card bg-white rounded-lg shadow-lg p-4 flex items-start ">
                            <img src="{{ asset($imagePath ?? 'path/to/default/image.jpg') }}" alt="{{ $key->type }}"
                                class="w-16 h-16 object-cover rounded-full mr-4">
                            <div>
                                <h3 class="text-lg font-semibold">บัตรนักศึกษา:</h3>
                                <p>ผู้แจ้ง: {{ $key->reporter_name }}</p>
                                <p>สถานที่: {{ $key->location }}</p>
                                <p>ติดต่อที่: {{ $key->contact ?? 'ไม่ระบุ' }}</p>
                                <button
                                    class="mt-2 bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600">ดูรายละเอียด
                                </button>
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
    </main>

    @include('layouts.footer')
@endsection
