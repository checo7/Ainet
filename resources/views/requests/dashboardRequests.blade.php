@extends('layouts.app')

@section('content')
<div>  
    <a class="btn btn-primary" href="{{route('requestsCreate')}}"><span class="glyphicon glyphicon-plus"></span>Add request</a>
</div>

@if (count($requests)) 
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Número</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Data limite</th>
            <th>Número de cópias</th>
            <th width="100px">Ações</th>
        </tr>
    </thead>
    <tbody>
@foreach ($requests as $request)
        <tr>
            <td>{{$request->id}}</td>
            <td>{{$request->description}}</td>
            <td>{{$request->created_at}}</td>
            <td>{{$request->due_date}}</td>
            <td>{{$request->quantity}}</td>
            <td>
                <a href="" class="actions edit">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="" class="actions delete">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
@else 
    <h2>No requests found</h2>
@endif

@endsection
