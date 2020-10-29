<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<section class="container">


    <p><a href="index.php">Back to homepage</a></p>

    <?php if(!empty($messageregister)):?>
        <div class="alert alert-danger" role="alert">
            <?php echo $messageregister?>
        </div>
    <?php endif;?>

    <?php if(isset($messagesucess)):?>
        <div class="alert alert-success" role="alert">
            <?php echo $messagesucess?>
        </div>
    <?php endif;?>

    <form method="post" id="create-user">

        <h2>Register</h2>

        <input type="hidden" name="id" value=""/>

        <p>
            <label for="first_name">First name:</label>
            <input type="text" name="first_name" id="first_name" required value="<?php echo $_SESSION["first_name"]; ?>"/>
        </p>
       <p>
           <label for="last_name">Last name:</label>
           <input type="text" name="last_name" id="last_name" required value="<?php echo $_SESSION["last_name"]; ?>"/>
       </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" required value="<?php echo $_SESSION["email"]; ?>"/>
        </p>

        <p>
            <label for="psw">Password:</label>
            <input type="password" name="psw" id="psw" required value=""/>
        </p>

        <p>
            <label for="pswrpt">Password repeat:</label>
            <input type="password" name="pswrpt" id="pswrpt" required value=""/>
        </p>

        <p>
            <input type="submit" name="register" value="Register"/>
        </p>


    </form>


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