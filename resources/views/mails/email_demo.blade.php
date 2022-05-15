@extends('mails.template')
@section('content')
	 
	<h1>
	    Contacto desde el portal <a href="http://creeryesperar.com/"><b>creer y esperar<b></a>
	</h1>

	<p>
	   Una persona quiere agendar una Demo: 
	</p>
	<p><b>Nombre de la empresa {{ $data->company }}</b></p>
	<p><b>Nombre: </b> {{ $data->contact_name }}</p>
	<p><b>Puesto laboral: </b> {{ $data->job }}</p>
	<p><b>Email: </b> {{ $data->email  }}</p>
	<p><b>Teléfono: </b> {{ $data->telephone }}</p>
	<p><b>Mensaje: </b> {{ $data->message }}</p>

@endsection