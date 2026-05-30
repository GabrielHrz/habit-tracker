<h1>Welcome {{$name}}</h1>
<h2>Y Tus habitos son</h2>
<ul>
    @foreach($habits as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>


@auth
    <p>Esta logado</p>
@endauth

@guest
    <p>No estas logado</p>
@endguest
