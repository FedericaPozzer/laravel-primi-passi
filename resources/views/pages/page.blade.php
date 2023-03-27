<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body class="bg-warning p-2 text-dark bg-opacity-50">
    <h2 class="mt-5 text-center">Welcome to {{ $page }}!</h2>
    <div class="text-center mt-5">
        <a href="/"><button type="button" class="btn btn-outline-success">Go Back</button></a>
    </div>
</body>
</html>