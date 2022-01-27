@extends('layout')

@section('title')Изменение записи@endsection

@section('main_content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class='feedback_menu'>
    <h1>Изменение заявки обратной связи</h1>
    <form method="POST" action="{{route('feedback_modify_submit',$feedbacks->id)}}">
        @csrf
        <input id="email" type="text" name="email" value="{{$feedbacks->email}}" placeholder='E-Mail' required autofocus/>
        <input id="tel" type="tel" name="tel" value="{{$feedbacks->tel}}" placeholder='8 (930) 999-20-20' required/>
        <input id="name" type="text" name="name" value="{{$feedbacks->name}}" placeholder='Андрей' required/>
        <input type="submit"/>
    </form>
</div>

@endsection