<?php
include_once 'header.php';

if (isset($_SESSION["useruid"])) {
    echo "<p style='color:red; font-size:20px; font-weight:800; text-align:center; margin:20px;'> Hello there <span style='color:#00A97F;   text-transform: uppercase; 
    font-size:18px'>". $_SESSION["useruid"] . "</span> </p>
    <p style='text-align:center; margin:20px;'>Welcome Back</p>
    <p style='text-align:center; margin:20px;'>Click <a href='https://apneck-eclarkhalid.netlify.app/'>Here</a> To see some magic!!!</p>
    ";

    
} else {
    echo "<section class='home p-5 m-auto'>
            <div class='container-xxl'>
                <div class='row d-flex align-items-center justify-content-center'>
                    <div class='card col-6 text-center'>
                        <div class='card-body p-3'>
                            <div class='text-center mb-4'>
                                <h2 class='mb-3'>You should sign up to be able to use our site</h2>
                                <a href='signup.php' onclick='window.location.href='/signup.php';'><button>Sign Up</button></a>
                                
                            </div>
                            <div class='mb-3'>
                                <h2 class='mb-3'>Or else</h2>
                                <a href='login.php' onclick='window.location.href='/login.php';'><button>Log In</button></a>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </div>
        </section>";
}
?>
<div class="d-flex align-items-center justify-content-center">
    
<button class='btn'><a onclick="window.location.href='logout.inc.php';">Logout</a> </button>

</div>
