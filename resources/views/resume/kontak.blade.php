<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ben - Responsive HTML5 Portfolio Template</title>
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
                            <li><a href="/project" title="Work">Project</a>
                            </li>
                            <li><a href="/resume" title="About">Resume</a>
                            </li>
                            <li><a href="/kontak" title="Contact" class="active">Hubungi Saya</a>
                            </li>
                            <li><a href="/halamanlogin" title="Blog">Login</a>
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
                        <h1 class="typed">Kritik & Saran</h1>
                    </div>
                    <form action="/kontak/create" class="form mt-md" method="POST">
                        {{csrf_field()}}
                        <label>Nama Lengkap *</label>
                        <input required type="text" name="nama_lengkap" class="form-control">
                        <label>Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control">
                        <label>Email</label>
                        <input required type="email" name="email" class="form-control">
                        <label>Kritik & Saran</label>
                        <textarea required name="kritik_saran" class="form-control"></textarea>
                        <button type="submit" class="btn btn-default">Kirim</button><span class="p-md">* These fields are required</span>
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
                strings: ["Kritik dan Saran", "Hallo", "Hola", "こんにちは", "Ciao", "Aloha", "Hallo"],
                typeSpeed: 130,
                loop: true
            });
        });
    </script>
</body>

</html>