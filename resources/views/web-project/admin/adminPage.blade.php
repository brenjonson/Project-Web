<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Popper -->
    <!-- Main Styling -->
    @vite('resources/css/app.css')
    @vite('resources/css/soft-ui-dashboard-tailwind.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .custom-button {
            width: 3rem;
            height: 3rem;
            text-align: center;
            border-radius: 0.5rem;
            background: linear-gradient(to right, #8b5cf6, #ec4899);
            transition: all 0.3s;
        }

        .custom-button:hover {
            background: linear-gradient(to right, #ec4899, #8b5cf6);
        }

        .custom-button i {
            color: white;
            font-size: 1.25rem;
            position: relative;
            top: 0.875rem;
        }
    </style>

</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <!-- sidenav-->
    <aside
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700 " href="/admin">
                <img src="{{ asset('img/3.png') }}"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
                    alt="main_logo" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">KKU ของหาย</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors"
                        href="#">
                        <div
                            class="bg-white shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg  bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-shop text-black"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>

                <li class="w-full mt-4">
                    <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors"
                        href="{{ route('adminProfile') }}">
                        <div
                            class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-user text-black"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                    </a>
                </li>
            </ul>
            <div class="mx-4">
                <!-- load phantom colors for card after: -->
                <!-- pro btn  -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="inline-block w-full px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg shadow-soft-md bg-150 bg-x-25 leading-pro bg-white hover:shadow-soft-2xl hover:scale-102">
                        <span class="text-black">Logout</span>
                    </button>
                </form>
            </div>
        </div>



    </aside>
    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start"
            navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>

                    <h6
                        class="mb-0 font-bold capitalize inline-block w-full px-6 py-3 my-4  text-center   align-middle transition-all ease-in border-0 rounded-lg shadow-soft-md bg-150 bg-x-25 leading-pro bg-white hover:shadow-soft-2xl hover:scale-102">
                        Dashboard
                    </h6>
                </nav>

                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                        <form action="{{ url('/admin') }}" method="GET" class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                            <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" name="search" value="{{ $search ?? '' }}" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Search for items..." />
                            <button type="submit" class="ml-2 inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl from-orange-700 to-red-500 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->

            <div class="w-full px-6 py-6 mx-auto flex flex-col ">
                <!-- Items Table -->
                <div class="w-full px-6 py-6 mx-auto">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex-none w-full max-w-full px-3">
                            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                    <h6 class="text-xl font-semibold">Items</h6>
                                    @if(isset($search))
                                        <p class="text-sm text-gray-600">Search results for: "{{ $search }}"</p>
                                    @endif
                                </div>
                                <div class="flex-auto px-0 pt-0 pb-2">
                                    <div class="p-0 overflow-x-auto">
                                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                            <thead class="align-bottom">
                                                <tr>
                                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Item</th>
                                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Reporter</th>
                                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Location</th>
                                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($itemsForAdmin as $item)
                                                    <tr>
                                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <div class="flex px-2 py-1">
                                                                <div>
                                                                    <img src="{{ asset('storage/uploads/' . json_decode($item->img_path)[0]) }}" class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl" alt="user1" />
                                                                </div>
                                                                <div class="flex flex-col justify-center">
                                                                    <h6 class="mb-0 leading-normal text-sm">{{ $item->item }}</h6>
                                                                    <p class="mb-0 leading-tight text-sm text-slate-400">{{ $item->type }}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <p class="mb-0 font-semibold leading-tight text-sm">{{ $item->reporter_name }}</p>
                                                        </td>
                                                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <p class="mb-0 font-semibold leading-tight text-sm">{{ $item->location }}</p>
                                                        </td>
                                                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-sm rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">
                                                                @if($item->stage == 1)
                                                                    Found
                                                                @elseif($item->stage == 2)
                                                                    Lost
                                                                @else
                                                                    Returned
                                                                @endif
                                                            </span>
                                                        </td>
                                                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <a href="{{ route('item.detail', ['id' => $item->id]) }}" class="font-bold leading-tight text-sm text-slate-400"> View </a>
                                                            <a href="{{ url('/delete/'.$item->id) }}" class="font-bold leading-tight text-sm text-red-400 ml-2">
                                                                <button
                                                                    class="rounded-md py-2 px-4 border bg-red-600 hover:bg-gray-200 transition duration-200 ease-in-out"
                                                                    type="button"
                                                                    onclick="return sure()">
                                                                    <i class="fa-solid fa-trash mr-1"></i> Deleted
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="5" class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                            <p class="mb-0 font-semibold leading-tight text-xs">No items found</p>
                                                        </td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

        <footer class="pt-4">
            <div class="w-full px-6 mx-auto">
                <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                    <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                        <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                            ©
                            <script>
                                document.write(new Date().getFullYear() + ",");
                            </script>
                            made with by
                            <a href="https://www.instagram.com/int_main_xivbug/" class="font-semibold text-slate-700"
                                target="_blank">Podium X Disabled</a>

                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                        <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                            <li class="nav-item">
                                <a href="https://www.instagram.com/int_main_xivbug/"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">Podium X Disabled</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.instagram.com/int_main_xivbug/"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                    class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"
                                    class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        </div>
    </main>

    <script>
        function sure() {
            return confirm("Are you sure you want to delete this post?");
        }
    </script>

</body>


</html>
