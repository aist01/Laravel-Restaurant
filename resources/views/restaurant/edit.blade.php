@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">EDIT RESTAURANT</div>
               <div class="card-body">
                 <form method="POST" action="{{route('restaurant.update',[$restaurant])}}">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title"  class="form-control" value="{{old('title')}}">
                        <small class="form-text text-muted">Restaurant title.</small>
                    </div>
                    <div class="form-group">
                        <label>Customers</label>
                        <input type="text" name="customers"  class="form-control" value="{{old('customers')}}">
                        <small class="form-text text-muted">Restaurant customers.</small>
                    </div>
                    <div class="form-group">
                        <label>Employees</label>
                        <input type="text" name="employees"  class="form-control" value="{{old('employees')}}">
                        <small class="form-text text-muted">Restaurant employees.</small>
                    </div>
                    
                    <select name="menu_id">
                        @foreach ($menus as $menu)
                            <option value="{{$menu->id}}" @if($menu->id == $restaurant->menu_id) selected @endif>
                                {{$menu->name}} {{$menu->surname}}
                            </option>
                        @endforeach
                    </select>
                    @csrf
                    <button class="dark-blue right" type="submit">EDIT</button>
                </form>
               </div>
           </div>
       </div>
   </div>
</div>

<script>
$(document).ready(function() {
   $('#summernote').summernote();
 });
</script>
@endsection