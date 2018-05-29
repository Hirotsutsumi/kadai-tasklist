@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('作成') !!}

    {!! Form::close() !!}
    
    {{ '<p style="color: red;">When passed through htmlentities function</p>' }}
    {!! '<p style="color: red;">When not passed through htmlentities function</p>' !!}

@endsection