<h1>Edit Book</h1>

{!! Form::model($book, ['route' => ['books.update', $book->id], 'files' => 'true']) !!}
<p>	
	{!! Form::text('name', $book->name )!!}
</p>
<p>
	{!! Form::file('img_path') !!}
</p>	


	{!! Form::submit('Save')!!}

{!! Form::close() !!}