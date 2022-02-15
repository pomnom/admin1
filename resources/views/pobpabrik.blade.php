@extends('layout.app')
@section('title')
<title>Pembersihan Ruangan</title>
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">POB PABRIK </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">POB PABRIK</li>
        </ol>
        <div class="row">

            <!--  -->
            <div class="card mb-4">

                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                        Tambah POB
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalForm" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entry POB
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="inputName">Nama POB</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nama BB" />
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Pilih File POB</label>
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
                                <th scope="col">POB</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Pembersihan Sanitasi Ruangan</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/1.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Pembersihan dan Sanitasi ALat</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/2.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">3</th>
                                <td>Pemeriksaan Bahan Pengemas</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/3.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">4</th>
                                <td>Penerimaan Bahan Baku</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/4.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>Tes Kesehatan Berkala</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/5.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">6</th>
                                <td>Ctt Perorang Pelatihan Hygine dan Sanitasi Serta Dokumentasi</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/6.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">7</th>
                                <td>Program Pelatihan Hygine dan Sanitasi</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/7.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">8</th>
                                <td>Penomoran Batch</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/8.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">9</th>
                                <td>Pengemasan</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/9.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">10</th>
                                <td>Pendistribusian Produk</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/10.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">11</th>
                                <td>Tera Alat</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/11.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">12</th>
                                <td>Spesifikasi produk Antara atau Ruahan</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/12.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">13</th>
                                <td>Spesifikasi Bahan Baku</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/13.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">14</th>
                                <td>Spesifikasi Bahan Pengemas</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/14.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">15</th>
                                <td>Pengambilan Contoh Bahan Awal</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/15.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">16</th>
                                <td>Pengambilan Contoh Produk Jadi</td>
                                <td><button type="button" class="btn btn-danger">Hapus</button>
                                    <a href="assets/pdf/16.pdf" target="_blank" button type="button" class="btn btn-primary">Buka</button>
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

