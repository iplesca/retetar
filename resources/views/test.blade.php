
@if (!empty($liste))
    Avem {{ count($liste) }} liste definite.<br>
    <ul>
    @foreach($liste as $lista)
        <li>
            <h2>{{ $lista->nume }}</h2>
            <h4>Rețete:</h4>
            <ol>
            @foreach($lista->recipes()->get() as $reteta)
                <li>
                    <strong>{{ $reteta->nume }}</strong><br>
                    Ingrediente: <em>{{ $reteta->ingrediente }}</em><br>
                    {{ $reteta->descriere }}
                </li>
            @endforeach
            </ol>
        </li>
    @endforeach
    </ul>
@endif
