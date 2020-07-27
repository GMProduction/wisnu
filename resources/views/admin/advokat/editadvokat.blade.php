@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Advokat</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/advokat">Data Advokat</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
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
                        <form method="post" action="">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            @foreach($advokats as $a)
                                <input id="id" name="id" value="{{$a->id}}" hidden>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="keteranganJadwal" for="namaAdvokat">Nama Advokat</label>
                                                <input type="text" id="namaAdvokat" name="namaAdvokat"  value="{{$a->nama_advokat}}"
                                                       class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="keteranganJadwal" for="alamat">Alamat</label>
                                                <input type="text" id="alamat" name="alamat" value="{{$a->alamat}}"
                                                       class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tempatLahir">Tempat Lahir</label>
                                                <input type="text" id="tempatLahir" name="tempatLahir" value="{{$a->tempat_lahir}}"
                                                       class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggalLahir" class="form-control-label">Tanggal
                                                    Lahir</label>
                                                <input class="form-control" type="date" id="tanggalLahir" value="{{$a->tanggal_lahir}}"
                                                       name="tanggalLahir" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="notelp" class="form-control-label">No telepon</label>
                                                <input class="form-control" type="number" id="notelp" value="{{$a->no_telepon}}"
                                                       name="notelp" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email" class="form-control-label">Email</label>
                                                <input class="form-control" type="email" id="email" value="{{$a->email}}"
                                                       name="email" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" href="#!" class="btn btn-lg btn-primary">Edit</button>
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
