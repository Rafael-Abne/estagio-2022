<?php
include_once ('./verifica-session.php');
$pag = "dashboard";
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php
    include_once('./imports/import-head.php');
    ?>

<body>
    <?php
        include_once('./imports/import_header.php');
        include_once('./imports/import_menu.php');
        ?>

    <div class="container-fluid">
        <section class="main-content main-content-sidebar-open painel">
            <h3 style="color:#736f6d">DASHBOARD</h3>
            <div class="row">
               <div class="col-md-3" onclick="location.href='leads.php' ">
                    <div class="card card-prominas">
                        <div class="card-body">
                            <h5 class="card-title color-gray">
                            <i class="fas fa-user-tag fa-4x"></i></i><br><br> LEADS</h5>
                        </div>
                    </div>
                </div>
            
            </div>
    </section>

    <?php
        include_once ('./imports/import-footer.php');
        ?>
</body>

</html>