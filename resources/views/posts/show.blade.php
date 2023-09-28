<x-app :title="$post->title" :meta-description="$post->body">
<h1>{{$post->title}}</h1>
<h2>{{$post->body}}</h2>
<a href="{{route('posts.index')}}">Regresar</a>
</x-app>
