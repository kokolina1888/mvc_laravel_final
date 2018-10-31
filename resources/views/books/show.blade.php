<p>
	{{ $book->name }}
</p>
<p>
	{{ $book->isbn }}
</p>
<p>
	{{ $book->price }}
</p>
<p>
	{{ $book->info }}
</p>
<p>
	{{ $book->author->name }}
</p>
<p>
	{{ $book->date_available }}
</p>
<img src="{{ asset('/img/' . $book->img_path) }}">