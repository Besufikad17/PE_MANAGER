<header>
    <div class="corner">
        <a href="#">EMANAGER</a>
    </div>
    <div class="links">
            <a href="https://github.com/Besufikad17/PE_MANAGER">Github</a>
          
            <?php

                $isLoggedIn = true;

                if (is_null($_COOKIE["firstname"])) {
                    $isLoggedIn = false;
                }


                $links = $isLoggedIn ?  "<span>{$_COOKIE["firstname"]}</span>"
                                         :
                                        '<li aria-current="page">
                                            <a href="signup.html"><span>SignUp</span></a>
                                        </li>
                                        <li aria-current="page">
                                            <a href="login.html"><span>Login</span></a>
                                        </li>';
                ?>
                <?= $links ?>
    </div>
</header>