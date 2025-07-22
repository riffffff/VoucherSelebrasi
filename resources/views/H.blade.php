<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Voucher Permadani</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @php
        $jumlah = $formasi1->where('baris', 'H')->count();
        $f1 = $formasi1->where('baris', 'H')->values();
        $f2 = $formasi2->where('baris', 'H')->values();
        $f3 = $formasi3->where('baris', 'H')->values();
        $f4 = $formasi4->where('baris', 'H')->values();
        $f5 = $formasi5->where('baris', 'H')->values();
        $f6 = $formasi6->where('baris', 'H')->values();
        $f7 = $formasi7->where('baris', 'H')->values();
        $f8 = $formasi8->where('baris', 'H')->values();
        $f9 = $formasi9->where('baris', 'H')->values();
        $f10 = $formasi10->where('baris', 'H')->values();
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
                                    <th colspan="2">Selebrasi Formasi Pionir Permadani 2025</th>
                                    <th colspan="1">H-{{ $k + 1 }}</th>
                                </tr>
                                <tr>
                                    <th>Intruksi</th>
                                    <th>Warna</th>
                                    <th>Ket.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="background-color: antiquewhite">Formasi <span
                                            class="bold">Dimulai</span>
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
                                    <td style="background-color: rgb(233, 197, 150)"><span class="bold">Ku Datang
                                            </span></td>
                                    <td>Hitam</td>
                                    <td><span class="bold">Kibas</span></td>
                                </tr>
                                <tr>
                                    <td>Come <span class="bold">On You Vokasi</span></td>
                                    <td>{{ $f8[$k]->warna ?? '-' }}</td>
                                    <td>Warna</td>
                                </tr>
                                <tr>
                                    <td>Kami<span class="bold"> Datang Lagi</span></td>
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
    @include('components.jakarta')
    <script>
        // Efek fade-in saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add('fade-in');

            // Fade-out saat navigasi
            const links = document.querySelectorAll('.nav a');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.body.classList.remove('fade-in');
                    document.body.classList.add('fade-out');
                    setTimeout(() => {
                        window.location.href = this.href;
                    }, 400);
                });
            });
        });
    </script>
</body>

</html>
