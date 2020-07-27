@extends('admin.base')
@section('content')

    <style>
        .form-control[readonly] {
            background-color: white;
            color: black;
        }
    </style>
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
                            <div class="pl-lg-4">
                                <form method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="noRegistrasi">No.
                                                    Registrasi</label>
                                                <input readonly type="text" id="noRegistrasi" name="noRegistrasi" value="{{$kasus->no_registrasi}}"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="noIdentitas">No.
                                                    Identitas</label>
                                                <input readonly type="text" id="noIdentitas" name="noIdentitas" value="{{$kasus->pemohon->pemohon->no_identitas}}"
                                                       class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="nama">Nama</label>
                                                <input readonly type="text" id="nama" name="nama" class="form-control" value="{{$kasus->pemohon->pemohon->nama_pemohon}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="jeniskasus">Jenis Kasus</label>
                                                <input readonly type="text" id="jeniskasus" name="jeniskasus" class="form-control" value="{{$kasus->jenis_kasus}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="konsultasi">Layanan</label>
                                                <input readonly type="text" id="layanan" name="layanan" class="form-control" value="{{$kasus->layanan}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="kronologi">Kronologi Kasus</label>
                                                <textarea readonly id="kronologi" name="kronologi" class="form-control">{{$kasus->kronologi_kasus}}</textarea>
                                            </div>
                                        </div>

                                        <hr class="my-4"/>
                                        <!-- Description -->
                                        @if($kasus->status == 'pending')
                                            <input id="id" name="id" hidden value="{{$kasus->no_registrasi}}">
                                            <input id="status" name="status" value="terima" hidden>
                                            <div class="col col-1 text-right mr-2">
                                                <button type="submit" class="btn btn-lg btn-primary">Terima</button>
                                            </div>
                                            <div class="col col-1 text-right">
                                                <button type="button" href="#modal" data-target="#modal" data-toggle="modal" class="btn btn-lg btn-danger">Tolak</button>
                                            </div>
                                        @else
                                            <div class="col-12">
                                                <h2 class="text-center" style=" font-weight: bold">Kasus {{$kasus->status}}</h2>
                                            </div>
                                        @endif
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal" id="modal">
        <form>
            <div class="modal-content">
                <div class="form-control">
                    <label class="form-control-label">Alasan Menolak</label>
                    <textarea> </textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button>Simpan</button>
            </div>
        </form>
    </div>

@endsection

@section('script')

    <script>
        $(document).ready(function () {
            @if(\Illuminate\Support\Facades\Session::has('success'))
            swal({
                title: 'Success',
                text: 'Kasus telah {{$status}}',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
            @endif

        });



        {{--function tolak() {--}}
        {{--    swal({--}}
        {{--        content: {--}}
        {{--            element: "input",--}}
        {{--            attributes: {--}}
        {{--                placeholder: "Masukkan alasan ditolak",--}}
        {{--                type: "text",--}}
        {{--            },--}}
        {{--        },--}}
        {{--    }).then(function (confirm) {--}}
        {{--        if (confirm == '') {--}}
        {{--            swal('Alasan harus diisi');--}}
        {{--        } else if (confirm) {--}}
        {{--            $.ajax({--}}
        {{--                method: 'POST',--}}
        {{--                data: {--}}
        {{--                    id: '{{$kasus->no_registrasi}}',--}}
        {{--                    status: 'tolak',--}}
        {{--                    alasan: confirm--}}
        {{--                },--}}
        {{--                success: function (data) {--}}
        {{--                    window.location.reload();--}}
        {{--                },--}}
        {{--            })--}}
        {{--        }--}}
        {{--    });--}}
        {{--}--}}
    </script>

@endsection
