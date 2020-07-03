@extends('master')


@section('content')
    <div class="col-sm-12 m-3">
        <h1 class="m-0 text-dark">List Question</h1>
    </div>

    @foreach($data as $key => $item)
    <div class="col-md-12">
        <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                    <img class="img-circle" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
                    <span class="username">Orang pada index array ke - {{$key}}</span>
                    <span class="description"><b>With ID</b> : {{$item->id }} - <b>Posted</b> : {{$item->tanggal_dibuat}} - <b>Last Updated</b> : {{$item->tanggal_diperbarui}}</span>
                </div>
            </div>
            <div class="card-body">
                <h4>{{$item->judul}}</h4>
                <p>{{$item->isi}}</p>
                <a href="{{url('/pertanyaan/edited/'.$item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>
                <a href="{{url('/jawaban/'.$item->id)}}" class="btn btn-success btn-sm "><i class="fas fa-comment"></i> Comment</a>
                <form action="/pertanyaan/{{$item->id}}" style="display: inline;" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" >
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection




