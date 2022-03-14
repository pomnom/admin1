@extends('layout.app')
@section('title')
<title>Penanganan Keluhan</title>
@endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Catatan Penanganan Keluhan</h1>
        <ol class="breadcrumb mb-4">Penanganan Keluhan</li>
        </ol>
        <div class="row">

            <div class="card mb-4">

                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                        Tambah Penanganan Keluhan
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modalForm" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entry Penanganan Keluhan
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form method="post" action="">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <i class="fas fa-table me-1"></i>
                                                Penanganan Keluhan
                                            </div>
                                            <div class="card-body">
                                                
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Customer</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="nama_customer" class="form-control" id="inputEmail3" placeholder="Nama Customer" />
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Keluhan</label>
                                                    <div class="col-sm-10"> 
                                                        <input type="date" name="tanggal_keluhan" class="form-control" id="inputEmail3" placeholder="" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keluhan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="keluhan" class="form-control" id="inputEmail3" placeholder="Keluhan" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Tanggapi Keluhan</label>
                                                    <div class="col-sm-10"> 
                                                        <input type="date" name="tanggal_tanggapi_keluhan" class="form-control" id="inputEmail3" placeholder="" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Produk Yang Digunakan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="produk_yang_digunakan" class="form-control" id="inputEmail3" placeholder="Produk Yang Digunakan" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Penanganan Keluhan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="penanganan_keluhan" class="form-control" id="inputEmail3" placeholder="Penanganan Keluhan" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tindak Lanjut</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="tindak_lanjut" class="form-control" id="inputEmail3" placeholder="Tindak Lanjut" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary" style="float:left; width: 100px;  margin-left:25px">SIMPAN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->



                </div>

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Tanggal Keluhan</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col">Tanggal Ditanggapi Keluhan</th>
                            <th scope="col">Produk Yang Digunakan</th>
                            <th scope="col">Penanganan Keluhan</th>
                            <th scope="col">Tindak Lanjut</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <form method="post" action="detil_batch">
                                    <input type="hidden" name="_token" value="" />
                                    <input type="hidden" name="nobatch" value="" />
                                    <button type="submit" class="btn btn-primary">Buka</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection