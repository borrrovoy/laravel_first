@extends('layout')

@section('title') Reviews @endsection

@section('main-content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Review add form</h1>
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Enter your email address" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Enter subject of your review" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Enter your review"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>

    <br>
    <h1>All reviews</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{ $el->subject }}</h3>
            <b>{{ $el->email }}</b>
            <p>{{ $el->message }}</p>
        </div>
    @endforeach
@endsection
