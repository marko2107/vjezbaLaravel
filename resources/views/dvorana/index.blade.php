@if (Session::has('message'))
	<div>{{ Session::get('message') }}</div>
@endif

@foreach($mucionice as $d)
{{$d->naziv}}
{{$d->broj}}<br>
@endforeach
