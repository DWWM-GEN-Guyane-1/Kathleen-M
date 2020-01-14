@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ajouter un événement
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div class="container">
      <form method="post" action="{{ route('evenements.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="nom_evenement"/>
          </div>
          <div class="form-group">
              <label for="position">Lieu:</label>
              <input type="text" class="form-control" name="lieu"/>
          </div>
          <div class="form-group">
              <label for="date">Date:</label>
              <input type="text" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="description">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-primary">Créer un événement</button>
      </form>
      </div>
  </div>
</div>
@endsection