@extends('advokat.base')
@section('content')
    <style>
        .form-control[readonly] {
            background-color: white;
            color: black;
        }
    </style>
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Detail Jadwal</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/jadwal">Data Jadwal</a></li>
                                <li class="breadcrumb-item"><a href="#">Detail Jadwal</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/jadwal/cetakDetail/{{$kasus->id}}" class="btn btn-md btn-neutral">Cetak</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body">
                        <form>
                            <h6 class="heading-small text-muted mb-4">Jadwal</h6>
                            <h2>{{$kasus->tanggal}}</h2>
                            <hr class="my-4"/>
                            <h6 class="heading-small text-muted mb-4">Data Pemohon</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="namaPemohon">Nama Pemohon</label>
                                            <input readonly type="text" id="namaPemohon" name="namaPemohon" value="{{$kasus->jadwal->pemohon->pemohon->nama_pemohon}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="noIdentitas">No.
                                                Identitas</label>
                                            <input readonly type="text" id="noIdentitas" name="noIdentitas" value="{{$kasus->jadwal->pemohon->pemohon->no_identitas}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="pekerjaan">No.
                                                Identitas</label>
                                            <input readonly type="text" id="pekerjaan" name="pekerjaan" value="{{$kasus->jadwal->pemohon->pemohon->pekerjaan}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="hp">No. Telepon</label>
                                            <input readonly type="text" id="hp" name="hp" value="{{$kasus->jadwal->pemohon->pemohon->no_telepon}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="ttl">TTL</label>
                                            <input readonly type="text" id="ttl" name="ttl" value="{{$kasus->jadwal->pemohon->pemohon->tempat_lahir}}, {{$kasus->jadwal->pemohon->pemohon->tanggal_lahir}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="email">Email</label>
                                            <input readonly type="text" id="email" name="email" value="{{$kasus->jadwal->pemohon->pemohon->email}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="alamat">Alamat</label>
                                            <input readonly type="text" id="alamat" name="alamat" value="{{$kasus->jadwal->pemohon->pemohon->alamat}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4"/>

                            <h6 class="heading-small text-muted mb-4">Data Kasus</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="noRegistrasi">No.
                                                Registrasi</label>
                                            <input readonly type="text" id="noRegistrasi" name="noRegistrasi" value="{{$kasus->jadwal->no_registrasi}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="jeniskasus">Jenis Kasus</label>
                                            <input readonly type="text" id="jeniskasus" name="jeniskasus" class="form-control" value="{{$kasus->jadwal->jenis_kasus}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="konsultasi">Layanan</label>
                                            <input readonly type="text" id="layanan" name="layanan" class="form-control" value="{{$kasus->jadwal->layanan}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kronologi">Kronologi Kasus</label>
                                            <textarea readonly id="kronologi" name="kronologi" class="form-control">{{$kasus->jadwal->kronologi_kasus}}</textarea>
                                        </div>
                                    </div>

                                    @if($kasus->jadwal->image)
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-control-label" for="kronologi">Kronologi Kasus</label><br>
                                            <img src="{{asset('uploads/bukti')}}/{{$kasus->jadwal->image}}" height="200">
                                        </div>
                                        @endif

                                    <hr class="my-4"/>
                                    <!-- Description -->

                                </div>
                            </div>

                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <a href="/advokat/jadwal" class="btn btn-lg btn-primary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection

@section('script')


@endsection