<header>
    <div class="corner">
        <a href="#">EMANAGER</a>
    </div>
    <nav>
        <ul>
            <?php
                $isLoggedIn = true;

                if (is_null($_SESSION["user"])) {
                    $isLoggedIn = false;
                }

                $links = $isLoggedIn ?  "<li aria-current='page'>
                                            <a href='profile.html'><span>{$_SESSION["user"]}</span></a>
                                        </li>" :
                                        '<li aria-current="page">
                                            <a href="signup.html"><span>SignUp</span></a>
                                        </li>
                                        <li aria-current="page">
                                            <a href="login.html"><span>Login</span></a>
                                        </li>';
            ?>
            <?= $links ?>
            <li aria-current="page">
                <a href="https://github.com/Besufikad17/STodoList">Github</a>
            </li>
        </ul>
    </nav>
</header>