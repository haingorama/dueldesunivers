{% include '/header.php' %}

{% include '/aside.php' %}

<div class="container">
    <div class="add-card" style="position: relative; z-index: index 2;">
        <h1 style="margin-top: 90px;" class="display-4">HEY YOU !!!</h1>

        <form method="POST" action="/new">
            <h2 class="form-signin-heading">Add a movie</h2>
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

            <select style="color: blue;" lass="form-control" name="categoryId" id="categoryId">
                <option value="0">Choose an universe</option>
                <?php
                foreach ($categories as $oneUniverse) {
                ?>
                    <option value="<?= $oneUniverse->id ?>"> <?= $oneUniverse->category ?> </option>
                <?php
                }
                ?>
            </select>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
        </form>
    </div>
</div>

{% include '/footer.php' %}