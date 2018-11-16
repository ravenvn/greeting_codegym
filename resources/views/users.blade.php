@extends('master')
@section('title', 'Trang của Tâm')
@section('content')
    <table border="1">
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->index }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
@stop