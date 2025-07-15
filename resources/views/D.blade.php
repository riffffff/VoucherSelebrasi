<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Voucher Permadani</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', serif;
            background: #fff;
        }

        .page {
            width: 297mm;
            height: 210mm;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10mm;
            padding: 5mm;
            box-sizing: border-box;
            page-break-after: always;
        }

        .voucher {
            width: 136mm;
            height: 195mm;
            border: 1px solid #000;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
            font-size: 15pt;
            table-layout: fixed;
        }



        th,
        td {
            border: 1px solid #000;
            padding: 5px 6px;
        }

        th {
            background-color: #ddd;
            text-align: center;
        }

        td:nth-child(2),
        td:nth-child(3),
        th:nth-child(2),
        th:nth-child(3) {
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        .italic {
            font-style: italic;
        }
    </style>
</head>

<body>

    @php
        $jumlah = $formasi1->where('baris', 'D')->count();
        $f1 = $formasi1->where('baris', 'D')->values();
        $f2 = $formasi2->where('baris', 'D')->values();
        $f3 = $formasi3->where('baris', 'D')->values();
        $f4 = $formasi4->where('baris', 'D')->values();
        $f5 = $formasi5->where('baris', 'D')->values();
        $f6 = $formasi6->where('baris', 'D')->values();
        $f7 = $formasi7->where('baris', 'D')->values();
        $f8 = $formasi8->where('baris', 'D')->values();
        $f9 = $formasi9->where('baris', 'D')->values();
        $f10 = $formasi10->where('baris', 'D')->values();
    @endphp

    @for ($i = 0; $i < $jumlah; $i += 2)
        <div class="page">
            @for ($j = 0; $j < 2; $j++)
                @php $k = $i + $j; @endphp
                @if ($k < $jumlah)
                    <div class="voucher">
                        <table>
                            <colgroup>
                                <col style="width: 60%">
                                <col style="width: 20%">
                                <col style="width: 20%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th colspan="3">Selebrasi Formasi Pionir Permadani 2025 | | | D-{{ $k + 1 }}</th>
                                </tr>
                                <tr>
                                    <th>Intruksi</th>
                                    <th>Warna</th>
                                    <th>Ket.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="background-color: antiquewhite">Formasi <span class="bold">Dimulai</span>
                                    </td>
                                    <td>{{ $f1[$k]->warna ?? '-' }}</td>
                                    <td><span class="bold">Kibas</span></td>
                                </tr>
                                <tr>
                                    <td>Selamat Datang <span class="bold">Vokasi</span> Muda</td>
                                    <td>{{ $f1[$k]->warna ?? '-' }}</td>
                                    <td><span class="bold">Ombak</span></td>
                                </tr>
                                <tr>
                                    <td><span class="bold">Bersiaplah!</span></td>
                                    <td>{{ $f2[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td>Rumah Perjuangan <span class="bold">Telah Menanti</span></td>
                                    <td>{{ $f3[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td>Tak <span class="bold">Mudah Runtuh</span></td>
                                    <td>{{ $f4[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td>Terus <span class="bold">Melaju</span></td>
                                    <td>{{ $f5[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td>Pilar Transformasi <span class="bold">Pendidikan</span></td>
                                    <td>{{ $f6[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td>Untuk <span class="bold">Negeri!</span></td>
                                    <td>{{ $f7[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td style="background-color: antiquewhite">Kami <span class="bold">Datang
                                            Lagi</span></td>
                                    <td>Hitam</td>
                                    <td><span class="bold">Kibas</span></td>
                                </tr>
                                <tr>
                                    <td>Come <span class="bold">On You Garasi</span></td>
                                    <td>{{ $f8[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td><span class="bold">Ku Datang</span></td>
                                    <td>{{ $f9[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td>Vokasi <span class="bold">Victory!</span></td>
                                    <td>{{ $f10[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
            @endfor
        </div>
    @endfor
    @include('components.nav')

</body>

</html>
