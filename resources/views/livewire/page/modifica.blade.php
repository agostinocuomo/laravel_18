<form  wire:submit="update">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1"  class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" wire:model.blur='name' aria-describedby="emailHelp">

      @error('name')
          {{$message}}
      @enderror
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Gender</label>
      <input type="text" class="form-control" wire:model.blur='gender'  id="exampleInputPassword1">

      @error('gender')
      {{$message}}
  @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
