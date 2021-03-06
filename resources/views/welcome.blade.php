<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page_title ?? '' }} | PPDB SD Negeri 1 Bedalisodo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                color: white;
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

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 content">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 text-white" style="padding:30px;">
                    <div>
                        @if($page !== 'home')
                            @yield('content')
                        @else

                            <h2>SD Negeri 1 Bedalisodo</h2>
                            <p>Guna memutus rantai penyebaran visrus Corona, SD Negeri 1 Bedalisodo Mengembangkan Sistem Pendaftaran Peserta Didik baru berbasis online. Orang Tua / Wali Calon Peserta Didik dapat mendaftarkan putra-putrinya melalui sistem ini. Gunakan Tautan di bawah ini untuk mengisi formulir pendaftaran.</p>
                            <hr>
                            <a href="{{ route('daftar.index') }}" class="btn btn-home btn-dark">Daftar</a>
                            <a href="/daftar/status" class="btn btn-home btn-dark">Lihat Status</a>
                            <hr>
                            <p>Mengingat kondisi ekonomi yang terimbas oleh pandemi, pada tahun pelajaran 2021-2022 SD Negeri 1 Bedalisodo akan memberikan seragam batik dan atribut gratis untuk peserta didik baru. Setelah terdaftar, peserta didik akan mendapatkan pula akun google pendidikan untuk digunakan pembelajaran daring. Dengan akun google tersebut, peserta didik dapat mengakses banyak fitur premium Google Workspace secara gratis. Seperti Gmail dengan akhiran @sdn1-bedalisodo.sch.id, Classroom, Google Meet, Google Drive, dll.</p>
                            <img src="{{ asset('img/siswas-sd.png') }}" alt="Siswa SD" style="width: 100%;">
                            <img src="{{ asset('img/gsuite.png') }}" alt="G Suite" style="margin:auto;width: 100%;background:white;">
                        @endif
                    </div>
                </div>
            </div>
            
        </div>
        {{-- <footer clas="text-center" style="width:100%;background:#efefef;position:relative;bottom:0;display:flex; justify-content: center;">
            <img src="{{ asset('img/gsuite.png') }}" alt="G Suite" style="margin:auto;height: 75px;">
        </footer> --}}
        <script src="{{ asset('jquery.min.js') }}"></script>
        <script src="{{ asset('popper.min.js') }}"></script>
        <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
        <script>
            $(document).ready(function(){
                // alert('hi')
            })
        </script>
    </body>
</html>
