<aside>
    <div class="light-box">
        <nav>
            <ul>
                <li>

                    <?php
                    if (isset($_SESSION['user'])) {
                    ?> <a href="?action=logout" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" id="logout-btn">Logout</a>
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
                    <form action="/">
                        <input type="search" id="search" name="search" placeholder=" Rechercher">
                    </form>
                </li>
            </ul>
        </nav>

    </div>
</aside>