//INICIALIZACAO DO MENU E FECHAMENTO DO MODAL LOADING, APOS O CARREGAMENTO DO DOCUMENTO
$(document).ready(function() {
    init();
});

var init = function() {

    $('.sidebar-open').on("click", function() {
        if ($('.sidebar').hasClass('fadeInMenu')) {
            $('.sidebar').removeClass('fadeInMenu');
            $('.main-content').removeClass('main-content-sidebar-open');
            $('footer').removeClass('footer-sidebar-open');
        } else {
            $('.sidebar').addClass('fadeInMenu');
            $('.main-content').addClass('main-content-sidebar-open');
            $('footer').addClass('footer-sidebar-open');
        }
    });

    $('.sidebar-menu > li.have-children > a').on('click', function(i) {
        i.preventDefault();
        if (!$(this).parent().hasClass('active')) {
            $('.sidebar-menu li ul').slideUp();
            $(this).next().slideToggle();
            $('.sidebar-menu li').removeClass('active');
            $(this).parent().addClass('active');
        } else {
            $(this).next().slideToggle();
            $('.sidebar-menu li').removeClass('active');
        }
    });

    redimensionar();
};

//SCRIPT PARA O POSICIONAMENTO DO RODAPE
var redimensionar = function(e) {
    var alturaDoc = $(document).innerHeight() + 90;
    var alturaJan = screen.height;

    if (alturaDoc > alturaJan) {
        $('footer').css('position', 'relative');
    } else {
        $('footer').css('position', 'absolute');
    }
};


var deleteLead = function(id, nome) {
    $('#id-lead-excluir').val(id);
    $('.nome-lead-excluir').text(nome);
};


var editLead = function(id, nome, email, telefone, curso, cidade) {
    $('#nome_lead_editar').val(nome);
    $('#cidade_lead_editar').val(cidade);
    $('#email_lead_editar').val(email);
    $('#telefone_lead_editar').val(telefone);
    $('#curso_lead_editar').val(curso);
    $('#id_lead_editar').val(id);
}