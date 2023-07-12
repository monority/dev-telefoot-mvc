<?php

session_start();
include("header.php");

// if (!empty($_POST)) {
//     $email = trim(strip_tags($_POST["email"]));
//     $confirm_email = trim(strip_tags($_POST["confirm_email"]));
//     $password = trim(strip_tags($_POST["password"]));
//     $confirm_password = trim(strip_tags($_POST["confirm_password"]));
//     $firstname = trim(strip_tags($_POST["firstname"]));
//     $lastname = trim(strip_tags($_POST["lastname"]));
//     $errors = array();

//     if (empty($name)) {
//         $errors["name"] = "Le nom de la recette est obligatoire";
//     }
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors["email"] = "L'email n'est pas valide";
//     }
//     $uppercase = preg_match("/[A-Z]/", $password);
//     $lowercase = preg_match("/[a-z]/", $password);
//     $number = preg_match("/[0-9]/", $password);

//     if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
//         $errors["password"] = "Le mot de passe doit contenir 8 caractères minimum, une lettre majuscule, une lettre minuscule et un chiffre";
//     }
//     if ($_POST["password"] != $_POST["confirm_password"]) {
//         $errors["confirm_password"] = "Les mot de passe ne correspondent pas";
//     }
//     if ($_POST["email"] != $_POST["confirm_email"]) {
//         $errors["confirm_email"] = "Les emails ne correspondent pas";
//     }

// }

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
                    <input type="email" name="confirm_email" id="input-confirm-email"
                        value="<?= isset($confirm_email) ? $confirm_email : "" ?>">
                    <?php
                    if (isset($errors["confirm_email"])) {
                        ?>
                        <p>
                            <?= $errors["confirm_email"] ?>
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
                    <input type="password" name="confirm_password" id="input-confirm-password">
                    <?php
                    if (isset($errors["confirm_password"])) {
                        ?>
                        <p>
                            <?= $errors["confirm_password"] ?>
                        </p>
                        <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="input-firstname">Prénom *</label>
                    <input type="text" name="firstname" id="input-firstname"
                        value="<?= isset($firstname) ? $firstname : "" ?>">
                </div>
                <div class="form-group">
                    <label for="input-lastname">Nom *</label>
                    <input type="text" name="lastname" id="input-lastname"
                        value="<?= isset($lastname) ? $lastname : "" ?>">
                </div>
                <div class="form-bottom">
                    <h4>*Champs obligatoires</h4>
                    <input type="submit" class="btn" value="ENVOYER">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php")
    ?>