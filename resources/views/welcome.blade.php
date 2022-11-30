<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-screen bg-red-100">

        <div class=" lg:flex lg:justify-center lg:items-center ">
            <div class="h-screen-10vh lg:hidden">
                // this is just for gap
            </div>
            @include('layouts.navbar')

            <div class="max-w-screen-xl  w-full lg:flex ">
                <div class="h-screen/2  flex justify-center lg:h-screen lg:w-3/5">
                    <img src="../assets/img/gambar.png" alt="sadari" />
                </div>
                <div class="h-screen-40vh lg:h-screen flex justify-center items-center lg:w-2/5">
                    <div class="flex flex-col items-center">
                        <p class="font-bold text-center text-2xl">
                            AYO<br />
                            PERIKSA PAYUDARA SENDIRI
                        </p>
                        <p>Deteksi dini kanker payudara</p>
                        <div class="flex justify-center mt-4">
                            <button class=" bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Go Sadari</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- information -->
    <div class="min-h-screen ">
        <div>
            <!-- Hero Image -->
            <div class="p-4 flex justify-center">
                <img src="../assets/img/sadari.png" alt="sadari" />
            </div>
            <!-- Text Info -->
            <div class="-200 p-4">
                <p>Pemeriksaan payudara sendiri (SADARI) adalah cara termudah untuk medeteksi kelaian pada ukuran, tekstur, serta bentukk payudara. Pemeriksaan ini juga bisa membantu deteksi dini kanker payudara, sehingga, Lalu, bagaimana SADARI dilakukan? Adakah tes lainya untuk mendeteksi dini kanker payudara?</p>
                <div class="flex justify-center mt-4">
                    <button class=" bg-blue-600  py-2 px-4 rounded-xl text-gray-300">Info lebih lanjut</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>