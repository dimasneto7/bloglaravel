<a href="{{ route('posts.create') }}">Criar Novo Post</a>
<hr>
@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>Post</h1>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
        <a href="{{ route('posts.show', $post->id) }}">Ver</a>
        <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
    <br />
@endforeach

<hr>

{{ $posts->links() }}
