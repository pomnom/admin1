@extends('layout.app')
@section('title')
<title>COA</title>
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">PERIZINAN </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">PERIZINAN</li>
        </ol>
        <div class="row">

            <!--  -->
            <div class="card mb-4">

                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                        Tambah Perizinan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalForm" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entry Perizinan
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="inputName">Nama Perizinan</label>
                                            <input type="text" class="form-control" id="inputName" />
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Pilih File Perizinan</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                        </form>
                                    </form>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Perizinan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Izin Uzaha</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/izin_usaha.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Izin Lingkungan</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/izin_lingkungan.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>NIB</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/nib.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>

            <!-- <a class="btn btn-primary" href="#">Edit</a>
                    <a class="btn btn-primary" href="#">Cetak</a> -->

</main>
@endsection