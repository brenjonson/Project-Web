@extends('layouts.navbar')

@section('content')
    <header class="flex-grow">
        <form action="" class="">
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
                                <!-- Display the uploaded image -->
                                <img id="profileImage" src="  " alt="User Profile" class="w-16 h-16 rounded-full">
                                <input type="file" id="fileInput"
                                    class="mt-2 block w-full text-sm text-gray-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-orange-50 file:text-orange-700
                                    hover:file:bg-orange-100"
                                    accept="image/*">
                                <button type="button" id="uploadButton"
                                    class="mt-2 bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Change
                                    Profile</button>
                            </dd>
                        </div>

                        <!-- Username -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Username</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="text" value="" placeholder="username"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </dd>
                        </div>

                        <!-- Email -->
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">Email</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="email" value="" placeholder="email"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </dd>
                        </div>
                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">DD/MM/YY</dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                <input type="date" value=""
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </dd>
                        </div>
                    </dl>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">Save
                        Changes</button>
                </div>
            </div>
            <div class="mt-4 text-center">
                <a href="member.html" class="text-blue-500 hover:text-blue-600">Back to Home</a>
            </div>
        </form>
    </header>

    @include('layouts/footer')
@endsection