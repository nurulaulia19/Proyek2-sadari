<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quisioner</title>
    @vite('../resources/css/app.css')
    @vite('../resources/js/quisionerHandler.js')
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
                <form method="POST">
                    <div class="flex justify-center py-20">
                        <h1 id="q-list" class="text-center text-2xl">mas agat ganteng?</h1>
                    </div>

                    <div>
                        <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                            <input type="radio" id="selalu" name="fav_language" value="selalu">
                            <label class="w-full" for="selalu">SELALU</label><br>
                        </div>
                        <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                            <input type="radio" id="sering" name="fav_language" value="sering">
                            <label class="w-full" for="sering">SERING</label><br>
                        </div>
                        <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                            <input type="radio" id="jarang" name="fav_language" value="jarang">
                            <label class="w-full" for="jarang">JARANG</label>
                        </div>
                        <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                            <input type="radio" id="tidak pernah" name="fav_language" value="tidak pernah">
                            <!-- <input disabled value="njirr bener banget" type="text" class=" block w-full px-3 py-2  border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 focus:invalid:border-pink-500 focus:invalid:ring-pink-500" /> -->
                            <label class="w-full" for="tidak pernah">TIDAK PERNAH</label>
                        </div>
                    </div>


                </form>

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
                <span id="angka" class="px-2">1</span>/ 12
            </div>
            <div>
                <button onclick="runMyFunction()" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Next</button>
            </div>

        </div>
    </div>
    </div>
    <script>
        //  NOTE: DATA QUESTION
        let daftarPertanyaan = [
            'mas agat ganteng?',
            'mas agat ganteng? 1',
            'mas agat ganteng? 2',
            'mas agat ganteng? 3',
            'mas agat ganteng? 4',
            'mas agat ganteng? 6 ',
            'mas agat ganteng? 7',
        ];
        let q1, q2, q3, q4, q5, q6, q7, q8 = '';

        let banyak = 1
        const runMyFunction = () => {
            banyak += 1;
            const gantiAngka = document.getElementById('angka')
            const qList = document.getElementById('q-list');
            qList.innerHTML = daftarPertanyaan[banyak]
            gantiAngka.innerHTML = banyak
        }
    </script>

</body>

</html>