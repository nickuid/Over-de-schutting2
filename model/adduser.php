<?php
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 19-1-2017
 * Time: 09:26
 */


/*** begin our session ***/
//session_start();

/*** set a form token ***/
$form_token = md5( uniqid('auth', true) );
//debug
//var_dump($form_token);
/*** set the session form token ***/
$_SESSION['form_token'] = $form_token;
?>
<?php
if(isset($_SESSION["id"])){
    $user = $_SESSION["id"];
}


else {
    echo "
<div class='container'>
<h2>Add user</h2>
<form action='?action=adduser_submit' method='post'>
    <fieldset>
        <p>
            <label for='name'>Username</label>
            <input type='text' id='name' name='name' value='' maxlength='20' />
        </p>
        <p>
            <label for='password'>Password</label>
            <input type='text' id='password' name='password' value='' maxlength='20' />
        </p>
        <p>
            <input type='hidden' name='form_token'
                   value=  $form_token  />
            <input type='submit' value='&rarr; Login' />
        </p>
    </fieldset>
</form>
</div>";
}
