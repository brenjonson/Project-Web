<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center flex-col items-center h-screen">
    <header name="logo">
        <div class="-mt-32">
            <img src="./img/3.png" alt="" class="w-80">
        </div>
    </header>

    <!-- Center Section -->
    <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
        <div class="w-full px-8 md:px-32 lg:px-24">
            <!-- Display Error Messages -->
            @if(session('fail'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ session('fail') }}</span>
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    <strong class="font-bold">Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="bg-white rounded-md shadow-2xl p-5" method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="text-gray-800 text-2xl mb-1 font-kanit">เข้าสู่ระบบ</h1>
                <p class="text-sm font-normal text-gray-600 mb-8">Welcome to KKU Forgot</p>

                <!-- Email Input -->
                <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input id="email" class="pl-2 w-full outline-none border-none" type="email" name="email" placeholder="Email Address" required />
                </div>

                <!-- Password Input -->
                <div class="flex items-center border-2 mb-4 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
                    </svg>
                    <input id="password" class="pl-2 w-full outline-none border-none" type="password" name="password" placeholder="Password" required />
                </div>

                <!-- Login Button -->
                <button type="submit" class="block w-full bg-orange-500 mt-5 py-2 rounded-2xl hover:bg-orange-600 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>

                <!-- Additional Links -->
                <div class="flex justify-between mt-4">
                    <a href="./register" class="text-sm ml-2 hover:text-orange-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
