@extends('layouts.app')

@section('content')
{{-- <img src="pattern.png"> --}}
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
                <div class="card-header">MENU LIST</div>
                <div class="card-body">
                    <div class="left">
                        @foreach ($menus as $menu)
                        
                        <a class="black" href="{{route('menu.edit',[$menu])}}">{{$menu->title}}</a> 
                        <img src="{{asset('images/'.$menu->photo)}}" style="width: 250px; height: auto;">
                        <div>Price: {{$menu->price}}€ <br>Weight: {{$menu->weight}}grams <br>Meat: {{$menu->meat}} grams <br>About: {{$menu->about}}</div>
                        <form method="POST" action="{{route('menu.destroy', [$menu])}}">
                        @csrf
                        <button class="yellow" type="submit">Delete</button>
                        </form>
                        <br>
                        @endforeach
                    </div>
                    <div class="right">
                        {{-- <img src="closer-moon-1600.png"> --}}
                    </div>
                    
                </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection