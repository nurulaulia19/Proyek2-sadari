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
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    @endsection
