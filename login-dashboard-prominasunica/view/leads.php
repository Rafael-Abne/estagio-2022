<?php
include_once ('./verifica-session.php');

$pag = "leads";

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
         

       <!-- MODAL NOVO LEAD -->
       <div class="modal fade" tabindex="-1" role="dialog" id="ModalAddLead">
            <div class="modal-dialog dialog-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title color-gray">Cadastrar Lead! <i class="fa fa-user"></i></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <form action="../controller/LeadPosController.php" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <label class="color-gray">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="nome" ><br>

                            <label class="color-gray">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" ><br>

                            <label class="color-gray">Contato/Whatsapp</label>
                            <input type="text" name="telefone" class="form-control telefone-editar" id="telefone" placeholder="contato" pattern="\(\d{2}\) \d{5}-\d{4}$"><br>

                            <label class="color-gray">Área</label>
                            <input type="text" name="area" class="form-control" placeholder="Área"><br>
                        </div>
                        <div class="modal-footer form-inline">
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="save" class="btn btn-success">
                                    Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        
       <!-- MODAL EDITAR LEAD -->
       <div class="modal fade" tabindex="-1" role="dialog" id="ModalEditLead">
            <div class="modal-dialog dialog-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title color-gray">Editar Lead <i class="fa fa-user"></i></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>

                    <form action="../controller/LeadPosController.php" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <label class="color-gray">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome_lead_editar" placeholder="nome" ><br>

                            <label class="color-gray">Cidade</label>
                            <input type="text" name="cidade" class="form-control" id="cidade_lead_editar" placeholder="cidade" ><br>

                            <label class="color-gray">Email</label>
                            <input type="email" name="email" class="form-control" id="email_lead_editar" placeholder="E-mail" ><br>

                            <label class="color-gray">Contato/Whatsapp</label>
                            <input type="text" name="telefone" class="form-control telefone" id="telefone_lead_editar" placeholder="contato" pattern="\(\d{2}\) \d{5}-\d{4}$"><br>

                            <label class="color-gray">Área/Curso</label>
                            <input type="text" name="curso_interesse" class="form-control" id="curso_lead_editar" placeholder="área/curso interesse"><br>

                            <input type="hidden" name="id_lead_editar" id="id_lead_editar"><br>
                        </div>
                        <div class="modal-footer form-inline">
                            <div class="form-group">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="edit" class="btn btn-success">
                                    Atualizar</button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!-- MODAL EXCLUIR LEAD -->
        <div class="modal fade" tabindex="-1" role="dialog" id="modalDeleteLead">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Excluir Lead</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>

                        <form action="../controller/LeadController.php" method="POST" autocomplete="off" >
                            <div class="modal-body">
                                <input type="hidden" name="id" id="id-lead-excluir" class="hidden">
                                Deseja realmente excluir o lead "<b class="nome-lead-excluir"></b>"?
                            </div>
                            <div class="modal-footer form-inline">
                                <div class="form-group">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                </div>

                                <div class="form-group">
                                    <button type="submit" name="delete" id="btn-excluir-form" class="btn btn-primary">Sim</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



            <section class="main-content main-content-sidebar-open">
            
                <h3><label class="color-gray">Leads em Pós-graduação</a></h3>
                <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php">GERAL</a></li>
                        <li class="breadcrumb-item"><a href="escolha_interessados.php">LEADS</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pós-Graduação</a></li>
                    </ol>
                </nav>

                <i class="fa fa-user btn btn-success" data-toggle="modal" data-target="#ModalAddLead"> <b>Adicionar Lead</b></i><br><br>
                
                <hr>

                <!-- CRIAÇÃO DAS MENSAGENS TEMPORARIAS-->
                <?php
                if (isset($_SESSION['success'])) {
                    $msgTemp = $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>

                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $msgTemp; ?>
                    </div>

                    <?php
                } else if (isset($_SESSION['error'])) {
                    $msgTemp = $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>

                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $msgTemp; ?>
                    </div>

                    <?php
                }
                ?>
              

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center text-uppercase">
                                    Açoes
                                </th>
                                <th class="text-center text-uppercase">
                                    Nome
                                </th>
                                <th class="text-center text-uppercase">
                                    Curso/Área
                                </th>
                                <th class="text-center text-uppercase">
                                    Whatsapp
                                </th>
                                <th class="text-center text-uppercase">
                                    Cidade
                                </th>
                                <th class="text-center text-uppercase">
                                    Data
                                </th>
                                <th class="text-center text-uppercase">
                                    Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once ('./table-leads.php'); ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <?php
             include_once ('./imports/import-footer.php');
        ?>
    </body>
</html>
