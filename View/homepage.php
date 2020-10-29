<?php require 'includes/header.php' ?>
<!doctype html>
<html lang="en">
<head>
    <title>Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<section class="container">
    <?php if(empty($_SESSION["user"])):?>
    <p><a href="index.php?page=register" class="btn btn-primary m-3">Register</a></p>
    <p><a href="index.php?page=login" class="btn btn-primary m-3">Login</a></p>
    <?php endif;?>
    <?php if(!empty($_SESSION["user"])):?>
        <table class="table table-striped table-wide">
            <thead>
            <tr>
                <th width="40%">Sport</th>
                <th width="40%">Name</th>
                <td colspan="2" width="20%"></td>
            </tr>
            </thead>
            <tbody>

                <tr>
                    <td>Student</td>
                    <td>name</td>
                </tr>
            </tbody>


        </table>
        <form method="post" id="logout">
            <p>
                <input type="submit" name="logout" value="Logout" class="btn btn-primary m-3"/>
            </p>
        </form>



    <?php endif;?>

</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>