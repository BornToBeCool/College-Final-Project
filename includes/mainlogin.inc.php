<section>
        <div class="formContainer">
            <div class="title">Log In</div>
            <form action="./login.php" method="post" name="login">

                <div class="user-details">
                     <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your Password" required>
                    </div>
                    
                    <div class="register">
                        Don't have an account ?
                        <a href="./register.php" class="registerLink">Register Here</a>
                    </div>
                    
                </div>

                <div class="button">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </section>