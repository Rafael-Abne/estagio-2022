@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Editar Usuário</h5>
    <div class="card-body">
      <form method="post" action="{{route('users.update',$user->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Nome</label>
        <input id="inputTitle" type="text" name="name" placeholder="Digite o novo nome"  value="{{$user->name}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="inputEmail" class="col-form-label">Email</label>
          <input id="inputEmail" type="email" name="email" placeholder="Digite um novo email"  value="{{$user->email}}" class="form-control">
          @error('email')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
            <label for="inputPassword" class="col-form-label">Password</label>
          <input id="inputPassword" type="password" name="password" required placeholder="Informe sua senha atual ou crie uma nova senha aqui"  value="" class="form-control">
          @error('password')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        {{-- <div class="form-group">
        <label for="inputPhoto" class="col-form-label">Imagem</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Escolha
                </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$user->photo}}">
        </div>
        <img id="holder" style="margin-top:15px;max-height:100px;">
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div> --}}
        @php
        $roles=DB::table('users')->select('role')->where('id',$user->id)->get();
        // dd($roles);
        @endphp
        <div class="form-group">
            <label for="role" class="col-form-label">Função</label>
            <select name="role" required title="Selecione uma função" class="form-control">
                @foreach($roles as $role)
                    <option value="admin" {{(($role->role=='admin') ? 'selected' : '')}}>Administrador</option>
                    <option value="user" {{(($role->role=='user') ? 'selected' : '')}}>Usuário</option>
                @endforeach
            </select>
          @error('role')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <select name="status" class="form-control">
                <option value="active" {{(($user->status=='active') ? 'selected' : '')}}>Ativo</option>
                <option value="inactive" {{(($user->status=='inactive') ? 'selected' : '')}}>Inativo</option>
            </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
          </div>
        <div class="form-group mb-3">
           <button class="btn btn-danger" type="submit">Editar</button>
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
