<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- DisyUI --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    {{-- DisyUI --}}

    <!-- Add these links to your HTML file -->

    <title>Document</title>
</head>

<style>
    .gambar {
        /* background-image: url({{ url('/img/MenuBackground.png') }}); */
        background-size: cover;
    }
</style>

<body data-theme="cupcake">
    {{-- NAVBAR --}}
    @include('layout.navbar')
    {{-- NAVBAR --}}

    {{-- OUR MENU --}}
    <div class="h-full pt-[7em]">
        <div class="flex flex-col border-2 rounded-xl px-6 mx-32 py-4 mb-6">
            <div class="flex gap-4">
                <a href="/profile/profile">
                    <h1 class="font-semibold text-xl">Personal Profile</h1>
                </a>
                <a href="/profile/address">
                    <h1 class="font-semibold text-xl underline underline-offset-8">Address List</h1>
                </a>
                <a href="/profile/transaction">
                    <h1 class="font-semibold text-xl">Transaction List</h1>
                </a>
            </div>
            <div class="divider"></div>

            {{-- CONTENT --}}
            <div class="flex flex-col gap-3 pr-[4em]">
                <div class="w-[100%] h-full border-2 rounded-xl p-3 flex items-center gap-4">
                    <input type="radio" name="radio-1" class="radio" />
                    <div>
                        <h1 class="text-gray-400 font-bold">Rumah</h1>
                        <h1 class="text-xl font-bold">Kyandra Kusuma</h1>
                        <p class="text-gray-400">62123456789</p>
                        <p class="text-gray-400">Jl. Telekomunikasi. 1, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
                        <div class="flex gap-3">
                            <a class="text-[#D30606]" href="">Change Address</a>
                            <p class="text-gray-400">|</p>
                            <a class="text-[#D30606]" href="">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="w-[100%] h-full border-2 rounded-xl p-3 flex items-center gap-4">
                    <input type="radio" name="radio-1" class="radio" />
                    <div>
                        <h1 class="text-gray-400 font-bold">Kantor</h1>
                        <h1 class="text-xl font-bold">Kyandra Kusuma</h1>
                        <p class="text-gray-400">62123456789</p>
                        <p class="text-gray-400">Jl. Telekomunikasi. 1, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257</p>
                        <div class="flex gap-3">
                            <a class="text-[#D30606]" href="">Change Address</a>
                            <p class="text-gray-400">|</p>
                            <a class="text-[#D30606]" href="">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-end">
                    <button class="font-bold text-gray-400 border-2 rounded-xl p-2">+ Add New Address</button>
                </div>
            </div>
            {{-- CONTENT --}}
        </div>
    </div>
    {{-- FOOTER --}}
    @include('layout.footer');
    {{-- FOOTER --}}
</body>

</html>