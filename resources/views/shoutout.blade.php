<h1>Shoutout to:{{$text}}</h1>

@if($text=="g")
<h1>gwapo</h1>
@elseif("a")
<h1>gwapa</h1>
@endif

@foreach($colors as $color=>$description)
	{{$color}}-{{$description}}
</br>
@endforeach
