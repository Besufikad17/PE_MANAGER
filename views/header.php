<header>
    <div class="corner">
        <a href="#">EMANAGER</a>
    </div>
    <div class="links">
            <a href="https://github.com/Besufikad17/PE_MANAGER">Github</a>
          
            <?php

                $isLoggedIn = true;

                if (is_null($_COOKIE["email"])) {
                    $isLoggedIn = false;
                }


                $links = $isLoggedIn ?  "<a href='views/profile.php'>{$_COOKIE["email"]}</a>" :
                                        '<a href="login.html">Login</a>';
                ?>
                <?= $links ?>
    </div>
</header>