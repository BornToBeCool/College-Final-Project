<section>

<div class="formContainer">
    <div class="title">Registration</div>

    <form action="register.php" method="post" onsubmit="validateRegForm()">

        <div class="user-details">
            <div class="input-box">
                <span class="details">First Name</span>
                <input type="text" name="firstname" id="firstName" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" name="lastname" id="lastName" placeholder="Enter your Username" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="email" id="email" placeholder="Enter your Email" required>
            </div>
            <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" placeholder="Enter your Phone Number" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name="password" id="password" placeholder="Enter your Password" required>
            </div>
            <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" name="confirm" id="confirmPassword" placeholder="Confirm your Password" required>
            </div>
        </div>

        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender-title">Gender</span>
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Male</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Female</span>
                </label>
                <label for="dot-3">
                    <span class="dot three"></span>
                    <span class="gender">Prefer not to say</span>
                </label>
            </div>
        </div>

        <div class="button">
            <input type="submit" name="submit" id="btnSubmit" value="Register">
        </div>
    </form>
</div>
</section>