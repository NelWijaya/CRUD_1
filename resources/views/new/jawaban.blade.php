@extends('master')


@section('content')
    @foreach($kode as $key => $item)
    <div class="col-md-12">
        <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                    <img class="img-circle" src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Image">
                    <span class="username"><a href="#">Orang yang bertanya</a></span>
                    <span class="description">Shared publicly - With ID : {{$item->id}}</span>
                </div>
            </div>
            <div class="card-body">
                <h4>{{$item->judul}}</h4>
                <p>{{$item->isi}}</p>
            </div>
        </div>
        @foreach($jawaban as $kunci => $jawab)
    <div class="card-footer card-comments">
        <div class="card-comment">
            <img class="img-circle img-sm" src="{{asset('adminlte/dist/img/user3-128x128.jpg')}}" alt="User Image">
            <div class="comment-text">
                <span class="username">Penjawab</span>
                {{$jawab->isi}}
            </div>
        </div>
    </div>
    @endforeach
    <div class="card-footer">
        <form action="/jawaban/{{$item->id}}" method="post">
        @csrf
            <img class="img-fluid img-circle img-sm" src="{{asset('adminlte/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
            <div class="img-push">
                <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment" name="isi">
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
            </div>


        </form>
    </div>
    </div>
    @endforeach
@endsection
