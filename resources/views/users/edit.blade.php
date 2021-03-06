@extends('template.users')
@section('title', "Editar - {$user->name}")
@section('body')
	<h1>Novo Usuário</h1>

	@include('layout.error')

	<form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="input-group mb-3">
			<span class="input-group-text">Nome</span>
			<input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text">Email</span>
			<input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required>
		</div>

		<div class="input-group mb-3">
			<span class="input-group-text">Senha</span>
			<input type="password" class="form-control" id="password" name="password">
		</div>

		<div class="input-group mb-3">
			<div class="input-group-text">
				<input class="form-check-input mt-0" type="checkbox" value="1"
				       name="is_admin" {{ (bool)$user->is_admin ? 'checked' : null }}>
			</div>
			<span class="form-check-label input-group-text" for="is-admin">
				Administrador
			</span>
		</div>

		<div class="mb-3">
			<label for="image">Selecione uma imagem</label>
			<input type="file" class="form-control" id="image" name="image">
		</div>
		
		<button type="submit" class="btn btn-primary">Enviar</button>
		<a class="btn btn-secondary" href="{{ url()->previous() }}">Voltar</a>
	</form>
@endsection