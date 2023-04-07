<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Barang Keluar</title>
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
        .last-left{
            padding: 50px;
        }
        .kiri-last{
            padding-left: 50px;
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
        Perihal: <b>LAPORAN BARANG KELUAR</b><br><br>
        Assalamu'alaikum, Wr. Wb.<br>
        Menunjuk referensi tersebut diatas, sehubungan dibutuhkannya laporan barang keluar dengan ini
        adalah laporan barang keluar
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
                <th>Nama Peminjam</th>
                <th>Jabatan Peminjam</th>
                <th>Kategori</th>
                <th>Stok Keluar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangkeluar as $bk)
            <tr>
                <td>{{ $bk->id }}</td>
                <td>{{ $bk->nama_barang }}</td>
                <td>{{ $bk->nama_peminjam }}</td>
                <td>{{ $bk->jabatan_peminjam }}</td>
                <td>{{ $bk->kategori }}</td>
                <td>{{ $bk->stok_keluar }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Nama Peminjam</th>
                    <th>Jabatan Peminjam</th>
                    <th>Kategori</th>
                    <th>Stok Masuk</th>
                </tr>
            </tr>
        </tfoot>
    </table>
</div>
<div class="last-left">
    <p>Demikan kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
    <p><i>Wassalamu'alaikum. Wr. Wb</i></p>
</div>
<div class="kiri-last">
    <b>PT. BANK SYARIAH INDONESIA</b>
    <b>KCP TANJUNG UBAN</b><br><br><br>
    <br><br><br>
    <b>Abdul Cholik Harun Rosid</b><br>
    <i>Pramubakti</i>
</div>

</body>
</html>