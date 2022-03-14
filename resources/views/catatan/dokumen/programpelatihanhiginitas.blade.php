@extends('layout.app')
@section('title')
<title>Program dan Pelatihan Higiene dan Sanitasi</title>
@endsection
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1>Catatan Program dan Pelatihan Higiene dan Sanitasi</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Program dan Pelatihan Higiene dan Sanitasi</li>
        </ol>
        <div class="row">

            <div class="card mb-4">

                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->
                    <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalForm">
                        Tambah Pelatihan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalForm" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Entry Pelatihan
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form method="post" action="">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <i class="fas fa-table me-1"></i>
                                                Pelatihan
                                            </div>
                                            <div class="card-body">

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Materi Pelatihan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="materi_pelatihan" class="form-control" id="inputEmail3" placeholder="Materi Pelatihan" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Peserta Pelatihan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="peserta_pelatihan" class="form-control" id="inputEmail3" placeholder="Peserta 1, Peserta 2,..." />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pelatih</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="pelatih" class="form-control" id="inputEmail3" placeholder="Pelatih 1, Pelatih 2,..." />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Metode Pelatihan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="metode_pelatihan" class="form-control" id="inputEmail3" placeholder="Metode Pelatihan" />
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jadwal</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-group row">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Mulai</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" name="metode_pelatihan" class="form-control" id="inputEmail3" placeholder="xx/xx/xxxx" />
                                                            </div>
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Selesai</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" name="metode_pelatihan" class="form-control" id="inputEmail3" placeholder="xx/xx/xxxx" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Metode Penilaian</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="metode_penilaian" class="form-control" id="inputEmail3" placeholder="Metode Penilaian" />
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
                            <th scope="col">Materi</th>
                            <th scope="col">Peserta</th>
                            <th scope="col">Pelatih</th>
                            <th scope="col">Metode Pelatihan</th>
                            <th scope="col">Jadwal</th>
                            <th scope="col">Metode Penilaian</th>
                            <th scope="col">Actions</th>
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