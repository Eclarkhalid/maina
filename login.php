<?php
include_once 'header.php';
?>

<section class="login p-5" style="height: 100vh;">
    <div class="container-xxl">
        <div class="row justify-content-center align-items-center p-5">
            <div class="col-lg-6">
                <form action="includes/login.inc.php" method="post">
                    <div class="card p-3">
                        <h1 class="login fs-2 text-center mb-3">Login</h1>

                        <div class="inputBox mb-2">
                            <label for="email">Email Address</label>
                            <input type="text" name="name" class="form-control" id="email" placeholder="Enter email address" required>
                        </div>

<<<<<<< HEAD
            <div class="inputBox mb-2">
                <label for="email">Enter Your Email</label> <br>
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter email address" required>
=======
                        <div class="inputBox mb-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter a password" required>
                        </div>

                        <div class="d-flex justify-content-between p-3">
                            <p>Don't Have an account?</p>
                            <a href="signup.php">Sign Up</a>
                        </div>

                        <button type="submit" class="enter" name="submit">Login</button>
                    </div>
                </form>
>>>>>>> af101460c3f3421cb47f21fcff5e2064f44e7cbc
            </div>
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="img/img6.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Hey There</h5>
                                <p class="card-text">You are a step away from becoming one of the greatest authors.
                                    Login to finish setting up your account.</p>
                                <p class="card-text"><small class="text-body-secondary">&#128522;</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
