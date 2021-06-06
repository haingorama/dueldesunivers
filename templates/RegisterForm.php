<?php
include __DIR__ . "/header.php";
?>
<?php
include __DIR__ . "/aside.php";
?>

<div class="container">
    <form class="form-signin" method="POST" action="?action=register" style="position: relative; z-index: index 2;">
        <h2 class="form-signin-heading">Enregistre toi</h2>
        <?php
        if (isset($errorMsg)) {
            echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
        }
        ?>
        <input type="text" class="form-control" name="username" placeholder="Nickname (4 characters)" required="" autofocus="" />
        <input type="password" class="form-control" name="password" placeholder="Password (8 characters)" required="" />
        <label>Retype password:</label>
        <input type="password" class="form-control" name="passwordRetype" placeholder="Password" required="" />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
    </form>
</div>
</body>

<?php
include __DIR__ . "/footer.php";
?>