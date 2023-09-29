<x-app title="blog" meta-description="Blog meta description">
    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>
            Title <br>
            <input name="title" type="text" value="{{ old('title') }}">
            @error('title')
            <br>
            <small style="color: royalblue">{{$message}}</small>
            @enderror
        </label><br>
        <label>
            Body <br>
            <textarea name="body"></textarea>
            @error('body')
            <br>
            <small style="color: royalblue">{{$message}}</small>
            @enderror
        </label><br>
        <button type="submit">Enviar</button>

    </form>
    <a href="{{route('posts.index')}}">Regresar</a>

</x-app>
