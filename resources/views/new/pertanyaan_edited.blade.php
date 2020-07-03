@extends('master')


@section('content')
    <div class="col-sm-12 m-3">
        <h1 class="m-0 text-dark">Edited Question</h1>
    </div>

    <form action="/pertanyaan/{{$new_data->id}}" method="POST" style="padding: 50px;">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" placeholder="Masukkan Judul" id="judul" name="judul" value="{{$new_data->judul}}" required>
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea class="form-control" id="isi" name="isi" required>{{$new_data->isi}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
