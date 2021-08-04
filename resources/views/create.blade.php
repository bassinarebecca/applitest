 
@extends('layout')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

          <legend style="color: green; font-weight: bold;">Application de test
          </legend>

          <form action="{{ route('store') }}" method="post">
          @csrf
            <div class="form-group">
              <label for="">Nom</label>
              <input type="text" class="form-control" name="nom" value="{{ old('nom') }}" placeholder="Entrer votre nom">
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Entrer votre email">
            </div>
            
            <div class="form-group" style="margin-top: 24px;">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>

          </form>
        </div>
    </div>
</div>
@endsection
 