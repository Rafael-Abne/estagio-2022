<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link  rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <small style='color: #000;'>Bem vindo, <span style="color: #d42628;">{{Auth()->user()->name}}</span></small>
          <i id="botao_op" class="fa fa-angle-down"></i>
          <!-- @if(Auth()->user()->photo)
            <img class="img-profile rounded-circle" src="{{Auth()->user()->photo}}">
          @else
            <img class="img-profile rounded-circle" src="{{asset('backend/img/avatar.png')}}">
          @endif -->
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="">
            <i class="fas fa-user fa-sm fa-fw mr-2" style="color: #d42628"></i>
            Perfil
          </a>
          <a class="dropdown-item" href="">
            <i class="fas fa-key fa-sm fa-fw mr-2" style="color: #d42628"></i>
            Alterar senha
          </a>
          <a class="dropdown-item" href="">
            <i class="fas fa-cogs fa-sm fa-fw mr-2" style="color: #d42628"></i>
            Configurações
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                 <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2" style="color: #d42628"></i> {{ __('Sair') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
      </li>

    </ul>

  </nav>
