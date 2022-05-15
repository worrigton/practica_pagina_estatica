@extends('mails.template')
@section('content')
	 
	<h1>
	    Contacto desde el portal <a href="http://creeryesperar.com/"><b>cree y esperar<b></a>
	</h1>

	<p>
	   Se ha contactado la siguiente persona : 
	</p>

	<p> 
	    <b>Nombre : </b> {{$data->name}}
	</p>

	<p> 
	    <b>E-mail : </b> {{$data->email}}
	</p>

	<p> 
	    <b>Asunto : </b> {{$data->subject}}
	</p>

	<p> 
	    <b>Mensaje :</b>  {{$data->message}}
	</p>
 
@endsection