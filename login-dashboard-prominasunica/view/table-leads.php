<?php
include_once ('../dao/LeadsDao.php');
$leadsDao = LeadsDao::getInstance();

$leads = $leadsDao->findAll();
$leads = $leads->fetchAll(PDO::FETCH_OBJ);

?>

<?php
    foreach ($leads as $dados) {
        ?>
        <tr>
            <td class="text-center">
            <i onclick="editLead('<?php echo $dados->id ?>', '<?php echo $dados->nome ?>',  '<?php echo $dados->email ?>',  '<?php echo $dados->whatsapp ?>',  '<?php echo $dados->curso_interesse ?>',  '<?php echo $dados->cidade ?>')" data-toggle="modal" data-target="#ModalEditLead" class=" fa fa-edit" style="cursor: pointer"></i>

                <i class="fa fa-trash pointer color-red" onclick="deleteLead(<?php echo $dados->id; ?>, '<?php echo ($dados->nome); ?>');" data-toggle="modal" data-target="#modalDeleteLead" title="Excluir Lead"></i><br><br>
            </td>
          
            <td class="text-center">
                <span class="perfil-unica"><input type="text" id="nome-atualizar-<?php echo $dados->id ?>" class="form-control" style="width: 200px" value="<?php echo $dados->nome; ?>"></span>
            </td>
            
            <td class="text-center">
                <?php echo $dados->curso_interesse; ?>
            </td>

            <td class="text-center">
               <a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo $whhatsapp; ?>">
                   <?php echo $dados->whatsapp; ?>
               </a>
            </td>

           
            <td class="text-center">
                <?php echo $dados->cidade; ?>
            </td>
        
            <td class="text-center">
                 <?php echo date('d/m/Y', strtotime($dados->data)); ?>
            </td>
          
            <td class="text-center">
                <?php echo $dados->email; ?>
            </td>
           
        </tr>
        <?php

    ?>

    <tr>
        <td colspan="6" class="text-uppercase"><b>nenhum registro encontrado!</b></td>
    </tr>

<?php } ?>

