<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="bg-success bg-opacity-25">

    <!-- <h1>Hello World!</h1> -->
    <nav class="navbar navbar-expand bg-success bg-opacity-50">
        <div class=" container">
            <div id="navbarNav">
                <ul class="navbar-nav">
                    @foreach($pages as $page)
                    <li class="nav-item">
                        <a class="nav-link" href="#"> {{ $page }} </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>


</body>

</html>