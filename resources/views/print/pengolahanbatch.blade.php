<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
        table,
        tr,
        td, th, tbody,
        thead {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            width:auto;
        }
    </style>
    <title>A4</title>

    <!-- Normalize or reset CSS with your favorite library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

    <!-- Load paper.css for happy printing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- Set page size here: A5, A4 or A3 -->
    <!-- Set also "landscape" if you need -->
    <style>
        @page {
            size: A4
        }
    </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->

<body class="A4">

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">

        <!-- Write HTML just like a web page -->
        <h2 style="text-align: center;">Catatan Pengolahan Batch</h2>
        <center>
        <table style="border: 5px; align-item: center">
            <tr>
                <td rowspan="2" style="width: 34%;">
                    <img src="asset/img/bpom1.jpg" alt="">
                    halo
                </td>
                <td style="width: 33%; height:50%">
                    <h5><b>BAGIAN</b></h5>
                    <h5>PRODUKSI</h5>
                </td>
                <td style="width: 33%; height:50%">
                    <h4>Sesuia dengan POB Nomor</h4>
                </td>
            </tr>
            <tr>
                <td >
                    <h5>Disusun Oleh</h5>
                </td>
                <td >
                <h5>Disetujui Oleh</h5>
                </td>
            </tr>
        </table>

        <table>
            <tr>
                <td>Kode</td>
                <td>Nama</td>
                <td>Nomor Batch</td>
                <td>Besar Batch</td>
                <td>Bentuk Sediaan</td>
                <td>Kemasan</td>
                <td>Tanggal Pengolahan</td>
            </tr>
            <br><br>
            @foreach ($data as $row)
            <tr>
                <td>{{$row['kode_produk']}}</td>
                <td>{{$row['nama_produk']}}</td>
                <td>{{$row['nomor_batch']}}</td>
                <td>{{$row['besar_batch']}}</td>
                <td>{{$row['bentuk_sedia']}}</td>
                <td>{{$row['kemasan']}}</td>
                <td>{{$row['tanggal_pengolahan']}}</td>
            </tr>
            @endforeach
        </table>
        <br><br><br><br>
        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama BB</th>
                                <th scope="col">Kode BB</th>
                                <th scope="col">Persentase (%)</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($list_kom as $row)
                            <?php $i++;
                            ?>
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$row['kompisisi_nama']}}</td>
                                <td>{{$row['komposisi_id']}}</td>
                                <td>{{$row['komposisi_persen']}}</td>
                                <td>
                                    <a href="#" type="button" class="btn btn-danger" onclick="return confirm('Hapus? ')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br><br><br><br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Alat</th>
                                <th scope="col">Kode Alat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($list_alat as $row)
                            <?php $i++;
                            ?>
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$row['peralatan_nama']}}</td>
                                <td>{{$row['peralatan_id']}}</td>
                                <td>
                                    <a href="#" type="button" class="btn btn-danger" onclick="return confirm('Hapus? ')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br><br><br><br>

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
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0 ?>
                            @foreach($list_nimbang as $row)
                            <?php $i++;
                            ?>
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$row['penimbangan_kodebahan']}}</td>
                                <td>{{$row['penimbangan_namabahan']}}</td>
                                <td>{{$row['penimbangan_loth']}}</td>
                                <td>{{$row['penimbangan_jumlahbutuh']}}</td>
                                <td>{{$row['penimbangan_jumlahtimbang']}}</td>
                                <td>{{$row['penimbangan_timbangoleh']}}</td>
                                <td>{{$row['penimbangan_periksaoleh']}}</td>
                                <td>
                                    <a href="#" type="button" class="btn btn-danger" onclick="return confirm('Hapus? ')">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

        </center>
    </section>

</body>

</html>