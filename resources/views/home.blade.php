@extends('layouts.app')

@section('page-title')
    Comment
@endsection

@section('content')
    @include('includes.messages');
    <form action ="{{route('main-form')}}" method="post" id="home_form">
        @csrf
        <div class="field">
            <label class="field-label" for="student_name">Enter your name</label>
            <input class="text-field" type="text" name="student_name" placeholder="enter your name">
        </div>
        <div class="field">
            <label class="field-label" for="student_surname">Enter your surname</label>
            <input class="text-field" type="text" name="student_surname" placeholder="enter your surname">
        </div>
        <div class="field">
            <label class="field-label" for="student_group">Enter your group</label>
            <input class="text-field" type="text" name="student_group" placeholder="enter your group">
        </div>
        <div class="large-field">
            <label class="field-label" for="comment">Enter a comment</label>
            <textarea class="text-area" name="comment" placeholder="enter a comment" cols="60" rows="5"></textarea>
        </div>
        <div class="action">
            <input class="button" type="submit" value="send">
        </div>
    </form>
@endsection

@section('footer')
    @parent
    (065) 563-56-34
@endsection
