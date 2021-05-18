<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="display-4">KEEP CALM & LOVE FOXES</h1>
            <blockquote class="blockquote text-center">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <footer class="blockquote-footer">Maybe someone famous from <cite>Internet</cite></footer>
            </blockquote>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <form class="form-signin" method="POST" action="?action=register">
                <h2 class="form-signin-heading">Registration</h2>
                <?php
                if (isset($errorMsg)) {
                    echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
                }
                ?>
                <input type="text" class="form-control" name="title" placeholder="Title (>= 2 character)" required="" autofocus="" />
                <input type="text" class="form-control" name="author" placeholder="Author (>= 4 characters)" required="" autofocus="" />
                <input type="text" class="form-control" name="date" placeholder="date (4 characters)" required="" autofocus="" />

                <select class="form-control" name="languageId" id="languageId">
                    <option value="Dc">
                        <?php
                        foreach ($variable as $key => $value) {
                            # code...
                        }
                        ?>
                        /option>
                    <option value="Marvel"></option>
                </select>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </form>
        </div>
    </div>
</div>