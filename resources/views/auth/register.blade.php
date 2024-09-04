<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex justify-center flex-col items-center h-screen">
    <header name="logo">
        <div class="-mt-20">
            <img src="./img/3.png" alt="Logo" class="w-80">
        </div>
    </header>

    <!-- Center Section -->
    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <form method="POST" action="{{ route('register') }}" class="bg-white rounded-md shadow-2xl p-5">
                @csrf
                <h1 class="text-gray-800 text-2xl mb-1 font-kanit">สมัครสมาชิค</h1>

                <div class="flex justify-between items-center">
                    <p class="text-sm font-normal text-gray-600 mb-8">Welcome to KKU Forgot</p>
                    {{-- <a href="#"
                        class="rounded-full flex justify-center items-center border border-gray-400 p-2 mb-4">
                        <i class="fab fa-google-plus-g text-lg text-gray-600"></i> <!---Logo google-->
                    </a> --}}
                </div>

                <!-- Username -->
                <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                            d="M12 4a4 4 0 110 8 4 4 0 010-8zm0 14c4.418 0 8-1.79 8-4v-1a1 1 0 00-1-1h-2a1 1 0 00-1 1v1c0 1.1-2.686 2-6 2s-6-.9-6-2v-1a1 1 0 00-1-1H5a1 1 0 00-1 1v1c0 2.21 3.582 4 8 4z" />
                    </svg>
                    <input id="name" class="pl-2 w-full outline-none border-none" type="text" name="name"
                        placeholder="Username" value="{{ old('name') }}" required autofocus />
                </div>

                <!-- Email Input -->
                <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input id="email" class="pl-2 w-full outline-none border-none" type="email" name="email"
                        placeholder="Email Address" value="{{ old('email') }}" required />
                </div>

                <!-- Password Input -->
                <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fillRule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clipRule="evenodd" />
                    </svg>
                    <input id="password" class="pl-2 w-full outline-none border-none" type="password" name="password"
                        placeholder="Password" required />
                </div>

                <!-- Confirm Password -->
                <div class="flex items-center border-2 mb-10 py-2 px-3 rounded-2xl mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fillRule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clipRule="evenodd" />
                    </svg>
                    <input id="password_confirmation" class="pl-2 w-full outline-none border-none" type="password"
                        name="password_confirmation" placeholder="Confirm Password" required />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />
                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' => '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>

                <button type="submit"
                    class="block w-full bg-orange-500 mt-5 py-2 rounded-2xl hover:bg-orange-600 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">
                    Register
                </button>
            </form>
        </div>
    </div>
</body>

</html>
