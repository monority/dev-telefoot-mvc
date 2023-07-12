<?php
session_start();
include("header.php");
?>

<div id="login-page">
    <div class="container">
        <h1>Créer un compte</h1>
        <div class="form-content">
            <form action="" method="post">
                <div class="form-group">
                    <label for="input-emai"></label>
                    <input type="email" name="email" id="input-email" placeholder="Email"
                        value="<?= isset($email) ? $email : "" ?>">
                </div>
                <div class="form-group">
                    <label for="input-password"></label>
                    <input type="password" name="password" id="input-password" placeholder="Mot de passe">
                </div>
                <input type="submit" class="btn btn-login" value="Ouvrir une session">
                <p>Vous avez oublié votre mot de passe ?</p>
                <a href="?page=password_reset" class="btn btn-login" >Retrouver mon mot de passe</a>
                <hr>
                <p>Vous ne posséder paz toujours pas de compte ?</p>
                <a href="?page=create" class="btn btn-login">Créer un compte</a>

            </form>

        </div>
    </div>
</div>



<?php
include("footer.php")
    ?>