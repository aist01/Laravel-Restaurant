@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">EDIT MENU</div>
               <div class="card-body">
                  <form method="POST" action="{{route('menu.update',[$menu->id])}}">
                  <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        <small class="form-text text-muted">Menu name.</small>
                    </div>
                  <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control" name="surname" value="{{old('surname')}}">
                        <small class="form-text text-muted">Menu surname.</small>
                    </div>
                     @csrf
                     <button class="green" type="submit">EDIT</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection