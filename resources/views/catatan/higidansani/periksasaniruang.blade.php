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
                        <div class="col-lg-12 mb-5">
                            <p class="d-flex justify-content-center" style="font-size: 30px; ">Nama Alat</p>
                            <container class="col-lg-3 mb-3 ">
                                <p style="font-size: 25px; ">Jendela</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Pintu</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Langit-langit</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Lantai</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Meja</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Kursi</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Dinding</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>
                        </div>

                        <div class="col-lg-12 mb-5">
                            <p class="d-flex justify-content-center" style="font-size: 30px; ">Nama Alat</p>
                            <container class="col-lg-3 mb-3 ">
                                <p style="font-size: 25px; ">Jendela</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Pintu</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Langit-langit</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Lantai</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Meja</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Kursi</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Dinding</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>
                        </div>

                        <div class="col-lg-12 mb-5">
                            <p class="d-flex justify-content-center" style="font-size: 30px; ">Nama Alat</p>
                            <container class="col-lg-3 mb-3 ">
                                <p style="font-size: 25px; ">Jendela</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Pintu</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Langit-langit</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Lantai</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Meja</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Kursi</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>

                            <container class="col-lg-3 mb-3 ">
                                <p class="" style="font-size: 25px; ">Dinding</p>
                                <div class="radio-inline">
                                    <label><input value="0" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Ya</p>
                                    </label>
                                </div>
                                <div class="radio-inline">
                                    <label><input value="1" type="radio" name="posradio">
                                        <p style="font-size: 18px;">Tidak</p>
                                    </label>
                                </div>
                            </container>
                        </div>

                    </form>
                </container>
            </div>

            <!-- <a class="btn btn-primary" href="#">Edit</a>
                    <a class="btn btn-primary" href="#">Cetak</a> -->

</main>
@endsection