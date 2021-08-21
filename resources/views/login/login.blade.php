<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portofolio Website's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/custom.css')}}">
    <link rel="icon" type="image/png" href="../favicon.png?version=4">
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
                            <li><a href="/resume" title="About">Resume</a>
                            </li>
                            <li><a href="/kontak" title="Contact">Hubungi Saya</a>
                            </li>
                            <li><a href="/halamanlogin" title="Blog" class="active">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="container-fluid fadein">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text-center intro">
                        <h1 class="typed">Halaman Login</h1>
                    </div>
                    <form action="/postlogin" class="form mt-md" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Email</label>
                            <input required type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <button type="submit" class="btn btn-default">Login</button><span class="p-md">* These fields are required</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center"><span>&copy; Ben Template. <a href="https://themeforest.net/item/ben-creative-portfolio-html-template/19113557">Buy Ben</a></span></div>
                </div>
            </div>
        </footer>
    </div>
    <!-- The type animation script-->
    <script src="../js/vendor.js"></script>
    <script src="../js/functions.js"></script>
    <script>
        $(function() {
            $(".typed").typed({
                strings: ["Halaman Login.", "Login Page", "로그인 페이지", "Page de connexion", "Aloha", "Hallo"],
                typeSpeed: 130,
                loop: true
            });
        });
    </script>
</body>

</html>