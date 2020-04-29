<?php
include_once 'header.php';
?>

    <section class="main-container">
        <div class = main-wrapper>
            <h2>Sign-up</h2>
                <form class = "signup-form" action="includes/signup-inc.php" method="POST">
                    <input type="text" name = "name" placeholder="Name">
                    <input type="number" name = "age"" min = "1" max = "120" placeholder = "age">
                    <input type="email" name = "email" placeholder="Email">
                    <input type="password" name = "password" placeholder="Password">
                    <input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
					<input type="radio" name="gender" value="Other"> Other
                    <button type="submit" name = "submit">Sign up</button>
                </form>
        </div>
    </section>

<?php
include_once 'footer.php';
?>