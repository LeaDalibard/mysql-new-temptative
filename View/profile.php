<?php require 'includes/header.php' ?>


<section class="container">

    <p><a class="text-light" href="index.php ">Back to homepage</a></p>
    <?php if(!empty ($messageDelete)):?>
        <div class="alert alert-success" role="alert">
            <?php echo $messageDelete?>
        </div>
    <?php endif;?>
    <?php if(isset ($messageUpdate)):?>
        <div class="alert alert-success" role="alert">
            <?php echo $messageUpdate?>
        </div>
    <?php endif;?>

    <?php if(empty ($messageDelete) && empty ($messageUpdate) ):?>
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
            <input type="submit" name="update" value="Update" class="btn btn-light">
            <input type="submit" name="delete" value="Delete" class="btn btn-light">
        </form>
    <?php endif; ?>

    <?php endif;?>
    <?php if(isset($_POST['update'])):?>
    <form method="post" id="update-user">

        <h2>Update</h2>

        <input type="hidden" name="id" value=""/>

        <p>
            <label for="new_first_name">First name :</label>
            <input type="text" name="new_first_name" id="new_first_name" required value="<?php echo $profileStudent->getFirstName(); ?>"/>
        </p>
        <p>
            <label for="new_last_name">Last name :</label>
            <input type="text" name="new_last_name" id="new_last_name" required value="<?php echo $profileStudent->getLastName(); ?>"/>
        </p>
        <p>
            <label for="new_email">Email :</label>
            <input type="text" name="new_email" id="new_email" required value="<?php echo $profileStudent->getEmail(); ?>"/>
        </p>

        <p>
            <label for="new_image">Load a new image url :</label>
            <input type="text" name="new_image" id="new_image" required value="<?php echo $profileStudent->getImage(); ?>"/>
        </p>
        <p>
            <input type="submit" name="update" value="Update"/>
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
<?php require 'includes/footer.php' ?>ml>