<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow">
    <meta name="keywords"  content="MMORPG Items, Toram Guide, Toram Boss, Toram mini boss, Toram Bow Guide, Toram Katana Guide" />
    <meta name="author" content="Hilmi Farhandika" />
    <link rel="icon" href="https://www.javabow.com/favicon.ico" type="image/gif">
    <link rel="alternate" type="application/rss+xml" href="https://www.javabow.com/rss.xml" title="JavaBow">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/d7cf629b89.js"></script>
    <style>
        .navbar-brand {
            width: 90px;
        }

        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

        article {
            font-size: 1.2rem;
        }

        /* @media (max-width: @screen-xs) {
            html{font-size: 0.8rem;}
        }

        @media (max-width: @screen-sm) {
            html{font-size: 1.2rem;}
        }

        @media (max-width: @screen-md) {
            html{font-size: 50px;}
        }

        @media (max-width: @screen-lg) {
            html{font-size: 100px;}
        } */
    </style>
</head>
<body>
    {{-- <header> --}}
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark main-nav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav navbar-nav mx-auto d-lg-none">
                    <li class="nav-item"><a class="navbar-brand" href="#">Javabow</a></li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Toram</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav mx-auto d-none d-lg-block">
                        <li class="nav-item"><a class="navbar-brand" href="#">Javabow</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search this blog">
                                <div class="input-group-append">
                                  <button class="btn btn-secondary" type="button">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    {{-- </header> --}}
    <section style="padding-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <article style="font-family: 'Lato', sans-serif;">
                        <div><span id="date">{{ $data->created_at->format('l j F Y') }}</span> <span> / </span> <span id="tag">#{{ $data->type }}</div>
                            <h1>{{ $data->judul }}</span></h1>
                        <div style="padding-top: 20px;"><img width="50" height="50" src="{{ asset('assets/person-icon.png') }}" alt="javabow author"> <span id="author-name">Hilmi Farhandika</span></div>
                        <div style="padding-top: 10px;padding-bottom: 30px;" id="main-image"><img class="img-fluid" src="{{ $data->image }}" alt=""></div>
                        {!! $data->isi !!}
                    </article>
                </div>
            </div>
        </div>
    </section>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
          <small>Copyright &copy; Javabow. Toram Online is ©Asobimo, Inc. All rights reserved. </small>
        </div>
    </footer>
</body>
</html>
