<aside>
    <div class="light-box">
        <nav>
            <ul>
                <li>
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <p class="login"><?= $_SESSION['user']->nickname ?></p>
                        <a href="?action=logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="logout-btn">Log out</a>
                    <?php
                    } else {
                    ?>
                        <a href="?action=login" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="login-btn">Log in</a>
                        <a href="?action=register" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" id="signup-btn">Sign up</a>
                    <?php
                    }
                    ?>
                </li>
                <li><a href="#marvel-films">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Marvel films</a></li>
                <li><a href="#dc-films">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        DC films</a></li>
                <li>
                    <?php
                    if (isset($_SESSION['user'])) { //button s'affiche que quand on est connecté
                    ?>
                        <a href="?action=new" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="logout-btn">Add movie</a>
                    <?php
                    }
                    ?>
                </li>
                <form action="/">
                    <input type="search" id="search" name="search" placeholder=" Rechercher">
                    <span></span>
                </form>
                </li>
            </ul>
        </nav>

    </div>
</aside>