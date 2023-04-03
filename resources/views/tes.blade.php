<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}

        .kanan {
            float: right;
            margin: 5px;
        }
        .kiri {
            float: left;
            margin: 0px;
            padding: 50px;
        }
        </style>
</head>
<body>
    <br>
    <div class="kanan">
    <img src="{{ 'img/bsi.png' }}" height=63px width=249px>
    <p><b>PT. Bank Syariah Indonesia, Tbk<br>
    Branch Office Tanjung Uban<br>
    Jl. Permaisuri - Tanjung Uban Selatan<br>
    Bintan Utara - Kepulauan Riau 29152<br>
    Telp. (0771) 482700<br>
    Fax. (0771) 4822929<br>
    www.bankbsi.co.id</b></p>
    </div>
    <br><br>
    <div class="kiri">
        <p>Kepada :<br>
        PT Bank Syariah Indonesia<br>
        <i>Branch Operation & Service Manager</i><br>
        KCP Tanjung Uban <br><br>
        U.p. Yth. Adi Hadiansyah,BOSM<br><br>
        Perihal: <b>LAPORAN BARANG MASUK</b><br><br>
        Assalamu'alaikum, Wr. Wb.<br>
        Menunjuk referensi tersebut diatas, sehubungan dibutuhkannya laporan barang masuk dengan ini
        adalah laporan barang masuk
        </b>
        </p>
    </div>
    <br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br>
    <br><br>
    <br><br><br>
    

    <div style="overflow-x: auto; padding: 50px;">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Nama Pengirim</th>
                <th>Jabatan Pengirim</th>
                <th>Kategori</th>
                <th>Stok Masuk</th>
            </tr>
        </thead>
                @foreach ($barangmasuk as $bm)
                <tr>
                    <td>{{ $bm->id }}</td>
                    <td>{{ $bm->nama_barang }}</td>
                    <td>{{ $bm->nama_pengirim }}</td>
                    <td>{{ $bm->jabatan_pengirim }}</td>
                    <td>{{ $bm->kategori }}</td>
                    <td>{{ $bm->stok_masuk }}</td>
                </tr>
                @endforeach
        <tfoot>
            <tr>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Nama Pengirim</th>
                    <th>Jabatan Pengirim</th>
                    <th>Kategori</th>
                    <th>Stok Masuk</th>
                </tr>
            </tr>
        </tfoot>
    </table>
</div>

<div class="kiri">
    <b>PT. BANK SYARIAH INDONESIA</b>
    <b>KCP TANJUNG UBAN</b><br><br><br>
    <br><br><br>
    <b>Abdul Cholik Harun Rosid</b><br>
    <i>Pramubakti</i>
</div>

</body>
</html>