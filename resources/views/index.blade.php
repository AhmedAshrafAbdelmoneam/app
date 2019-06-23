@extends('welcome')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>Title</td>
              <td>Description</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td>{{$ticket->id}}</td>
                <td>{{$ticket->title}}</td>
                <td>{{$ticket->description}}</td>
                <td><a href="{!!url('/edit/ticket/'.$ticket->id)!!}" >edit</a></td>
                <td><a href="{!!url('/delete/ticket/'.$ticket->id)!!}" >delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection