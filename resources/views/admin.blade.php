@extends('layout')

@section('title')Меню администратора@endsection

@section('main_content')

    <h1>Список заявок</h1>

    @foreach($feedbacks as $el)
        <div class="feedbacks">
            <h3>{{ $el->email }}</h3>
            <b>{{ $el->tel }}</b>
            <p>{{ $el->name }}</p>
            <div class='button3'>
                    <a href="{{route('feedback_modify', $el->id)}}">
                        <span>Modify</span>
                    </a>
                    <a href="{{ route('feedback_delete', $el->id)}}">
                        <span>Delete</span>
                    </a>
                </div>
        </div>
    @endforeach
    <hr/>

    <div class="feedback_menu">
    <h1>Создать заявку</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="POST" action="/feedback/check">
        @csrf
        <input id="email" type="text" name="email" :value="old('email')" placeholder='E-Mail' required autofocus/>
        <input id="tel" type="tel" name="tel" :value="old('tel')" placeholder='8 (930) 999-20-20' required/>
        <input id="name" type="text" name="name" :value="old('name')" placeholder='Андрей' required/>
        <input type="submit"/>
    </form>
</div>

@endsection