<table border=1>
@foreach( $books as $book )
	<tr>
		<td> 
			<a href=" {{ route('books.show', $book->id) }}">{{ $book->name }}</a>
		</td>
		<td> {{ $book->author->name }}</td>
		<td> <a href=" {{ route('books.edit', $book->id) }} ">Update</a></td>
		<td>
		 	{!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'delete'])!!} 
			
			{!! Form::submit('Delete') !!}				

			{!! Form::close() !!}
		</td>
	</tr>

@endforeach
</table>

<a href="{{ route('books.create') }}">Add Book</a>