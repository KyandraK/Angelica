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
                    <h1 class="font-semibold text-xl">Address List</h1>
                </a>
                <a href="/profile/transaction">
                    <h1 class="font-semibold text-xl underline underline-offset-8">Transaction List</h1>
                </a>
            </div>
            <div class="divider"></div>

            {{-- CONTENT --}}
            <div class="flex flex-col gap-3 pr-[4em]">
                <div class="w-[100%] h-full flex flex-col border-2 rounded-xl p-3 flex items-center gap-4">
                    <div class="flex w-full justify-between">
                        <div class="flex gap-4">
                            <h1 class="text-gray-400">Order Number : <span
                                    class="font-bold text-gray-600">#ORD12345</span></h1>
                            <h1 class="bg-[#D2EEC5] text-[#4CBB17] font-bold px-3 rounded-lg">Success</h1>
                        </div>
                        <p class="text-gray-400">21-11-2023</p>
                    </div>
                    <div class="divider -my-[10px]"></div>
                    <div class="flex w-full justify-between">
                        <div class="flex gap-4">
                            <img src={{ asset('/img/Menu_makanan.png') }} alt=""
                                class="object-cover h-[10rem] rounded-xl">
                            <div>
                                <h1 class="font-bold text-2xl">Nasi Kotak</h1>
                                <p class="text-gray-400">x2</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-center pr-[5em]">
                            <div class="divider divider-horizontal my-auto h-[60%]"></div>
                            <div>
                                <p class="text-gray-400">Total Amount</p>
                                <h1 class="font-bold text-xl">Rp60.000</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[100%] h-full flex flex-col border-2 rounded-xl p-3 flex items-center gap-4">
                    <div class="flex w-full justify-between">
                        <div class="flex gap-4">
                            <h1 class="text-gray-400">Order Number : <span
                                    class="font-bold text-gray-600">#ORD12345</span></h1>
                            <h1 class="bg-[#FCE6D1] text-[#F29A48] font-bold px-3 rounded-lg">Processing</h1>
                        </div>
                        <p class="text-gray-400">21-11-2023</p>
                    </div>
                    <div class="divider -my-[10px]"></div>
                    <div class="flex w-full justify-between">
                        <div class="flex gap-4">
                            <img src={{ asset('/img/Menu_makanan.png') }} alt=""
                                class="object-cover h-[10rem] rounded-xl">
                            <div>
                                <h1 class="font-bold text-2xl">Nasi Kotak</h1>
                                <p class="text-gray-400">x2</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-center pr-[5em]">
                            <div class="divider divider-horizontal my-auto h-[60%]"></div>
                            <div>
                                <p class="text-gray-400">Total Amount</p>
                                <h1 class="font-bold text-xl">Rp60.000</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-[100%] h-full flex flex-col border-2 rounded-xl p-3 flex items-center gap-4">
                    <div class="flex w-full justify-between">
                        <div class="flex gap-4">
                            <h1 class="text-gray-400">Order Number : <span
                                    class="font-bold text-gray-600">#ORD12345</span></h1>
                            <h1 class="bg-[#FCD2D2] text-[#F54C4C] font-bold px-3 rounded-lg">Failed</h1>
                        </div>
                        <p class="text-gray-400">21-11-2023</p>
                    </div>
                    <div class="divider -my-[10px]"></div>
                    <div class="flex w-full justify-between">
                        <div class="flex gap-4">
                            <img src={{ asset('/img/Menu_makanan.png') }} alt=""
                                class="object-cover h-[10rem] rounded-xl">
                            <div>
                                <h1 class="font-bold text-2xl">Nasi Kotak</h1>
                                <p class="text-gray-400">x2</p>
                            </div>
                        </div>
                        <div class="flex gap-6 items-center pr-[5em]">
                            <div class="divider divider-horizontal my-auto h-[60%]"></div>
                            <div>
                                <p class="text-gray-400">Total Amount</p>
                                <h1 class="font-bold text-xl">Rp60.000</h1>
                            </div>
                        </div>
                    </div>
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
