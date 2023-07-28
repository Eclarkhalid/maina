<?php
include_once 'header.php';
?>

<section class="signup p-5" style="height: 100vh;">
    <div class="container-xxl">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <form action="includes/signup.inc.php" method="post">
                    <div class="card p-3">
                        <h1 class="signup fs-2 text-center mb-3">Sign Up</h1>
                        <div class="inputBox1 mb-2">
                            <label>Enter First Name</label> <br>
                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Enter your name" required />
                        </div>
                        <div class="inputBox1 mb-2">
                            <label for="email">Enter Your Email</label> <br>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" required />
                        </div>
                        <div class="inputBox1 mb-2">
                            <label>Enter First Name</label> <br>
                            <input type="name" name="uid" class="form-control" id="floatingInput" placeholder="Enter a user Id" required />
                        </div>
                        

                        <div class="inputBox mb-2">
                            <label for="password">Enter Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter a password" required />
                        </div>

                        <div class="inputBox mb-2">
                            <label for="repeat">Confirm Password</label>
                            <input type="password" name="repeat" class="form-control" id="repeat" placeholder="Confirm Password" required />
                        </div>

                        <div class="d-flex justify-content-between p-3">
                            <p>Have an account?</p>
                            <a href="login.php">Log in</a>
                        </div>

                        <button type="submit" class="enter" name="submit">Sign up</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="card" style="width: 18rem;">
                    <img src="img/img3.png" class="card-img-top" alt="blog">
                    <div class="card-body">
                        <h5 class="card-title">Your Culinary Oasis</h5>
                        <p class="card-text">Discover a world of mouthwatering recipes from diverse cuisines. Your Culinary Oasis offers easy-to-follow instructions, catering to all dietary preferences. Connect with fellow food enthusiasts, explore expert blogs, and ignite your passion for cooking. Happy cooking!</p>
                        <h3 class="btn">Sign Up and Become an Author</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


