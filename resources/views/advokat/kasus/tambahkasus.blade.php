@extends('user.base')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Menambah Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Kasus</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/user/kasus">Data Kasus</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
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
                        <form action="/user/kasus/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="form-group col-lg-12">
                                        <label for="jenisKasus">Jenis kasus</label>
                                        <select class="form-control" id="jenisKasus" name="jenisKasus">
                                            <option value="Pidana">Pidana</option>
                                            <option value="Perdata">Perdata</option>
                                            <option value="Hak Asuh Anak">Hak Asuh Anak</option>
                                            <option value="Harta Gono Gini">Harta Gono Gini</option>
                                            <option value="Adopsi Anak">Adopsi Anak</option>
                                            <option value="Hukum Waris">Hukum Waris</option>
                                            <option value="Wasiat">Wasiat</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="layanan">Layanan</label>
                                        <select class="form-control" id="layanan" name="layanan">
                                            <option value="Jasa Konsultasi">Jasa Konsultasi</option>
                                            <option value="Pendampingan">Pendampingan</option>
                                            <option value="Penyelesaian Sengketa">Penyelesaian Sengketa</option>
                                            <option value="Penyelesaian Perkara">Penyelesaian Perkara</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="kronologiKasus">Kronologi Kasus</label>
                                            <textarea type="text" id="kronologiKasus" name="kronologiKasus" required
                                                      class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <a>Foto Barang Bukti (Jika ada)</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image"
                                                   name="image" lang="en">
                                            <label class="custom-file-label" for="image">Select file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
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
