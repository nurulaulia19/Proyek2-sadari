<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="flex min-h-screen">
        <div class="flex">
            <div class="h-100 fixed">
                <div class="d-flex h-screen flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-4">Sidebar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#home"></use>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table"></use>
                                </svg>
                                Orders
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#grid"></use>
                                </svg>
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                                Customers
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong>mdo</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w-72 bg-blue-300 ">
                <!-- THIS IS JUST FOR GAP -->
            </div>
        </div>
        <div class="w-full h-screen bg-blue-100">
            <!-- Start Header -->
            <div class="bg-red-200 w-full h-screen-10vh">
            </div>
            <!-- End Header -->


            <!-- Start Content -->


            <div class=" flex bg-green-200 justify-center items-center w-full h-screen-90vh">

                <!-- START BELUM PERNAH -->
                @foreach ($result_quisioner as $hasil)
                @if ($hasil->user_id == Auth::user()->id)
                <?php
                $state = 'data ditemukan';
                ?>
                @break
                @else
                <?php
                $state = 'data tidak ditemukan'
                ?>
                @endif
                @endforeach

                @if ($state == 'data ditemukan')
                <div class=" flex flex-col items-center">
                    <img style="width:100px ; height:60px" src="../assets/img/personal_info.png" alt="sadari">

                    <div>
                        ----------
                    </div>
                    <p>{{ $state }}</p>
                    <p>Nama : {{ Auth::user()->name }}</p>
                    <p>Hasil : {{ $hasil->hasil }}</p>
                </div>
                @else
                <!-- START UDAH PERNAH -->
                <div class=" flex flex-col items-center">

                    <img style="width:100px ; height:60px" src="../assets/img/no_data.png" alt="sadari">
                    <div class="bg-red-200">
                        <h1 class="text-center">Anda belum melakukan Cek</h1>
                    </div>
                    <a href="/quisioner">
                        <button type="button" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white w-full">Cek dulu yuk</button>
                    </a>

                    <!-- <div>
                        ----------
                    </div>
                    <p>{{ $state }}</p>
                    <p>Nama : {{ Auth::user()->name }}</p>
                    <p>Hasil : {{ $hasil->hasil }}</p> -->
                </div>
                <!-- END UDAH PERNAH -->
                @endif


                <!-- END BELUM PERNAH -->


            </div>
            <!-- End Content -->
        </div>
    </div>
</body>

</html>