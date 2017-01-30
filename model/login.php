<?php
if(isset($_SESSION["id"])){
    $user = $_SESSION["id"];
    echo "<div class='container'>";
    echo "Je bent al ingelogd $user. Klik <a href='?action=logout'>hier</a> om uit te loggen";
    echo "</div>";
}

else {

    echo "<div class='container'>";

    echo "<h2>Login Here</h2>";
    echo "<form action='?action=login_submit' method='post'>";
    echo "<fieldset>";
    echo "<p>";
    echo "<label for='name'>Username</label>
            <input type='text' id='name' name='name' value='' maxlength='20' />
        </p>
        <p>
            <label for='password'>Password</label>
            <input type='text' id='password' name='password' value='' maxlength='20' />
        </p>
        <p>
          <input type='submit' value='→ Login' />
        </p>
    </fieldset>
</form>
</div>";


}