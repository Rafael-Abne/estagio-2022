<?php

session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once('./imports/import-head.php'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <section>
                <div class="login-content">
                    <img src="../resources/img/logo-unica.png" class="img-responsive logo">

                    <form action="../controller/LoginController.php" method="POST" id="form-autentica" autocomplete="off" novalidate class="needs-validation form-autentica">

                        <?php
                        if (isset($_SESSION['error'])) {
                            $msgTemp = $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>

                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong style="font-size: 13px;"><?php echo $msgTemp; ?></strong>
                            </div>

                            <?php
                        }
                        ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label for="user-form" class="control-label">Usuário</label>
                                    <input type="text" name="user" class="form-control user-form" id="user-form" required>

                                    <div class="invalid-feedback">
                                        Preencha esse campo.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group has-feedback">
                                    <label for="password-form" class="control-label">Senha</label>

                                    <input type="password" name="password" class="form-control password-form" id="password-form" required>

                                    <div class="invalid-feedback">
                                        Preencha esse campo.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-prominas"><span class="glyphicon glyphicon-send"></span> Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>

        <?php include_once ('./imports/import-footer.php'); ?>
        
    </body>
</html>