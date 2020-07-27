<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan IKS</title>
    <!-- Fonts -->

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" type="text/css">


</head>

<body>

<style>
    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 0cm;
    }
</style>

<br>
<div style="width:100%">
    <h4 class="text-center">Laporan Data Advokat</h4>
    <p class="text-center text-black-50">Tanggal awal - Tanggal ahkir</p>
</div>
<br>
<br>

<table class="table table-striped">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Advokat</th>
        <th scope="col">Alamat</th>
        <th scope="col">TTL</th>
        <th scope="col">Hp</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody class="list">
    @foreach($advokats as $a)
        <tr>
            <td>{{ $loop->index + 1}}</td>
            <td>{{$a->nama_advokat}}</td>
            <td>{{$a->alamat}}</td>
            <td>{{$a->tempat_lahir}}, {{$a->tanggal_lahir}}</td>
            <td>{{$a->no_telepon}}</td>
            <td>{{$a->email}}</td>

        </tr>
    @endforeach
</table>
<div style="right:10px;width: 300px;display: inline-block;margin-top:70px">
    <p class="text-center mb-5">Pimpinan</p>
    <p class="text-center">( ........................... )</p>
</div>

<div style="left:10px;width: 300px; margin-left : 100px;display: inline-block">
    <p class="text-center mb-5">Admin</p>
    <p class="text-center">(
{{--        {{auth()->user()->username}}--}}
        )</p>
</div>


<footer class="footer">
    @php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') ); @endphp
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> di cetak oleh :
{{--        {{auth()->user()->username}}--}}
    </p>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> tgl: {{ $date->format('d F Y, H:i:s') }} </p>
</footer>

<!-- JS -->
<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
