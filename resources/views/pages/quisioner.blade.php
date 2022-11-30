<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quisioner</title>
    @vite('../resources/css/app.css')
</head>

<body>
    <div class="h-screen bg-red-100 flex justify-center">
        <div class="max-w-screen-xl h-screen w-full flex flex-col items-center">
            <!-- NAVBAR SECTION -->
            <div class="flex justify-between w-full items-center h-max mt-16 px-20">
                <img style="width:100px ; height:60px" src="../assets/img/logo.png" alt="sadari">
                <h1>KUIOSIONER #1</h1>
                <div>
                    x
                </div>
            </div>

            <!-- QUESTION SECTION -->
            <div class="p-2  xxs:w-96  ">
                <div>

                    <?php

                    $days = [
                        ['dow' => 1, 'question' => 'Apakah mas agat ganteng?'],
                        ['dow' => 2, 'question' => 'Apakah mas agat keren?'],
                        ['dow' => 3, 'question' => 'mas agat wangi banget yaa hehe?'],
                        ['dow' => 4, 'question' => 'Benarkah mas agat hebat?'],
                        ['dow' => 5, 'question' => 'Mas agat akan pergi keliling duni?'],
                        ['dow' => 6, 'question' => 'Mas agat Pengen boba?'],
                        ['dow' => 7, 'question' => 'Mas agat Pengen es krim?'],
                        ['dow' => 7, 'question' => 'Mas agat Pengen es bakso?'],
                        ['dow' => 7, 'question' => 'Mas agat Pengen es jajan?'],
                    ];
                    $msg = 2
                    ?>
                    <div class="flex justify-center py-20">
                        <h1 class="text-center text-2xl">{!! $days[$msg]['question'] !!}</h1>
                    </div>



                    <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                        <p onclick="setValueNik()" class="px-4">A</p>
                        <input placeholder="Email" disabled value="Ya" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                    </div>
                    <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                        <p onclick="setValueNik()" class="px-4">B</p>
                        <input placeholder="Email" disabled value="Iya si" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />
                    </div>
                    <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                        <p onclick="setValueNik()" class="px-4">C</p>
                        <input placeholder="Email" disabled value="njirr bener banget" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" />

                    </div>

                </div>
            </div>
        </div>

        <div class="h-20 fixed bottom-0 left-0 right-0 bg-white flex justify-center">
            <div class="max-w-screen-xl w-full  flex justify-evenly items-center">
                <div class="flex items-center">
                    <div class="w-36 h-3 bg-blue-400 rounded-lg">
                        <div class="w-1/2 h-3 bg-blue-700 rounded-lg">

                        </div>
                    </div>
                    <span class="px-2">6/12</span>
                </div>
                <div>
                    <button onclick="runMyFunction()" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Next</button>
                </div>

            </div>
        </div>
    </div>
    <script>
        // NOTE: JSON FORMATER
        const runMyFunction = () => {
            alert('sd')
        }
    </script>
</body>

</html>