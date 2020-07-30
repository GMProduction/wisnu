<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laporan Jadwal Detail</title>
    <!-- Fonts -->

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css" type="text/css">


</head>

<body>

<style>
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        height: 0;
    }
</style>

<br>
<div style="width:100%">
    <h4 class="text-center">Laporan Data Jadwal</h4>
</div>
<br>
<br>

<div class="card-body">
    <h2>
                    {{$kasus->tanggal}}
    </h2>
    {{--        <h6 class="heading-small text-muted mb-4">Data Pemohon</h6>--}}


    <div class="form-group">
        <label for="exampleInputEmail1">Data Pemohon</label>
        <div readonly class="form-control" id="exampleInputEmail1" style="height: 190px">
            <p style="margin-bottom: 0">Nama Pemohon : {{$kasus->jadwal->pemohon->pemohon->nama_pemohon}}</p>
            <p style="margin-bottom: 0">No Identitas : {{$kasus->jadwal->pemohon->pemohon->no_identitas}}</p>
            <p style="margin-bottom: 0">pekerjaan : {{$kasus->jadwal->pemohon->pemohon->pekerjaan}}</p>
            <p style="margin-bottom: 0">No. Telepon : {{$kasus->jadwal->pemohon->pemohon->no_telepon}}</p>
            <p style="margin-bottom: 0">
                TTL : {{$kasus->jadwal->pemohon->pemohon->tempat_lahir}}, {{$kasus->jadwal->pemohon->pemohon->tanggal_lahir}}</p>
            <p style="margin-bottom: 0">Email : {{$kasus->jadwal->pemohon->pemohon->email}}</p>
            <p style="margin-bottom: 0">Alamat : {{$kasus->jadwal->pemohon->pemohon->alamat}}</p>

        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Data Advokat</label>
        <div readonly class="form-control" id="exampleInputEmail1" style="height: 90px">
            <p style="margin-bottom: 0">Nama Advokat : {{$kasus->advokat->nama_advokat}}</p>
            <p style="margin-bottom: 0">No. Telepon : {{$kasus->advokat->no_telepon}}</p>
            <p style="margin-bottom: 0">Alamat : {{$kasus->advokat->alamat}}</p>

        </div>
    </div>


    <hr class="my-4"/>
    <h6 class="heading-small text-muted mb-4">Data Kasus</h6>


    <div class="form-group">
        <label for="exampleInputEmail1">No. Registras</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
            No.
            Registrasi : {{$kasus->jadwal->no_registrasi}}
        </a>
    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kasus</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
            Jenis Kasus {{$kasus->jadwal->jenis_kasus}}
        </a>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Layanan</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 30px">
            Layanan {{$kasus->jadwal->layanan}}
        </a>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Kronologi Kasus</label>
        <a readonly class="form-control" id="exampleInputEmail1" style="height: 50px">
            Kronologi Kasus {{$kasus->jadwal->kronologi_kasus}}
        </a>
    </div>

    <div class="card-header border-0">
        <h6 class="mb-0">Tabel Konsultasi</h6>
    </div>

    <div class="table-responsive">
        <table id="tabel" class="table align-items-center table-flush">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="name">#</th>
                <th scope="col" class="sort" data-sort="budget">Proses Konsultasi</th>
                <th scope="col" class="sort" data-sort="status">Detail Konsultasi</th>
            </tr>
            </thead>
            <tbody class="list">
            @forelse($kasus->konsultasi as $v)
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{$v->proses_konsultasi}}</td>
                    <td>{{$v->detail_konsultasi}}</td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="4">Belum ada data konsultasi</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <!-- Description -->

    </div>

</div>
<div style="right:10px;width: 300px;display: inline-block;margin-top:70px">
    <p class="text-center mb-5">Pimpinan</p>
    <p class="text-center">( ........................... )</p>
</div>

<div style="left:10px;width: 300px; margin-left : 100px;display: inline-block">
    <p class="text-center mb-5">Admin</p>
    <p class="text-center">(
                {{auth()->user()->username}}
        )</p>
</div>


<footer class="footer">
    @php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') ); @endphp
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> di cetak oleh :
                {{auth()->user()->username}}
    </p>
    <p class="text-right small mb-0 mt-0 pt-0 pb-0"> tgl: {{ $date->format('d F Y, H:i:s') }} </p>
</footer>

<!-- JS -->
<script src="js/app.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
