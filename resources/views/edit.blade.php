
@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

          <legend style="color: green; font-weight: bold;">Editer
           <a href="{{ route('index') }}" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> Modifier le personnel</a>
          </legend>

          <form action="{{ route('mise_jour', ['id'=>$essai->id])}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="">Nom</label>
              <input type="text" class="form-control {{ $errors->has('titre') ? ' is-invalid': '' }}" name="nom" value="{{ $essai->nom}}">
              @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid': ' ' }}" name="email" value="{{ $essai->email }}">
              @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            </div>
            
            <div class="form-group" style="margin-top: 24px;">
              <input type="submit" class="btn btn-success" value="Update">
            </div>

          </form>
        </div>
    </div>
</div>
@endsection
 