@extends('layouts.app')

@section('content')
<div class="container">

    <h2>New Play</h2>

<form action="/playevents" method="POST">
    @csrf

    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Possession</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="offense" id="AwayTeam" value="shs" checked>
                    <label class="form-check-label" for="AwayTeam">
                        Sheldon
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="offense" id="HomeTeam" value="them">
                    <label class="form-check-label" for="HomeTeam">
                        Them
                    </label>
                </div>
            </div>
        </div>
    </fieldset>

     <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Type</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="rushPlay" value="rush" checked>
                    <label class="form-check-label" for="rushPlay">
                        Rush
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="type" id="passPlay" value="them" disabled>
                    <label class="form-check-label" for="passPlay">
                        Pass
                    </label>
                </div>
            </div>
        </div>
    </fieldset>

    <div class="form-group row">
        <label for="play" class="col-sm-2 col-form-label">Play</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="play" name="play" placeholder="Play">
        </div>
    </div>

     <div class="form-group row">
        <label for="rusher" class="col-sm-2 col-form-label">Rusher</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="rusher" placeholder="Rusher">
        </div>
    </div>

    <div class="form-group row">
        <label for="yards" class="col-sm-2 col-form-label">Yards</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="yards" placeholder="Yards">
        </div>
    </div>

    <div class="form-group row">
        <label for="tackler" class="col-sm-2 col-form-label">Tackler</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="tackler" placeholder="Tackler">
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-lg btn-block">Track Play</button>
</form>
</div>
@endsection
