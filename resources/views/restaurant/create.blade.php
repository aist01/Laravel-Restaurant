@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">CREATE RESTAURANT</div>
               <div class="card-body">
                    <form method="POST" action="{{route('restaurant.store')}}">
                    {{-- Image: <input type="file" name="photo" class="photo"> --}}
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        <small class="form-text text-muted">Restaurant title.</small>
                    </div>
                    <div class="form-group">
                        <label>Customers</label>
                        <input type="text" class="form-control" name="customers" value="{{old('customers')}}">
                        <small class="form-text text-muted">Restaurant customers.</small>
                    </div>
                    <div class="form-group">
                        <label>Employees</label>
                        <input type="text" class="form-control" name="employees" value="{{old('employees')}}">
                        <small class="form-text text-muted">Restaurant Employees.</small>
                    </div>
                        <select name="menu_id">
                            @foreach ($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->title}} </option>
                            @endforeach
                        </select>
                        @csrf
                        <button class="blue right" type="submit">ADD</button>
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