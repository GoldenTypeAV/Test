@extends('layout')

@section('title')Форма обратной связи@endsection

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
    <h1>Форма обратной связи</h1>
    <form method="POST" action="/feedback/check">
        @csrf
        <input id="email" type="text" name="email" :value="old('email')" placeholder='E-Mail' required autofocus/>
        <input id="tel" type="tel" name="tel" :value="old('tel')" placeholder='8 (930) 999-20-20' required/>
        <input id="name" type="text" name="name" :value="old('name')" placeholder='Андрей' required/>
        <input type="submit"/>
    </form>
</div>

@endsection