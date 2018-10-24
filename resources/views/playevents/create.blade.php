@extends('layouts.app')

@section('content')

<form action="/playevents" method="POST">
    @csrf

    Offense:
    <select name="offense">
        <option value="shs">Us</option>
        <option value="them">Them</option>
    </select>

    <br>

    Run <input type="radio" name="type" value="run" checked />

    <br>

    <input type="text" name="play" placeholder="Play">

    <br>

    <input type="number" name="rusher" placeholder="Rusher">

    <br>

    <input type="number" name="yards" placeholder="Yards">

    <br>

    <input type="number" name="tackler" placeholder="Tackler">

    <br>

    <input type="submit" value="Track Play">
</form>

@endsection
