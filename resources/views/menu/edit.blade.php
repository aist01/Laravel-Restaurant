@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card borders">
               <div class="card-header painta">EDIT MENU</div>
               <div class="card-body">
                  <form id="form" method="POST" action="{{route('menu.update',[$menu->id])}}" enctype="multipart/form-data">
                  <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title', $menu->title)}}">
                        <small class="form-text text-muted">Menu name.</small>
                    </div>
                  <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="{{old('price', $menu->price)}}">
                        <small class="form-text text-muted">Menu price.</small>
                    </div>
                  <div class="form-group">
                        <label>Weight</label>
                        <input type="text" class="form-control" name="weight" value="{{old('weight', $menu->weight)}}">
                        <small class="form-text text-muted">Menu weight.</small>
                    </div>
                  <div class="form-group">
                        <label>Meat</label>
                        <input type="text" class="form-control" name="meat" value="{{old('meat', $menu->meat)}}">
                        <small class="form-text text-muted">Menu meat.</small>
                    </div>
                  <div class="form-group">
                        <label>About</label>
                        {{-- <input type="text" class="form-control" name="about" value="{{old('about')}}"> --}}
                        <input type="hidden" name="about" value="{{old('about', $menu->about)}}">{{$menu->about}}
                        <div id="editor"></div>
                        <small class="form-text text-muted">Menu about.</small>
                    </div>
                    Image: <input type="file" name="photo" class="photo">
                     @csrf
                     <button class="green" type="submit">EDIT</button>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>

<script>
    var quill = new Quill('#editor', {theme: 'snow'});
    const input = document.querySelector('input[name=about]');
    console.log(input);
    //console.log(JSON.parse(input.value));
    console.log(input.value);

    //if (input.value !== '') quill.setContents(JSON.parse(input.value), 'api');
    //document.querySelector('#form').onsubmit = () => {
       //input.value = JSON.stringify(quill.getContents());
    //};
</script>
@endsection