<?php

include_once 'header.php'
?>


<section class="login p-5">
<div class="container-xxl">
     <div class="row d-flex align-items-center justify-content-center">
        <div class="col-4">
        <form action="includes/login.inc.php" method="post">
        <div class="card p-3">
        <h1 class="login fs-2 text-center mb-3">Login</h1>

            <div class="inputBox mb-2">
                <label for="email">Enter Your Email</label> <br>
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Enter email address" required>
            </div>

            <div class="inputBox mb-2">
                <label for="passsword">Enter Paswword</label>
            <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Enter a password" required>
            </div>

            <div class="d-flex justify-content-between p-3">
            <p>Don't Have an account?  </p>
            <a href="signup.php" >Sign Up</a>
            
            </div>
            <button type="submit" class="enter" name="submit">Login</button>

        </div>
        </form>
        </div>
     </div>
    </div>
</section>