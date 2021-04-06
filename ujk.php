<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>
    <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="nm">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="eml">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="psw">
        </div>
        <button type="submit" class="btn btn-primary" name="masuk">Submit</button>
    </form>

    <!-- <?php
    // function login($nama, $email, $pass)
    // {
    //     if ($nama == 'admin' && $email == 'admin@gmail.com' && $pass == '12345') {
    //         $hasil = true;
    //     } elseif ($nama == 'user' && $email == 'useradmin@gmail.com' && $pass == 'abcde') {
    //         $hasil = true;
    //     } else {
    //         $hasil = false;
    //     }
    //     return $hasil;
    // }
    // if (isset($_POST['masuk'])) {
    //     if (login($_POST['nm'], $_POST['eml'], $_POST['psw'])) {
    //         echo 'Halo Admin, Email dan Password yang anda masukan benar.';
    //     } elseif (login($_POST['nm'], $_POST['eml'], $_POST['psw'])) {
    //         echo 'Halo User, Email dan Password yang anda masukan benar.';
    //     } else {
    //         echo 'Halo, Email dan Password yang anda masukan salah.';
    //     }
    // }
    ?> -->

    <?php
    if (isset($_POST['masuk'])) {
        if ($_POST['nm'] == 'admin' && $_POST['eml'] == 'admin@gmail.com' && $_POST['psw'] == 12345) {
            echo 'Halo Admin, Email dan Password yang anda masukan benar.';
        } elseif ($_POST['nm'] == 'user' && $_POST['eml'] == 'useradmin@gmail.com' && $_POST['psw'] == 'abcde') {
            echo 'Halo User, Email dan Password yang anda masukan benar.';
        } else {
            echo 'Halo, Email dan Password yang anda masukan salah.';
        }
    }
    ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>