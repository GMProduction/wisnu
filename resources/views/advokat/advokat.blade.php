@extends('advokat.base')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Merubah Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
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
                                <p class="mb-1">Nama</p>
                                <h6 class="h3 mb-4">
                                    {{ $user->nama_advokat }}
                                </h6>

                                <p class="mb-1">Tempat Lahir</p>
                                <h6 class="h3 mb-4">
                                    {{ $user->tempat_lahir }}
                                </h6>

                                <p class="mb-1">Tanggal Lahir</p>
                                <h6 class="h3 mb-4">
                                    {{ $user->tanggal_lahir }}
                                </h6>

                                <p class="mb-1">Alamat</p>
                                <h6 class="h3 mb-4">
                                    {{ $user->alamat }}
                                </h6>

                                <p class="mb-1">No. Telepon</p>
                                <h6 class="h3 mb-4">
                                    {{ $user->no_telepon }}
                                </h6>

                                <p class="mb-1">Email</p>
                                <h6 class="h3 mb-4">
                                    {{ $user->email }}
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
                            <form method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <h6 class="heading-small text-muted mb-4">Informasi Pemohon</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tempatLahir">Tempat Lahir</label>
                                                <input type="text" id="nama" name="nama"
                                                       class="form-control" value="{{ $user->nama_advokat }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tempatLahir">Tempat Lahir</label>
                                                <input type="text" id="tempatLahir" name="tempatLahir"
                                                       class="form-control" value="{{ $user->tempat_lahir }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggalLahir" class="form-control-label">Tanggal
                                                    Lahir</label>
                                                <input class="form-control" type="date" id="tanggalLahir"
                                                       name="tanggalLahir" value="{{ $user->tanggal_lahir }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="alamat">Alamat</label>
                                                <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $user->alamat }}">
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="notelp" class="form-control-label">No telepon</label>
                                                <input class="form-control" type="number" id="notelp"
                                                       name="notelp" value="{{ $user->no_telepon }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email" class="form-control-label">Email</label>
                                                <input class="form-control" type="email" id="email"
                                                       name="email" value="{{ $user->email }}">
                                            </div>
                                        </div>
                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
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
