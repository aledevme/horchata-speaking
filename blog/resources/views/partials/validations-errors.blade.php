@if($errors->any())
        <ul>
            @foreach ($errors->all() as $itemError)
                <li> {{$itemError}} </li>
            @endforeach
        </ul>
@endif