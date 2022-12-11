@extends('pages.admin.layoutadmin.main')
@section('content')
    <form methode="POST" action="">
        {{ csrf_field() }}
        <table class="table table-bordered table-striped table-responsive" id="example1">
            <thead>
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">PENGETAHUAN</th>
                    <th scope="col">KELUHAN</th>
                    <th scope="col">STATUS</th>
                </tr>
            </thead>

            <tbody>
                {{-- @foreach ($dataProdi as $item) --}}
                {{-- <tr>
                    <td>1</td>
                    <td>17/07/2000</td>
                    <td>12345678</td>
                    <td>aulia</td>
                    <td>10%</td>
                    <td>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                        </ul>
                    </td>
                    <td>keren</td>
                </tr> --}}

                {{-- @endforeach --}}

                @foreach($laporan as $lprn)
                    <td>0</td>
                    <td>{{ $lprn->created_at }}</td>
                    <td>{{ $lprn->nik }}</td>
                    <td>{{ $lprn->nama }}</td>
                    <td>{{ $lprn->hasil_quisioner }} %</td>
                    <td>
                        <ul>
                            {{-- @php
                                $nilai = -1;
                                $pieces = explode(" ", $lprn->hasil_keluhan)
                            @endphp
                            @foreach($daftar_keluhan as $klhn)
                            @if ($pieces[$nilai+1] != ' ') {

                            }
                            @endif --}}
                            {{-- @if($pieces[$nilai])
                           
                            @endif --}}
                                <li>{{ $lprn->hasil_keluhan }} </li>
{{-- 
                                @php
                                    $nilai++
                                @endphp --}}
                            {{-- @endforeach --}}
                        </ul>
                    </td>
                    <td>keren</td>
                @endforeach
            </tbody>
        </table>
    @endsection
