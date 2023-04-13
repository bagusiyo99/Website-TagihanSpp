{{-- tutor 132 --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>SIswa</title>

    <style>
        .text-logo {
            text-align: left;
            vertical-align: middle;
        }

        .kwitansi {
            margin-top: 20px;
        }

        .table-tagihan {
            border: 1px solid #171717;
            border-collapse: collapse;
            text-align: center;
        }


        .table-tagihan th {
            background: #4CAF50;
            color: white;
            border: 1px solid #171717;
            padding: 4px;
            text-align: center;
        }

        .table-tagihan td {
            border: 1px solid #171717;
            padding: 4px;
            text-align: center;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 12px 18px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 40px;
            font-size: 16px;
            margin-top: 20px;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            margin-top: 50px;
            padding: 60px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        /*
        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        } */

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;

        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">

            <tr>
                <td width="80">
                    <img src="/logo/LOGO.png" width="130px" />
                </td>
                <td colspan="5" style="text-align: center; vertical-align: middle;">
                    <div style="font-size:27px; font-weight:700;">Sekolah Menengah Atas Bagus Bandar Lampung</div>
                    <div style="text-align: center; font-size:19px; margin-top:5px;"> Gedung Pelayanan Pembayaran
                        Tagihan Siswa Lantai 1 (SMA Bagus)
                    </div>
                    <div style="text-align: center; font-size:17px; margin-top:2px;  font-style: italic;">Jalan bagus
                        aja pahoman bandar
                        lampung Telpon/Fax. 08XXXXXXXX
                    </div>

                </td>
            </tr>

            <tr>
                <td colspan="5">
                    <hr>
                </td>
            </tr>

            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                Tagihan untuk : {{ $siswa->nama }} <br>
                                NISN: {{ $siswa->nisn }}<br>
                                Kelas : {{ $siswa->kelas }}<br>
                                Jurusan : {{ $siswa->jurusan }}

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <table width="100%" class="table-tagihan">
                        <tr class="heading">
                            <th width="10">No</th>

                            <th>Bulan</th>

                            <th>Jumlah Tagihan</th>
                            <th>Tanggal Bayar</th>

                            <th>Paraf</th>
                            <th>Keterangan</th>
                        </tr>

                        @foreach ($kartuSpp as $item)
                            <tr class="item">
                                <td>{{ $loop->iteration }}</td>

                                <td style="text-align: center">
                                    {{ $item['bulan'] . '  ' . $item['tahun'] }}</td>

                                {{-- dari app/helpers/helper.php --}}
                                <td>{{ formatRupiah($item['total_tagihan']) }}</td>
                                <td>{{ $item['tanggal_bayar'] }}</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>



            {{-- <tr class="total" style="background: #eceaea">
                <td colspan="2" >Total Tagihan</td>

                <td>{{ formatRupiah($tagihan->total_tagihan) }}</td>
            </tr>
            <br> --}}

            <tr>
                <td colspan="3">
                    <br>
                </td>
            </tr>
            <tr class="kwitansi">
                <td style=" text-align: end;" colspan="3">Lampung,
                    {{ now()->translatedFormat('d F Y') }} <br />
                    Hormat Kami, <br />
                    <br />
                    <br />
                </td>

            </tr>
        </table>
        <a href="{{ url()->full() . '&output=pdf' }}" class="button"> Download</a>
        <a href="" onclick="window.print()" class="button"> Cetak</a>

    </div>

</body>

</html>
