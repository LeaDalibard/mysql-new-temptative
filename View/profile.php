<?php require 'includes/header.php' ?>

<!doctype html>
<html lang="en">
<head>
    <title>Profile</title>
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
    <?php if(!empty ($messageDelete)):?>
        <div class="alert alert-success" role="alert">
            <?php echo $messageDelete?>
        </div>
    <?php endif;?>

    <?php if(empty ($messageDelete)):?>
    <div class="d-flex justify-content-center">
        <img class="m-3 w-25 rounded-circle text-center p-2" src="<?php echo $profileStudent->getImage(); ?>"
             alt="Profile picture">
    </div>
    <div class="media-body text-center">
        <h5 class="mt-0"><?php echo $profileStudent->getFirstName() . " " . $profileStudent->getLastName(); ?></h5>
        <p><?php echo $profileStudent->getEmail(); ?></p>
    </div>

    <?php if ($profileStudent->getId() == $_SESSION['user']): ?>
        <form method="post">
            <input type="submit" name="update" value="Update" class="btn btn-primary">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>

    <?php endif; ?>
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