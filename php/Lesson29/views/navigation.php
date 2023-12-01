<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a>



        <ul class="navbar-nav">
            <?php if ($_SERVER['PHP_SELF'] ==  "/index.php") : ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                </li>

            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a>
                </li>
            <?php endif; ?>

            <?php if ($_SERVER['PHP_SELF'] ==  "/about.php") : ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about.php">About</a>
                </li>

            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/about.php">About</a>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION["user"])) : ?>
                <?php if ($_SERVER['PHP_SELF'] ==  "/app/users/logout.php") : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/app/users/logout.php">Logout</a>
                    </li>

                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/app/users/logout.php">Logout</a>
                    </li>
                <?php endif; ?>
            <?php else : ?>
                <?php if ($_SERVER['PHP_SELF'] ==  "/login.php") : ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>

                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login.php">Login</a>
                    </li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>