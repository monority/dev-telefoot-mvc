<?php
session_start();
include("header.php")
    ?>

<div id="login-page">
    <div class="container">
        <div class="wrap-img">
            <a href="?page=home"> <img src="../assets/img/telefoot-color-bg-01.svg" alt=""></a>
    
        </div>
        <div class="form-content">
        <p><?= isset($message) ? $message : "" ?></p>
            <form action="" method="post">
                <div class="form-group">
                    <label for="input-email"></label>
                    <input type="email" name="email" id="input-email" placeholder="Email"
                        value="<?= isset($email) ? $email : "" ?>">
                </div>
                <div class="form-group">
                    <label for="input-password"></label>
                    <input type="password" name="password" id="input-password" placeholder="Mot de passe">
                </div>
                <input type="submit" class="btn btn-login" value="Ouvrir une session">
            </form>
            <div class="bottom-wrap">
                <p>Vous avez oublié votre mot de passe ?</p>
                <a href="?page=password_reset" class="btn btn-login">Retrouver mon mot de passe</a>
                <hr>
                <p>Vous ne posséder paz toujours pas de compte ?</p>
                <a href="?page=create" class="btn btn-login">Créer un compte</a>
            </div>
    </div>
</div>
</div>



<?php
?>