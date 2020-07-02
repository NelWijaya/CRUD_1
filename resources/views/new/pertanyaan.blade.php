@extends('master')


@section('content')
    @foreach($data as $key => $item)
    <div class="col-md-12">
        <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                    <img class="img-circle" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
                    <span class="username"><a href="#">Orang yang bertanya</a></span>
                    <span class="description">Shared publicly - With ID : {{$item->id }}</span>
                </div>
            </div>
            <div class="card-body">
                <h4>{{$item->judul}}</h4>
                <p>{{$item->isi}}</p>
                <a type="button" class="btn btn-default btn-sm"><i class="fas fa-comment"></i> Komentar</a>
                <a href="{{url('/jawaban/'.$item->id)}}" class="btn btn-default btn-sm"><i class="fas fa-edit"></i> Jawaban</a>
            </div>
        </div>
    </div>
    @endforeach
@endsection



