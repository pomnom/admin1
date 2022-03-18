@extends('layout.app')
@section('title')
<title>Karyawan</title>
@endsection

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Karyawan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pt abcde</li>
        </ol>
        <div class="row">


            <div class="card ">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Karyawan
                </div>
                <div class="card-body">
                    <!-- pop up -->
                    <!-- Button to trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="modalForm1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">
                                        Edit Posisi
                                    </h4>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <p class="statusMsg"></p>
                                    <form action="/input_peralatan" method="post" role="form">
                                        @csrf
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <label for="inputName">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="inputName" placeholder="Nama Alat" />
                                        <div class="form-group">
                                            <label for="inputEmail">Posisi</label>
                                            <input name="kode" type="text" class="form-control" id="inputName" placeholder="Kode Alat" />
                                        </div>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary submitBtn" onclick="submitContactForm()">
                                        Simpan
                                    </button>
                                </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- pop up end -->

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">Coba</td>
                            <td scope="col">Pengawas</td>
                            <td scope="col">
                                <button class="btn btn-success btn-m" data-toggle="modal" data-target="#modalForm1">
                                    Detail
                                </button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>
</main>
@endsection