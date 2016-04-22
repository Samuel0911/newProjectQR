@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')
	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
		
		<div class="form-group">
			{!! Form::label('name', 'Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('lastname', 'Last Name') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('doc_id', 'Document ID') !!}
			{!! Form::text('doc_id', null, ['class' => 'form-control', 'placeholder' => 'Document ID', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('address', 'Address') !!}
			{!! Form::text('address', null,['class' => 'form-control', 'placeholder' => 'Address', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('phone', 'Phone') !!}
			{!! Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone number', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'E-Mail Address') !!}
			{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('active', 'Active') !!}
			{!! Form::selectRange('number', 1, 2,['class' => 'form-control', 'placeholder' => 'Active', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type',['member' => 'Miembro', 'admin' => 'Admin'], null, ['class' => 'form-control'], 'placeholder', 'Select an option', 'required') !!}
		</div>

		<div class="form-group">
			{!! Form::label('date', 'Date') !!}
			{!! Form::date('date', \Carbon\Carbon::now(),['class' => 'form-control'], 'required') !!}
		</div>

		<div class="form-group">
			{!! Form::label('startDate', 'Start Date') !!}
			{!! Form::date('startDate', \Carbon\Carbon::now(),['class' => 'form-control'], 'required') !!}
		</div>

		<div class="form-group">			
			{!! Form::label('date', 'End Date') !!}
			{!! Form::date('date', \Carbon\Carbon::now(),['class' => 'form-control'], 'required') !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			
		</div>

	{!! Form::close() !!}
@endsection