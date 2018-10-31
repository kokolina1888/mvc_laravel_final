<h1>Create Book</h1>

{!! Form::open(['route' => 'books.store', 'files' => 'true']) !!}
<p>
	
	{!! Form::text('name', 'Name here ...')!!}
</p>
<p>
	{!! Form::file('img_path') !!}
</p>	


	{!! Form::submit('Save')!!}

{!! Form::close() !!}