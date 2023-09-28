<x-app title="blog" meta-description="Blog meta description">
    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text">
        </label><br>
        <label>
            Body <br>
            <textarea name="body"></textarea>
        </label><br>
        <button type="submit">Enviar</button>

    </form>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-app>
