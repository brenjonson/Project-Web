@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<nav class="bg-orange-700 ">
    <div class="container mx-auto p-5 py-2 flex justify-between">
        <div class="flex items-center">
            <img src="{{ asset('img/4.png') }}" alt="" class="w-28 h-auto max-w-full"> <!---Logo-->
        </div>


        <ul class="flex justify-end mt-3 text-xl space-x-4">
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">หน้าหลัก</a>
            </li>
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">ค้นหาของหาย</a>
            </li>
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">แจ้งของหาย</a>
            </li>
            <li>
                <a href="#"
                    class="px-4 text-white font-kanit hover:bg-brown-300 hover:text-gray-300 rounded transition duration-300 ease-in-out">พบของหาย</a>
            </li>
            <div>
                <button
                    class="font-extrabold text-sm px-4 py-3 ml-6 -mt-2 rounded-full text-white bg-orange-600 border-2 border-orange-600 hover:bg-white hover:text-orange-600 hover:border-orange-600 transition duration-300 ease-in-out shadow-lg transform hover:scale-105 flex items-center justify-center">
                    <a href="#" class="flex items-center justify-center">
                        <i class="fa-solid fa-user text-lg"></i>
                    </a>
                </button>
            </div>
        </ul>
    </div>
</nav>

<div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')
            {{-- <div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden mt-8">
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
                                <img id="profileImage" src=" " alt="User Profile" class="w-16 h-16 rounded-full">
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
            </div> --}}


            {{-- <x-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-button>
            <x-section-border /> --}}
        @endif



        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            <x-section-border />
        @endif

        {{-- @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-section-border />
            @endif --}}

        {{-- <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div> --}}




        {{-- @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif --}}
    </div>
</div>


<script>
    const fileInput = document.getElementById('fileInput');
    const profileImage = document.getElementById('profileImage');
    const uploadButton = document.getElementById('uploadButton');

    // Listen for the file input change event
    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Optional: you can add an event listener to the upload button if you want to handle the file upload separately
    uploadButton.addEventListener('click', function() {
        // Implement the file upload logic here if needed
        alert('Profile image updated!');
    });
</script>
