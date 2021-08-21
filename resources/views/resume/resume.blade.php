<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portofolio Website's </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
    <link rel="icon" type="image/png" href="{{asset('/favicon.png?version=4')}}">
</head>

<body class="preload">
    <div class="container-fluid">
        <header>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12 text-center"><a href="../index.html" class="brand"><img alt="Ben" src="../images/logo.svg" class="default"><img alt="Ben" src="../images/logo-white.svg" class="white"></a>
                        <ul class="main-nav">
                            <li><a href="/project" title="Work">Project</a>
                            </li>
                            <li><a href="/resume" title="About" class="active">Resume</a>
                            </li>
                            <li><a href="/kontak" title="Contact">Hubungi Saya</a>
                            </li>
                            <li><a href="/halamanlogin" title="Blog">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <section class="content fadein">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div id="sticky" class="col-md-12 col-sm-5">
                            @foreach ($data_resume as $resume)

                            <div class="selfie"><img alt="Ben" src="{{asset('images/'.$resume->foto_profil)}}" class="mt-lg"></div>
                            <h4>{{$resume->nama_lengkap}}</h4>
                            <table class="table mt-md">
                                <tr>
                                    <td><strong>Tanggal Lahir</strong></td>
                                    <td>{{$resume->tanggal_lahir}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Position</strong></td>
                                    <td>{{$resume->posisi}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Alamat</strong></td>
                                    <td>{{$resume->alamat}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>No Telepon</strong></td>
                                    <td>{{$resume->no_telpon}}</td>
                                </tr>
                                <tr>
                                    <td> <strong>Sosial Media</strong></td>
                                    <td> <a href="https://www.linkedin.com/in/bayu-wibisana-007403131/">LinkedIn</a><a href="https://www.instagram.com/aditwibisana/">Instagram</a><a href="https://web.facebook.com/bayu.a.wibisana/">Facebook</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="sticky-holder">
                            <h1 class="animated-text">{{$resume->headline}}</h1>
                            <p>{{$resume->deskripsi_1}}</p>
                            <p>{{$resume->deskripsi_2}}</p>
                            <p>{{$resume->deskripsi_3}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content mt-xl fadein">
            <div class="row-fluid">
                <div class="col-md-12 text-center">
                    <h4>Project Terakhir</h4>
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-md-12"><a href="../pages/work-single.html" class="smooth"><img alt="Ben" src="{{asset('images/'.$resume->foto_project)}}" width="1500px"></a></div>
            </div>@endforeach
        </section>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center"><span>&copy; Ben Template. <a href="https://themeforest.net/item/ben-creative-portfolio-html-template/19113557">Buy Ben</a></span></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{asset('/js/vendor.js')}}"></script>
    <script src="{{asset('/js/functions.js')}}"></script>
</body>

</html>
\