@extends('layout.app')
@section('title')
<title>COA</title>
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Peralatan </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Peralatan</li>
        </ol>
        <div class="row">

            <!--  -->
            <div class="card mb-4">

                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                        Tambah Peralatan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalForm" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entry Peralatan
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form action="/input_coa" method="post" enctype="multipart/form-data" role="form">

                                        @csrf
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <div class="form-group">
                                            <label for="inputName">Nama Peralatan</label>
                                            <input type="text" class="form-control" id="inputName" name="nama" />
                                        </div>

                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary submitBtn">
                                                Tambah
                                            </button>
                                        </div>


                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!--  -->



                </div>
                <container>
                    <form class="mt-5" action="tambah_higisanialat" method="post">
                        <container class="col-lg-12 ml-4">
                            <p class="" style="font-size: 25px; align: 'center'; ">Nama Peralatan</p>

                            <div class="col-lg-1 d-flex justify-content-left">
                                <p style="font-size: 20px;  margin-left:-10px;">Tanggal</p>
                            </div>
                            <input type="date" class="form-control col-lg-5" id="tgl" name="tgl" />

                            <div class="col-lg-1 d-flex justify-content-right">
                                <p style="font-size: 20px;">Jam</p>
                            </div>
                            <input type="time" class="form-control col-lg-5" id="jam" name="jam" />
                        </container>




                        <container class="col-lg-12 mt-5">
                            <div class="col-lg-3 justify-content-center">
                                <p style="font-size: 20px;  ">Pelaksana</p>
                                <input class="form-control" type="text" name="pelaksana" id="pelaksana">
                            </div>
                            <div class="col-lg-1"></div>

                            <div class="col-lg-3 justify-content-center">
                                <p style="font-size: 20px;  ">Disetujui Oleh</p>
                                <input class="form-control" type="text" name="disetujui" id="disetujui">
                            </div>
                            <div class="col-lg-1"></div>

                            <div class="col-lg-3 justify-content-center">
                                <p style="font-size: 20px;  ">Keterangan</p>
                                <input class="form-control" type="text" name="keterangan" id="keterangan">
                            </div>
                        </container>

                        <div class="col-lg-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" style="margin-top: 25px;">Simpan</button>
                        </div>
                    </form>
                </container>
            </div>

            <!-- <a class="btn btn-primary" href="#">Edit</a>
                    <a class="btn btn-primary" href="#">Cetak</a> -->

</main>
@endsection