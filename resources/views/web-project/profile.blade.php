@extends('layouts.navbar')

@section('content')
    <header class="flex-grow">
        <form action="" class="">
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden mt-8">

                <!-- Account Information -->
                <div class="px-4 py-5 sm:px-6">
                    <h2 class="text-lg font-medium text-gray-900">Account Information</h2>
                    <img id="profileImage" src="{{ auth()->user()->profile_photo_url }}" alt="User Profile" class="w-16 h-16 rounded-full">
                    <div class="flex justify-end">
                        <a type="button" id="editProfile" href="{{ route('editProfile') }}" class="hover:underline rounded-xl">Edit
                            Profile</a>
                    </div>
                </div>

                <!-- User Details -->
                <div class="border-gray-200 px-4 py-5 sm:p-0">
                    <dl>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">User Details</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <!-- Additional user details can be added here -->
                            </dd>
                        </div>

                        <hr class="mt-4 border-t border-gray-200">

                        <!-- Username -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Username</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <p class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">
                                    {{ auth()->user()->name }}
                                </p>
                            </dd>
                        </div>

                        <!-- Email -->
                        <div class="py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Email</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <p class="block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">
                                    {{ auth()->user()->email }}
                                </p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>

            <!-- Found Items History -->
            <div class="mt-12 text-center pt-3">
                <p class="text-blue-500 hover:text-blue-600 font-kanit text-xl">ประวัติการแจ้งพบของ</p>
            </div>
        </form>
    </header>

    <main class="max-w-screen-xl mx-auto p-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

            @forelse($itemsForProfile->where('stage', 1) as $item)
                @php
                    $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                    $imagePath = null;
                    foreach ($imageExtensions as $ext) {
                        if (Storage::disk('public')->exists('uploads/' . $item->id . '-1.' . $ext)) {
                            $imagePath = 'storage/uploads/' . $item->id . '-1.' . $ext;
                            break;
                        }
                    }
                @endphp

                <div class="rounded overflow-hidden shadow-lg flex flex-col">
                    <!-- Image Section -->
                    <a href="{{ route('item.detail', ['id' => $item->id]) }}" class="relative">
                        <img class="w-full h-60 object-cover rounded-lg"
                            src="{{ asset($imagePath ?? 'storage/uploads/default.png') }}" alt="{{ $item->type }}">
                        <div class="hover:bg-transparent transition duration-300 absolute inset-0 bg-gray-900 opacity-25">
                        </div>
                        <div class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3">
                            "{{ $item->type }}"
                        </div>
                    </a>
                    <!-- Content Section -->
                    <div class="px-6 py-4 mb-auto">
                        <a href="{{ route('item.detail', ['id' => $item->id]) }}"
                            class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                            {{ $item->title }}
                        </a>
                        <p class="text-gray-500 text-sm">
                            {{ Str::limit($item->detail, 100) }}
                        </p>
                    </div>
                    <!-- Footer Section -->
                    <div class="px-6 py-3 flex items-center justify-between bg-gray-100">
                        <span class="py-1 text-xs text-gray-900 flex items-center">
                            <span class="ml-1"><i class="fa-solid fa-clock mr-1"></i>
                                {{ $item->created_at->diffForHumans() }}</span>
                        </span>

                        <div>
                            <a href="{{ url('edituploadFound/' . $item->id) }}">
                                <button
                                    class="rounded-md bg-purple-500 py-1 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-purple-700 focus:shadow-none active:bg-purple-700 hover:bg-purple-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                    type="button">
                                    <i class="fa-solid fa-pen mr-1"></i>Edit
                                </button>
                            </a>
                            <a href="{{ url('delete/' . $item->id) }}">
                                <button
                                    class="rounded-md bg-red-500 py-1 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                    type="button"
                                    onclick="return sure()">
                                    <i class="fa-solid fa-trash mr-1"></i> Deleted
                                </button>
                            </a>
                            <form action="{{ route('item.success', ['id' => $item->id]) }}" method="POST" class="inline">
                                @csrf
                                <button
                                    class="rounded-md bg-green-500 py-1 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                    type="submit"
                                    onclick="return confirm('Are you sure this item has been successfully returned?')">
                                    <i class="fa-solid fa-check mr-1"></i> Success
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-8">
                    <p class="text-2xl font-kanit text-gray-500">ไม่มีประวัติการแจ้งพบของ</p>
                </div>
            @endforelse

        </div>
    </main>

    <!-- Lost Items History -->
    <section>
        <div class="mt-12 text-center pt-3">
            <p class="text-blue-500 hover:text-blue-600 font-kanit text-xl">ประวัติการแจ้งค้นหาของ</p>
        </div>

        <div class="max-w-screen-xl mx-auto p-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

                @forelse($itemsForProfile->where('stage', 2) as $item)
                    @php
                        $imageExtensions = ['jpg', 'png', 'jpeg', 'gif'];
                        $imagePath = null;
                        foreach ($imageExtensions as $ext) {
                            if (Storage::disk('public')->exists('uploads/' . $item->id . '-1.' . $ext)) {
                                $imagePath = 'storage/uploads/' . $item->id . '-1.' . $ext;
                                break;
                            }
                        }
                    @endphp

                    <div class="rounded overflow-hidden shadow-lg flex flex-col">
                        <!-- Image Section -->
                        <a href="{{ route('item.detail', ['id' => $item->id]) }}" class="relative">
                            <img class="w-full h-60 object-cover rounded-lg"
                                src="{{ asset($imagePath ?? 'storage/uploads/default.png') }}" alt="{{ $item->type }}">
                            <div
                                class="hover:bg-transparent transition duration-300 absolute inset-0 bg-gray-900 opacity-25">
                            </div>
                            <div
                                class="font-kanit text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3">
                                "{{ $item->type }}"
                            </div>
                        </a>
                        <!-- Content Section -->
                        <div class="px-6 py-4 mb-auto">
                            <a href="{{ route('item.detail', ['id' => $item->id]) }}"
                                class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out mb-2 font-kanit">
                                {{ $item->title }}
                            </a>
                            <p class="text-gray-500 text-sm">
                                {{ Str::limit($item->detail, 100) }}
                            </p>
                        </div>
                        <!-- Footer Section -->
                        <div class="px-6 py-3 flex items-center justify-between bg-gray-100">
                            <span class="py-1 text-xs text-gray-900 flex items-center">
                                <span class="ml-1"><i
                                        class="fa-solid fa-clock mr-1"></i>{{ $item->created_at->diffForHumans() }}</span>
                            </span>

                            <div>
                                <a href="{{ url('edituploadFound/' . $item->id) }}">
                                    <button
                                        class="rounded-md bg-purple-500 py-1 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-purple-700 focus:shadow-none active:bg-purple-700 hover:bg-purple-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                        type="button">
                                        <i class="fa-solid fa-pen mr-1"></i>Edit
                                    </button>
                                </a>
                                <a href="{{ url('delete/' . $item->id) }}">
                                    <button
                                        class="rounded-md bg-red-500 py-1 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-red-700 focus:shadow-none active:bg-red-700 hover:bg-red-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                        type="button"
                                        onclick="return sure()">
                                        <i class="fa-solid fa-trash mr-1"></i> Deleted
                                    </button>
                                </a>
                                <form action="{{ route('item.success', ['id' => $item->id]) }}" method="POST" class="inline">
                                    @csrf
                                    <button
                                        class="rounded-md bg-green-500 py-1 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-green-700 focus:shadow-none active:bg-green-700 hover:bg-green-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                                        type="submit"
                                        onclick="return confirm('Are you sure this item has been successfully returned?')">
                                        <i class="fa-solid fa-check mr-1"></i> Success
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                @empty
                    <div class="col-span-3 text-center py-8">
                        <p class="text-2xl font-kanit text-gray-500">ไม่มีประวัติการแจ้งค้นหาของ</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('layouts.footer')
@endsection


<script>
    function sure() {
        return confirm("Are you sure you want to delete this post?");
    }
</script>
