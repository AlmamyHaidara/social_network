<?php
if (isset($_POST['register'])) {
    //Contenneur des erreurs

    $errors = [];
    extract($_POST);
    if (empty($name)) {
        $errors['name'] = "Veuiller saisir votre nom";
    }
    if (empty($lastname)) {
        $errors['lastname'] = "Veuiller saisir votre lastname";
    }
    if (empty($email)) {
        $errors['email'] = "Veuiller saisir votre lastname";
    }
    if (empty($birthday)) {
        $errors['birthday'] = "Veuiller saisir votre lastname";
    }
    if (empty($password)) {
        $errors['password'] = "Veuiller saisir votre password";
    }
    if (empty($passwordConfirm)) {
        $errors['passwordConfirm'] = "Veuiller confirmer vautre password";
    }
}

require 'partials/header.php';

require 'partials/navabar.php'; ?>
<h2 class="text-center">

</h2>
<div class="row">
    <div class="col-8">
    </div>
    <div class="col-4">
        <div class="bg-light mt-2 p-3">
            <h2 class="text-center">
                Création de compte
            </h2>
            <form action="register.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="name">Nom :</label>
                    <input type="text" name="name" placeholder="Nom" class="form-control">

                    <?php

                    if (isset($errors) && isset($errors['name'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $errors['name'];
                            ?>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="lastname">Prenom :</label>
                    <input type="text" name="lastname" placeholder="Prenom" class="form-control">

                    <?php

                    if (isset($errors) && isset($errors['lastname'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $errors['lastname'];
                            ?>
                        </div>

                    <?php
                    }
                    ?>

                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" placeholder="Adresse email" class="form-control">
                    <?php

                    if (isset($errors) && isset($errors['email'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $errors['email'];
                            ?>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="date">Date de naissance :</label>
                    <input type="date" name="birthday" class="form-control">
                    <?php

                    if (isset($errors) && isset($errors['birthday'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $errors['birthday'];
                            ?>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                    <?php

                    if (isset($errors) && isset($errors['password'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $errors['password'];
                            ?>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="confirmPasword">Confirmer Mot de passe</label>
                    <input type="password" name="passwordConfirm" placeholder="Confirmer Mot de passe" class="form-control">
                    <?php

                    if (isset($errors) && isset($errors['passwordConfirm'])) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $errors['passwordConfirm'];
                            ?>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <div class="text-center mt-2">
                    <input type="submit" value="Inscription" name="register" class="btn btn-success btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require 'partials/footer.php';
