<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Matrícula | Graduação Ead</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/matricula/matricula.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/matricula/style.css?v=1.8.5') }}">
    <link rel="stylesheet" href="{{ asset('css/matricula/style_bolsas.css?v=1.5.2') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="">
    <meta property="og:title" content="BOLSAS EAD">
    <meta property="og:description" content="BOLSAS EAD | Estude com Bolsa com até 75% de desconto">
    <meta property="og:site_name" content="BOLSAS EAD">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <meta property="og:image:width" content="290">
    <meta property="og:image:height" content="290">
    <meta name="description" content="BOLSAS EAD | Estude com Bolsa com até 75% de desconto">
    <link rel="canonical" href="">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <script src="https://kit.fontawesome.com/b0cdd80e39.js" crossorigin="anonymous"></script>

</head>

<body>
<div class="pre-matricula">
      <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-6 text-center p-0 mt-3 mb-2">
          <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
              <div class="title_form">
                  <h3 class="color-gray text-bold">MATRÍCULA</h3>
              </div>

              <form id="msform">
                  @csrf

                  <!-- progressbar -->

                  <ul id="progressbar">
                      <li class="active" id="course"><strong>MATRÍCULA</strong></li>
                      <li id="confirm"><strong>FINALIZAR</strong></li>
                  </ul>

                  <div class="form-pre-matricula">
                          <div class="row">
                              @include('alerts.errors')
                              <div class="form-item col-md-12">
                                  <label class="fieldlabels">NOME COMPLETO* </label>
                                  <input type="text" name="nome" required
                                      placeholder="Informe seu nome completo" value="{{ old('nome') }}" />
                              </div>



                                <div class="form-item col-md-6">
                                    <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="privacy-police" required>
                                    <label class="form-check-label label-contrato" for="privacy-police">Aceito a <a href="">Política de Privacidade</a></label>
                                    </div>
                                </div>

                              <div class="col-md-12 form-submit">
                                     <input type="submit" name="next-preinscrito" value="Continuar" />
                              </div>

                      </div>
              </form>



          </div>
  </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

<script src="{{ asset('js/lib/mask.js') }}"></script>
<script src="{{ asset('js/masks.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/utils/cpf.js') }}"></script>

    <script>
        $('#msform').on('submit', function(){
            if(!validCpf($('input[name="cpf"]').val())){
                swal("CPF inválido!", "Insira um CPF válido", "error");
                return false;
            }

            swal({
                title: "Realizando sua matrícula",
                text: "Aguarde...",
                imageUrl: "/img/loading.gif",
                showConfirmButton: true,
                allowOutsideClick: false
            });
        });

    </script>


</html>
