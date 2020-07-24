@extends('admin.base')
@section('content')

    <!-- Page content -->
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
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Detail Kasus </h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="noRegistrasi">No.
                                                    Registrasi</label>
                                                <input readonly type="text" id="noRegistrasi" name="noRegistrasi"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="noIdentitas">No.
                                                    Identitas</label>
                                                <input readonly type="text" id="noIdentitas" name="noIdentitas"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="nama">Nama</label>
                                                <input readonly type="text" id="nama" name="nama" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="jeniskasus">Jenis Kasus</label>
                                                <input readonly type="text" id="jeniskasus" name="jeniskasus" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="konsultasi">Layanan</label>
                                                <input readonly type="text" id="layanan" name="layanan" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="kronologi">Kronologi Kasus</label>
                                                <input readonly type="text" id="kronologi" name="kronologi" class="form-control">
                                            </div>
                                        </div>

                                        <hr class="my-4"/>
                                        <!-- Description -->

                                        <div class="col-lg-1 text-right mr-2">
                                            <a href="#!" class="btn btn-lg btn-primary">Terima</a>
                                        </div>
                                        <div class="col-lg-1 text-right">
                                            <a href="#!" class="btn btn-lg btn-danger">Tolak</a>
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
