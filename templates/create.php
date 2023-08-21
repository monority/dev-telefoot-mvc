<?php

session_start();
include("header.php");
?>

<div id="create-page">
    <div class="container">
        <h1>Créer un compte</h1>
        <div class="form-content">
            <form action="" method="post">
                <div class="form-group">
                    <label for="input-email">email *</label>
                    <input type="email" name="email" id="input-email" value="<?= isset($email) ? $email : "" ?>">
                    <?php
                    if (isset($errors["email"])) {
                        ?>
                        <p>
                            <?= $errors["email"] ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="input-confirm-email">confirmer email *</label>
                    <input type="email" name="confirmEmail" id="input-confirm-email"
                        value="<?= isset($confirmEmail) ? $confirmEmail : "" ?>">
                    <?php
                    if (isset($errors["confirmEmail"])) {
                        ?>
                        <p>
                            <?= $errors["confirmEmail"] ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="input-password">mot de passe *</label>
                    <input type="password" name="password" id="input-password">
                    <?php
                    if (isset($errors["password"])) {
                        ?>
                        <p>
                            <?= $errors["password"] ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="input-confirm-password">confirmer mot de passe *</label>
                    <input type="password" name="confirmPassword" id="input-confirm-password">
                    <?php
                    if (isset($errors["confirmPassword"])) {
                        ?>
                        <p>
                            <?= $errors["confirmPassword"] ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="input-firstname">Prénom *</label>
                    <input type="text" name="firstname" id="input-firstname"
                        value="<?= isset($firstname) ? $firstname : "" ?>">
                    <?php
                    if (isset($errors["firstname"])) {
                        ?>
                        <p>
                            <?= $errors["firstname"] ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="input-lastname">Nom *</label>
                    <input type="text" name="lastname" id="input-lastname"
                        value="<?= isset($lastname) ? $lastname : "" ?>">
                    <?php
                    if (isset($errors["lastname"])) {
                        ?>
                        <p>
                            <?= $errors["lastname"] ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="form-bottom">
                    <h4>*Champs obligatoires</h4>
                    <input type="submit" class="btn" value="Valider">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php")
    ?>