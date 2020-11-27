@extends('layouts.layout')

@section('content')
    <div class="row mt-4">
        @foreach ($forms as $form)
        <div class="col-12">
            <div class="card mt-2">
            <div class="card-header">{{$form->firstName . " " . $form->surname}}</div>
                <div class="card-body">email - {{$form->email}}</div>
                <div class="card-body">message text - {{$form->desc}}</div>
                <div class="card-body">created at - {{$form->created_at}}</div>
            </div>
        </div>
        @endforeach
    </div>
@endsection




