@extends('user.base')
@section('content')

    <div class="main-content" id="panel">

        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
             style="min-height: 100px; background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-4 order-xl-2">
                    <div class="card card-profile">
                        <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="#">
                                        <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-5">

                            <div class="text-left">
                                <p class="mb-1">No Identitas</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>
                                <p class="mb-1">Nama</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Tempat Lahir</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Tanggal Lahir</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Alamat</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Jenis kelamin</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Pekerjaan</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Agama</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Kewarganegaraan</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Status</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">No. Telepon</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>

                                <p class="mb-1">Email</p>
                                <h6 class="h3 mb-4">
                                    data
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Edit profile </h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">Informasi Pemohon</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="noIdentitas">No.
                                                    Identitas</label>
                                                <input type="text" id="noIdentitas" name="noIdentitas"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="nama">Nama</label>
                                                <input type="text" id="nama" name="nama" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tempatLahir">Tempat Lahir</label>
                                                <input type="text" id="tempatLahir" name="tempatLahir"
                                                       class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggalLahir" class="form-control-label">Tanggal
                                                    Lahir</label>
                                                <input class="form-control" type="date" id="tanggalLahir"
                                                       name="tanggalLahir">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="alamat">Alamat</label>
                                                <input type="text" id="alamat" name="alamat" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="jenkel">Jenis kelamin</label>
                                                <select class="form-control" id="jenkel" name="jenkel">
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                                <input type="text" id="pekerjaan" name="pekerjaan" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katholik">Katholik</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="budha">Budha</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                                    <option value="wni">WNI</option>
                                                    <option value="wna">WNA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="belum kawin">Belum Kawin</option>
                                                    <option value="kawin">Kawin</option>
                                                    <option value="cerai mati">Cerai Mati</option>
                                                    <option value="cerai hidup">Cerai Hidup</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="notelp" class="form-control-label">No telepon</label>
                                                <input class="form-control" type="number" id="notelp"
                                                       name="notelp">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="email" class="form-control-label">Email</label>
                                                <input class="form-control" type="email" id="email"
                                                       name="email">
                                            </div>
                                        </div>
                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            <a href="#!" class="btn btn-lg btn-primary">Simpan</a>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('script')


@endsection
