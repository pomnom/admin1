@extends('layout.app')
@section('title')
<title>Pembersihan Ruangan</title>
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pengolahan Batch</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pengolahan Batch</li>
        </ol>
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Bagian Produksi
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Sesuai Dengan POB No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nomor POB" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Produk
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kode Produk</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">rsl</option>
                                    <option value="2">kyt</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Rosela</option>
                                    <option value="2">Kunyit</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Batch</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nomor Batch" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Besar Batch</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Besar Batch" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Bentuk Sediaan</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Serbuk Tabur</option>
                                    <option value="2">Cair</option>
                                    <option value="2">Cairan Kental</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kemasan</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Pot</option>
                                    <option value="2">Pouch</option>
                                    <option value="2">Sachet</option>
                                </select>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Komposisi
                </div>
                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                        Tambah Komposisi
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalForm" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entry Kopmosisi
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="inputName">Nama BB</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nama BB" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Kode BB</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Kode BB" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputMessage">Persentase</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Persentase" />
                                        </div>
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

                    <!-- pop up end -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama BB</th>
                                <th scope="col">Kode BB</th>
                                <th scope="col">Persentase (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kunyit</td>
                                <td>kyt01</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Beras</td>
                                <td>brs02</td>
                                <td>20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Peralatan
                </div>
                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm1">
                        Tambah Peralatan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalForm1" role="dialog">
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
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="inputName">Nama Alat</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nama Alat" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Kode Alat</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Kode Alat" />
                                        </div>
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

                    <!-- pop up end -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Alat</th>
                                <th scope="col">Kode Alat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Belender/Mixer</td>
                                <td>BLMX</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bowl Aluminium</td>
                                <td>BWAL</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Penimbangan
                </div>
                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm2">
                        Data Penimbangan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalForm2" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entry Penimbangan
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="inputName">Kode Bahan</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Kode Bahan" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Nama Bahan</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nama Bahan" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Nomor Loth</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nomor Loth" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Jumlah yang Dibutuhkan</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Jumlah yang Dibutuhkan" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Jumlah yang Ditimbang</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Jumlah yang Ditimbang" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Ditimbang Oleh</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Ditimbang Oleh" />
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Diperiksa Oleh</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Diperiksa Oleh" />
                                        </div>
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

                    <!-- pop up end -->

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Bahan</th>
                                <th scope="col">Nama Bahan</th>
                                <th scope="col">Nomor Loth</th>
                                <th scope="col">Jml Dibutuhkan</th>
                                <th scope="col">Jml Ditimbang</th>
                                <th scope="col">Ditimbang Oleh</th>
                                <th scope="col">Diperiksa Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>kyt</td>
                                <td>Kunyit</td>
                                <td>02</td>
                                <td>2 KG</td>
                                <td>2 KG</td>
                                <td>Ayu</td>
                                <td>Saber</td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>brs</td>
                                <td>Beras</td>
                                <td>04</td>
                                <td>2 KG</td>
                                <td>2 KG</td>
                                <td>Listya</td>
                                <td>Dora</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Produk
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th scope="col">Tahap Pengolahan</th>
                            <th scope="col">Paraf Bagian Pengawasa Mutu</th>
                        </tr>
                    </table>

                    <form>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-8 col-form-label">Bahan yang sudah dikirim dari gudang bahan baku akan
                                ditimbang terlebih dahulu</label>
                            <div class="col-sm-10">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Tari</option>
                                    <option value="2">Dira</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-8 col-form-label">Bahan yang sudah ditimbang, ditimang diruang
                                mixing</label>
                            <div class="col-sm-10">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Tari</option>
                                    <option value="2">Dira</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-8 col-form-label">Setelah Selesai, Proses mixing akan dikarantina
                                terlebih dahulu</label>
                            <div class="col-sm-10">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Tari</option>
                                    <option value="2">Dira</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-8 col-form-label">Setelah dinyatakan lulus, baru kemudian dibawa keruang
                                filling untuk dilakukan pengemasan</label>
                            <div class="col-sm-10">
                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">Tari</option>
                                    <option value="2">Dira</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <a class="btn btn-primary" href="index.html">SIMPAN</a>
        </div>
    </div>
</main>
@endsection