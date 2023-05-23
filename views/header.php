<header>
    <div class="corner">
        <a href="#">EMANAGER</a>
    </div>
    <nav>
        <ul>
            <li aria-current="page">
                <a href="https://github.com/Besufikad17/PE_MANAGER">Github</a>
            </li>
            <?php

                include "./models/user.php";

                $isLoggedIn = true;

                if (is_null($_SESSION["user"])) {
                    $isLoggedIn = false;
                }

                // echo $object->getFname();
            //  "<li aria-current='page'>
            //                                 <a href='profile.html'><span>{$object->getFname()}</span></a>
            //                             </li>"
                $links = $isLoggedIn ?  var_dump($_SESSION["user"])
                                         :
                                        '<li aria-current="page">
                                            <a href="signup.html"><span>SignUp</span></a>
                                        </li>
                                        <li aria-current="page">
                                            <a href="login.html"><span>Login</span></a>
                                        </li>';
                ?>
                <?= $links ?>
        </ul>
    </nav>
</header>