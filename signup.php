<?php

include_once 'header.php'
?>


<section class="signup p-5">
<div class="container-xxl">
     <div class="row d-flex align-items-center justify-content-center">
        <div class="col-4">
        <form action="includes/signup.inc.php" method="post">
            <div class="card p-3">
            <h1 class="signup fs-2 text-center mb-3">Sign Up</h1>
                <div class="inputBox1 mb-2">

                <div class="inputBox1 mb-2">
                <label>Enter First Name</label> <br>
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Enter your name" required />
                </div>

                <div class="inputBox mb-2">
                    <label>Enter Your Email</label> <br>
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Enter email address" required />
                </div>

                <div class="inputBox mb-2">
                    <label>Enter a Nickname</label>
                <input type="name" name="uid" class="form-control" id="floatingInput" placeholder="Enter a user Id" required />
                </div>

                <div class="inputBox mb-2">
                    <label>Enter Password</label>
                <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Enter a password" required />
                </div>

                <div class="inputBox mb-2">
                <label>Confirm Password</label>
                <input type="password" name="repeat" class="form-control" id="floatingInput" placeholder="Confirm Password" required />
                </div>

                <div class="d-flex justify-content-between p-3">
                <p>Have an account?  </p>
                <a href="login.php" >Log in</a>
                
                </div>
                <button type="submit" class="enter" name="submit">Sign up</button>

            </div>
        </form>
        </div>
     </div>
    </div>
</section>