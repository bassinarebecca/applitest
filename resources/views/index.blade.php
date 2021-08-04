
@extends('layout')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          @if(session()->has('message'))
            <p class="btn btn-success btn-block btn-sm custom_message text-left">{{ session()->get('message') }}</p>
          @endif

          <legend style="color: green; font-weight: bold;">Appication de test
           <a href="{{ route('ajouter') }}" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> Ajouter</a>
          </legend>

           <table id="example1" class="table table-bordered table-hover">
            <thead>
            <tr class="text-center">
               <th class="text-center">No</th>
               <th class="text-center">Name</th> 
               <th class="text-center">Email</th>
               <th class="text-center">Action</th>
            </tr>
            </thead>
           <tbody>
              @forelse ($essais as $essai)
                <tr class="text-center">
                <td class="text-center">{{ $loop->index + 1 }}</td>
                <td class="text-center">{{ $essai->nom }}</td>
                <td class="text-center">{{ $essai->email }}</td>
                
                <td class="text-center"> <a href="{{ route('modifier',$essai->id) }}" class="btn btn-sm btn-outline-success py-0">Modifier</a></td>
                <td class="text-center"> <a href="" onclick="if(confirm('Voulez-vous vraiment supprimer cette personne?'))event.preventDefault(); document.getElementById('delete-{{$essai->id}}').store();" class="btn btn-sm btn-outline-danger py-0">Supprimer</a>
                  <form id="delete-{{$essai->id}}" method="post" action="{{route('supprimer',$essai->id)}}" style="display: none;">
                  @csrf
                  @method('DELETE')
                </form>
               
                </td>
               </tr>
              @empty
              <p> Nous n'avons pas trouver de personne!</p>
              @endforelse
           </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
 