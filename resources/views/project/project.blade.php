<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="../css/core.css">
    <link rel="stylesheet" type="text/css" href="../css/elements.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="icon" type="image/png" href="../favicon.png?version=4">
</head>

<body class="preload">
    <div class="container-fluid">
        <header>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="col-md-12 text-center"><a href="../index.html" class="brand"><img alt="Ben" src="../images/logo.svg" class="default"><img alt="Ben" src="../images/logo-white.svg" class="white"></a>
                        <ul class="main-nav">
                            <li><a href="/project" title="Work" class="active">Project</a>
                            </li>
                            <li><a href="/resume" title="About">Resume</a>
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
        <section>
            @foreach ($daftar_project as $project)
            <div class="container-fluid content"><a href="../pages/blog-single.html" class="fadein blog-item">
                    <h2>{{$project->nama_project}}</h2><img alt="Ben Template - made by Themanoid" src="{{asset('images/'.$project->foto_project)}}" width="1300px">
                    <div class="info">
                        <div class="author">{{$project->keterangan}}</div>
                        <div class="tag">{{$project->kategori}}</div>
                    </div>
                </a><a href="../pages/blog-single.html" class="fadein blog-item">
            </div>
            @endforeach
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center"><span>&copy; Ben Template. <a href="https://themeforest.net/item/ben-creative-portfolio-html-template/19113557">Buy Ben</a></span></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="../js/vendor.js"></script>
    <script src="../js/functions.js"></script>
</body>

</html>