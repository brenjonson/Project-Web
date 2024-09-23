@extends('layouts.navbar')

@section('content')

    <header class="flex-grow">
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden mt-8">
                <div class="px-4 py-5 sm:px-6">
                    <h2 class="text-lg font-medium text-gray-900">Account Information</h2>
                    <p class="mt-1 text-sm text-gray-600">Manage your account details</p>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                    <dl class="sm:divide-y sm:divide-gray-200">
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Profile</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <img id="profileImage" src="{{ auth()->user()->profile_photo_url }}" alt="User Profile" class="w-16 h-16 rounded-full">
                                <input type="file" id="fileInput" name="profile_photo" class="mt-2 block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-orange-50 file:text-orange-700
                                        hover:file:bg-orange-100" accept="image/*">
                            </dd>
                        </div>

                        <!-- Username -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Username</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" name="name" value="{{ auth()->user()->name }}" placeholder="username"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </dd>
                        </div>

                        <!-- Email -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Email</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="email" name="email" value="{{ auth()->user()->email }}" placeholder="email"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Save
                        Changes</button>
                </div>
            </div>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ route('member') }}" class="text-blue-500 hover:text-blue-600">Back to Home</a>
        </div>
    </header>

    <script>
        const fileInput = document.getElementById('fileInput');
        const profileImage = document.getElementById('profileImage');

        fileInput.addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    profileImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    @include('layouts.footer')
@endsection
