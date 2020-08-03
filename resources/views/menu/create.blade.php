@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header paint">CREATE MENU</div>
               <div class="card-body">
                 <form method="POST" action="{{route('menu.store')}}" enctype="multipart/form-data">
                 Image: <input type="file" name="photo" class="photo">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        <small class="form-text text-muted">Menu title.</small>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="{{old('price')}}">
                        <small class="form-text text-muted">Menu price.</small>
                    </div>
                    <div class="form-group">
                        <label>Weight</label>
                        <input type="text" class="form-control" name="weight" value="{{old('weight')}}">
                        <small class="form-text text-muted">Menu weight.</small>
                    </div>
                    <div class="form-group">
                        <label>Meat</label>
                        <input type="text" class="form-control" name="meat" value="{{old('meat')}}">
                        <small class="form-text text-muted">Menu meat.</small>
                    </div>
                    <div class="form-group">
                        <label>About</label>
                        <input type="text" class="form-control" name="about" value="{{old('about')}}">
                        <small class="form-text text-muted">About menu.</small>
                    </div>

                  @csrf
                    <button class="blue" type="submit">ADD</button>
               </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection