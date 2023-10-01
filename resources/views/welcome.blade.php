<x-app
    title="home"
    meta-description="Home meta description"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>

    @auth()
        <pre class="text-sky-500">
            Hola, bienvenido {{ Auth::user()->name}} 😄✨</pre>
    @endauth

</x-app>
