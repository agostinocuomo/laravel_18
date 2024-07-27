<table class="table table-dark table-striped-columns">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Gender</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
    @foreach ($AllArticles as $article)
    <tr>
        <th scope="row">{{$article->id}}</th>
        <td>{{$article->name}}</td>
        <td>{{$article->gender}}</td>

        <td><a type="button"  href="{{route('modifica', ['article'=>$article])}}" class="btn btn-warning back float-end">Modifica</a></td>
        <td><a type="button" wire:click.prevent="destroy({{ $article }})" class="btn btn-warning float-danger">Elimina</a></td>
      </tr>
    @endforeach
      </tbody>
  </table>
