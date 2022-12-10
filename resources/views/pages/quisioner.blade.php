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
                <form id="form-pengetahuan" action="{{ route('resultquisioner.store') }}" method="POST">
                    @csrf


                    @foreach ($dataPertanyaan as $value )
                    <div id="{{ $value->id }}" style="display: none;">
                        <div class="flex justify-center py-20">
                            <h1 id="q-list" class="text-center text-2xl">{{ $value->pertanyaan }}</h1>
                        </div>
                        <input style="display: none;" type="text" name="user_id" value="{{ Auth::user()->id }}">
                        <div>
                            <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                <input class="inputan" type="radio" id="a{{ $value->id }}" name="q{{ $value->id }}" value="a">
                                <label class="w-full" for="a{{ $value->id }}">{{ $value->opsi1}}</label><br>
                            </div>
                            <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                <input class="inputan" type="radio" id="b{{ $value->id }}" name="q{{ $value->id }}" value="b">
                                <label class="w-full" for="b{{ $value->id }}">{{ $value->opsi2}}</label><br>
                            </div>
                            <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                <input class="inputan" type="radio" id="c{{ $value->id }}" name="q{{ $value->id }}" value="c">
                                <label class="w-full" for="c{{ $value->id }}">{{ $value->opsi3}}</label>
                            </div>
                            <div class="flex items-center mt-4 bg-white border border-slate-300 border border-slate-300  rounded-lg">
                                <input class="inputan" type="radio" id="d{{ $value->id }}" name="q{{ $value->id }}" value="d">
                                <label class="w-full" for="d{{ $value->id }}">{{ $value->opsi4}}</label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div id="11" style="display: none;" class="table-responsive">
                        <h2>Centang keluhan yang ada alami dibawah ini:</h2>
                        <input style="display: none;" type="text" name="user_id" value="{{ Auth::user()->id }}">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody>
                                @foreach ($dataKeluhan as $keluhan)
                                <tr>
                                    <td>{{ $keluhan->id }}</td>
                                    <td>
                                        {{ $keluhan->keluhan }}
                                    </td>
                                    <td>
                                        <input class="myCheckBox" id="check{{$keluhan->id}}" type="checkbox" name="a{{$keluhan->id}}" value="{{ $keluhan->id }}">
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <input type="hidden" name="jumlah" value="6">
                        <!-- <button type="submit" id="btn-keluhan" class="btn btn-success">SIMPAN</button> -->
                    </div>

                    <div onclick="kirim()" id="sendNow" class="py-4" style="display: none;">
                        <button class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Kirim Sekarang</button>
                    </div>

                </form>
                <!-- <div id="11" style="display: none;" class="table-responsive">
                    <h2>Centang keluhan yang ada alami dibawah ini:</h2>

                    <form name="form-kuisioner" method="POST" id="form-kuesioner" action="{{ route('resultkeluhan.store') }}">
                        @csrf
                        <input style="display: none;" type="text" name="user_id" value="{{ Auth::user()->id }}">
                        <table class="table table-striped table-bordered table-hover">
                            <tbody>
                                @foreach ($dataKeluhan as $keluhan)
                                <tr>
                                    <td>{{ $keluhan->id }}</td>
                                    <td>
                                        {{ $keluhan->keluhan }}
                                    </td>
                                    <td>
                                        <input class="myCheckBox" id="check{{$keluhan->id}}" type="checkbox" name="a{{$keluhan->id}}" value="{{ $keluhan->id }}">
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <input type="hidden" name="jumlah" value="6">
                        <button type="submit" id="btn-keluhan" class="btn btn-success">SIMPAN</button>
                    </form>
                </div> -->

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
                <button for='form-kuesioner' id='btn' onclick="runMyFunction()" class="bg-blue-600 font-bold py-2 px-4 rounded-xl text-white">Next</button>
            </div>

        </div>
    </div>
    </div>
    <script>
        document.getElementById('1').style.display = "block";
        //  NOTE: DATA QUESTION


        let banyak = 1
        console.log('banyak', banyak)
        const runMyFunction = () => {

            banyak += 1;
            document.getElementById('angka').innerHTML = banyak;
            if (banyak == 11) {
                document.getElementById('sendNow').style.display = 'block'
            }
            console.log('banyak', banyak);
            switch (banyak) {
                case 1:
                    // alert('welcome')
                    document.getElementById(`1`).style.display = 'block';
                    document.getElementById(`2`).style.display = 'none';
                    break;
                case 2:
                    // alert('case 2')
                    document.getElementById(`1`).style.display = 'none';
                    document.getElementById(`2`).style.display = 'block';
                    document.getElementById(`3`).style.display = 'none';
                    break;
                case 3:
                    document.getElementById(`2`).style.display = 'none';
                    document.getElementById(`3`).style.display = 'block';
                    document.getElementById(`4`).style.display = 'none';
                    break;
                case 4:
                    document.getElementById(`3`).style.display = 'none';
                    document.getElementById(`4`).style.display = 'block';
                    document.getElementById(`5`).style.display = 'none';
                    break;
                case 5:
                    document.getElementById(`4`).style.display = 'none';
                    document.getElementById(`5`).style.display = 'block';
                    document.getElementById(`6`).style.display = 'none';
                    break;
                case 6:
                    document.getElementById(`5`).style.display = 'none';
                    document.getElementById(`6`).style.display = 'block';
                    document.getElementById(`7`).style.display = 'none';
                    break;
                case 7:
                    document.getElementById(`6`).style.display = 'none';
                    document.getElementById(`7`).style.display = 'block';
                    document.getElementById(`8`).style.display = 'none';
                    break;
                case 8:
                    document.getElementById(`7`).style.display = 'none';
                    document.getElementById(`8`).style.display = 'block';
                    document.getElementById(`9`).style.display = 'none';
                    break;
                case 9:
                    document.getElementById(`8`).style.display = 'none';
                    document.getElementById(`9`).style.display = 'block';
                    document.getElementById(`10`).style.display = 'none';
                    break;
                case 10:
                    document.getElementById(`9`).style.display = 'none';
                    document.getElementById(`10`).style.display = 'block';
                    document.getElementById(`11`).style.display = 'none';
                    break;
                case 11:
                    document.getElementById(`10`).style.display = 'none';
                    document.getElementById(`11`).style.display = 'block';
                    document.getElementById(`1`).style.display = 'none';
                    break;
                default:
                    // document.getElementById(`q${banyak}`).style.display = 'none';
                    break;
            }
        }
        // const togel = document.getElementById('check7');
        const togel = document.querySelector("input[name=a7]");;
        togel.addEventListener('change', () => {
            document.getElementById('check1').checked = false;
            document.getElementById('check2').checked = false;
            document.getElementById('check3').checked = false;
            document.getElementById('check4').checked = false;
            document.getElementById('check5').checked = false;
            document.getElementById('check6').checked = false;
        })
        for (let index = 1; index < 7; index++) {
            document.querySelector(`input[name=a${index}]`).addEventListener('change', () => {
                document.getElementById('check7').checked = false;
            })
        }

        const form1 = document.getElementById('form-pengetahuan')

        form1.addEventListener('submit', function(e) {
            e.preventDefault()
        })
        const kirim = async () => {
            // alert('heai')
            await form1.submit()
            // form2.submit()
        }
    </script>

</body>

</html>