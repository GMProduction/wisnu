@extends('user.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Kasus</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/user/kasus">Data Kasus</a></li>
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
                        <form method="POST" onsubmit="return cekEdit()">
                            @csrf
{{--                            <input id="id" name="id" value="{{$kasus->id}}" hidden>--}}
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="noreg">No. Registrasi</label>
                                       <input class="form-control" readonly value="{{$kasus->no_registrasi}}">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="jenisKasus">Jenis kasus</label>
                                        <select class="form-control" id="jenisKasus" name="jenisKasus">
                                            <option value="perdana">Perdana</option>
                                            <option value="perdata">Perdata</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="layanan">Layanan</label>
                                        <select class="form-control" id="layanan" name="layanan">
                                            <option value="konsultasi">Konsultasi</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="keteranganJadwal" for="kronologiKasus">Kronologi Kasus</label>
                                            <textarea id="kronologiKasus" name="kronologiKasus"
                                                      class="form-control">{{$kasus->kronologi_kasus}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-lg btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>




@endsection

@section('script')
<script>
    $(document).ready(function () {

        $('#jenisKasus').val({{$kasus->jenis_kasus}});
        $('#layanan').val({{$kasus->layanan}});
        $('#jenisKasus').formSelect();
        $('#layanan').formSelect();
    });

    function cekEdit() {
        console.log('{{$kasus->status}}');
        if('{{$kasus->status}}' === 'terima' || '{{$kasus->status}}' === 'tolak'){
            swal('Data sudah di {{$kasus->status}}, tidak bisa di rubah');
            return false
        }
    }
</script>

@endsection
