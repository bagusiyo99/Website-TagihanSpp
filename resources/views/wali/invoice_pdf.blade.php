<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Tagihan Siswa</title>

    <style>
        .text-logo {
            text-align: left;
            vertical-align: middle;
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

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

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
                <td colspan="2" style="text-align: center; vertical-align: middle;">
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
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                Tagihan untuk : {{ $tagihan->siswa->nama }} <br>
                                NISN: {{ $tagihan->siswa->nisn }}<br>
                                Kelas : {{ $tagihan->siswa->kelas }}<br>
                                Jurusan : {{ $tagihan->siswa->jurusan }}

                            </td>

                            <td>
                                <div>Nomor Tagihan - {{ $tagihan->id }}</div>
                                <div>Tanggal Tagihan -
                                    {{ strtoupper($tagihan->tanggal_tagihan->translatedformat('d F Y')) }}
                                </div>
                                <div>Jatuh Tempo Tagihan -
                                    {{ strtoupper($tagihan->tanggal_jatuh_tempo->translatedformat('d F Y')) }}
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td width="10" style="text-align: center">No</td>

                <td style="text-align: start">Item Tagihan</td>

                <td style="text-align: end;">Sub-Total</td>
            </tr>

            @foreach ($tagihan->tagihanDetails as $item)
                <tr class="item">
                    <td style="text-align: center">{{ $loop->iteration }}</td>

                    <td style="text-align: start">{{ $item->nama_biaya }}</td>

                    {{-- dari app/helpers/helper.php --}}
                    <td style="text-align: end;">{{ formatRupiah($item->jumlah_biaya) }}</td>
                </tr>
            @endforeach


            <tr class="total" style="background: #eceaea">
                <td colspan="2" style="text-align: center">Total Tagihan</td>

                <td>{{ formatRupiah($tagihan->total_tagihan) }}</td>
            </tr>
        </table>
        {{-- <a href="{{ url()->current() . '?output=pdf' }}" class="button"> Download</a> --}}
        {{-- <a href="" onclick="window.print()" class="button"> Cetak</a> --}}

    </div>

</body>

</html>
