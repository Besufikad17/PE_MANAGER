<?php

    function toggle() {
        echo '<div class="bg">
                    <div class="center">
                        <div class="modal">
                            <div class="form-container">
                                <h1 class="header">
                                    Add Employee
                                </h1>
                                <img class="container" src="" alt="pfp">
                                <form method="post" action="" class="form">
                                    <input type="file" name="img">
                                    <input class="input" type="text" name="name" placeholder="name">
                                    <div class="form-row">
                                        Male: <input type="radio" name="gender" value="male">
                                        Female: <input type="radio" name="gender" value="female">
                                    </div>
                                    <input class="input" type="date" name="date_of_birth">
                                    <input class="input" type="number" name="salary" placeholder="salary" min=5000> 
                                    <div class="action-center">
                                        <button class="secondary">Add</button>
                                        <button class="danger">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
    }
?>