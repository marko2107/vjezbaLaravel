@extends('master')
@section('content')

<table style=" width:100%">
  <tr>
    <th>Slika</th>
    <th>Naslov Filma</th> 
    <th>Godina</th>
    <th>Trajanje</th>
    <th>Akcija</th>
  </tr>
  @foreach($filmovi as $film)
  <tr>
    <td><img src='{{asset("storage/{$film->slika}")}}'style="width: 20%"></td>
    <td>{{$film->naslov}}</td> 
    <td>{{$film->godina}}</td>
    <td>{{$film->trajanje}} min</td>
    <td>
        <form id="deleteform" name="deleteform"  action='{{url("/filmovi/{$film->id}")}}' method='POST' style="display: inline" class="form-delete">
            @csrf
    <input type='hidden' name='_method' value='DELETE'>
      <button type='submit' name='delete_filmovi' value='delete'
              class="flex-sm-fill text-sm-center nav-link active">Obriši</button>
        </form></td>
  </tr>
@endforeach
</table>
@endsection

