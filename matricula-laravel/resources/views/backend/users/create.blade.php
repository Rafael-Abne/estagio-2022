@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Adicionar usuário</h5>
    <div class="card-body">
      <form method="post" action="{{route('users.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Nome</label>
        <input id="inputTitle" type="text" required name="name" placeholder="Informe o nome"  value="{{old('name')}}" class="form-control">
        {{-- @error('nome')
        <span class="text-danger">{{$message}}</span>
        @enderror --}}
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-form-label">Email</label>
          <input id="inputEmail" type="email" required name="email" placeholder="Informe o email"  value="{{old('email')}}" class="form-control">
          {{-- @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror --}}
        </div>

        <div class="form-group">
            <label for="inputPassword" class="col-form-label">Senha</label>
          <input id="inputPassword" type="password" required name="password" placeholder="Informe a senha"  value="{{old('password')}}" class="form-control">
          {{-- @error('senha')
          <span class="text-danger">{{$message}}</span>
          @enderror --}}
        </div>

        <div class="form-group">
            <label for="role" class="col-form-label">Tipo</label>
            <select name="role" class="form-control" required title="Selecione o tipo de usuário">
                <option value="user" selected>User</option>
                <option value="admin">Admin</option>
            </select>
          {{-- @error('tipo')
          <span class="text-danger">{{$message}}</span>
          @enderror --}}
          </div>
          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" required class="form-control">
                <option value="active" selected>Ativo</option>
                <option value="inactive">Inativo</option>
            </select>
          {{-- @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror --}}
          </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-primary">Resetar formulário</button>
           <button class="btn btn-danger" type="submit">Adicionar</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>
@endpush