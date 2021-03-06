<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page_title ?? '' }} | PPDB SD Negeri 1 Bedalisodo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('chart/Chart.min.css') }}">
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                /* color: white; */
                /* background:  rgb(123, 172, 194); */
                background-image: url("{{ asset('img/gunung.svg') }}");
                background-image: url("{{ asset('img/gunung.svg') }}"), linear-gradient(-135deg, rgb(103, 152, 173) 25%, rgb(46, 109, 139));
                background-position: bottom center;
                background-repeat: no-repeat;
                background-size: 100%;
                height: 100vh;
                overflow-y: scroll;
                background-attachment: fixed;
            }

            text-center {
                text-align: center;
            }
            .content {
                min-height: 100vh;
            }

            .form-group {
                margin-top: 10px;
            }
            .form-control {
                width: 100%;
                border-radius: 3px;
                padding: 10px;
            }
            .btn-submit {
                padding: 10px 15px;
                border-radius: 3px;
                background-image: linear-gradient(to top, blue 20%, rgb(53, 191, 201));
                color: white;
            }
            span.error{
                color: #d83d3d;
            }
            .btn-home {
                padding: 10px 20px;
                background: #323232;
                /* margin: 100px auto; */
            }
            button.close {
                border: none;
                background: transparent;
                color: #666;
                font-size: 1.5em;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-pink-100 dark:bg-pink-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="d-none d-md-block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="d-flex justify-content-center pt-8 sm:justify-start sm:pt-0 text-white" style="padding:30px;">
                    <div>
                        @if($page !== 'home')
                            @yield('content')
                        @else
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2>SD Negeri 1 Bedalisodo</h2>
                                    <p>Guna memutus rantai penyebaran visrus Corona, SD Negeri 1 Bedalisodo Mengembangkan Sistem Pendaftaran Peserta Didik baru berbasis online. Orang Tua / Wali Calon Peserta Didik dapat mendaftarkan putra-putrinya melalui sistem ini. Gunakan Tautan di bawah ini untuk mengisi formulir pendaftaran.</p>
                                    <hr>
                                    <a href="{{ route('daftar.index') }}" class="btn btn-home btn-dark">Daftar</a>
                                    <button type="button" class="btn btn-home btn-dark btn-check-siswa" >Lihat Status</button>
                                    <hr>
                                    <p>Mengingat kondisi ekonomi yang terimbas oleh pandemi, pada tahun pelajaran 2021-2022 SD Negeri 1 Bedalisodo akan memberikan seragam batik dan atribut gratis untuk peserta didik baru. Setelah terdaftar, peserta didik akan mendapatkan pula akun google pendidikan untuk digunakan pembelajaran daring. Dengan akun google tersebut, peserta didik dapat mengakses banyak fitur premium Google Workspace secara gratis. Seperti Gmail dengan akhiran @sdn1-bedalisodo.sch.id, Classroom, Google Meet, Google Drive, dll.</p>
                                    <img src="{{ asset('img/siswas-sd.png') }}" alt="Siswa SD" style="width: 100%;">
                                    <img src="{{ asset('img/gsuite.png') }}" alt="G Suite" style="margin:auto;width: 100%;background:white;">
                                </div>
                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title text-dark">Statistik</h3>
                                            <canvas id="perjk"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="modal" id="modalCekCasis">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('daftar.status') }}" class="form" id="formCariSiswa" method="GET">
                    <div class="modal-header">
                        <h5 class="modal-title">Maukkan Nama Calon Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                            @csrf()
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Calon Siswa">
                            </div>
                        
                    </div>
                    <div class="card-footer">
                        <div class="form-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-lg btn-secondary">Cari</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        {{-- <footer clas="text-center" style="width:100%;background:#efefef;position:relative;bottom:0;display:flex; justify-content: center;">
            <img src="{{ asset('img/gsuite.png') }}" alt="G Suite" style="margin:auto;height: 75px;">
        </footer> --}}
        <script src="{{ asset('jquery.min.js') }}"></script>
        <script src="{{ asset('popper.min.js') }}"></script>
        <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('chart/Chart.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                // alert('hi')
                $('.btn-check-siswa').click(function(){
                    $('#modalCekCasis').modal('show')
                })

                $('button.close').click(function() {
                    $('.modal').modal('hide')
                })

                var jml = {{ $jml }}
                var labels = ['Laki-laki: {{ $l }}', 'Perempuan: {{ $p }}']
                var data = [{{ $l/$jml*100 }}, {{ $p/$jml*100 }}]

                var ctx = document.getElementById('perjk').getContext('2d');

                var pieChart = new Chart(ctx, {
                    type: 'pie',
                    data: { 
                        labels: labels,
                        datasets : [{
                            label: 'Data Pendaftar',
                            data: data,
                            backgroundColor: [
                                'rgb(26, 214, 130)',
                                'rgb(230, 52, 210)',
                                'rgb(52, 82, 235)',
                                'rgb(138, 4, 113)',
                                'rgb(214, 134, 13)'
                            ],
                        }]
                    },
                    options: {
                        tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                var labels = data.labels[tooltipItem.index];
                                var currentValue = dataset.data[tooltipItem.index];
                                return labels+": "+currentValue+" %";
                            }
                        }
                    }
                }
                })
            })
        </script>
    </body>
</html>
