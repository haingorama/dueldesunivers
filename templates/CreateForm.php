<?php
include __DIR__ . "/header.php";
?>
<?php
include __DIR__ . "/aside.php";
?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-4">HEY YOU !!!</h1>
            <blockquote class="blockquote text-center">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <footer class="blockquote-footer">Maybe someone famous from <cite>Internet</cite></footer>
            </blockquote>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">

            <form class="form-signin" method="POST" action="?action=new">
                <h2 class="form-signin-heading">Registration</h2>
                <?php
                if (isset($errorMsg)) {
                    echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
                }
                ?>
                <input type="text" class="form-control" name="title" placeholder="Title" required="" autofocus="" />
                <input type="text" class="form-control" name="author" placeholder="Author" required="" autofocus="" />
                <input type="text" class="form-control" name="date" placeholder="Date" required="" autofocus="" />
                <input type="text" class="form-control" name="viewOrder" placeholder="Ordre du visionnage" required="" autofocus="" />
                <input type="file" class="form-control" name="image" placeholder="Image" required="" autofocus="" />

                <select style="color: blue;" lass="form-control" name="whichCategory" id="whichCategory">
                    <option value="0">Choisie l'univers</option>
                    <option value="Dc">Dc</option>
                    <option value="Marvel">Marvel</option>
                    <?php //si un tableau à été créer à voir + tard
                    foreach ($movie as $oneUniverse) {
                    ?>
                        <option value="<?php $oneUniverse->id ?>"> <?php $oneUniverse->category ?> </option>
                    <?php
                    }
                    ?>
                </select>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
            </form>

        </div>
    </div>
</div>

<?php
include __DIR__ . "/footer.php";
?>