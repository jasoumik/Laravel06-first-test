<div>
    view page
    <ul>
        @foreach($data as $d)
    <li>{{ $d->brand_name }}</li>
        @endforeach
    </ul>
</div>
