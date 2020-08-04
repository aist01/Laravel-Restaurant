@extends('layouts.app')

@section('content')
{{-- <img src="pattern.png"> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card dunno">
                <div class="card-header"><h4>Menu*******</h4>
                
                    <a href="{{route('menu.index')}}">RESET</a>
                    <form action="{{route('menu.index')}}" method="get">
                        {{-- <select name="menu_id">
                            <option value="0">Show All</option>
                            @foreach ($menus as $menu)
                                <option value="{{$menu->id}}" @if($selectId == $menu->id) selected @endif>{{$menu->title}} </option>
                            @endforeach
                        </select><br><br>
                        <select name="menu_id">
                            @foreach ($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->title}} </option>
                            @endforeach
                        </select> --}}
                        Sort By: <br>
                        Title: <input type="radio" name="sort" value="title" @if('title' == $sort) checked @endif><br>
                        Price: <input type="radio" name="sort" value="price" @if('price' == $sort) checked @endif><br>
                        Weight: <input type="radio" name="sort" value="weight" @if('weight' == $sort) checked @endif><br> 
                        Meat: <input type="radio" name="sort" value="meat" @if('meat' == $sort) checked @endif><br>
                        <button class="yellow" type="submit">FILTER</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
                <div class="card-header">MENU LIST</div>
                <div class="card-body center">
                    <div class="left">
                        @foreach ($menus as $menu)
                        
                        <a class="black" href="{{route('menu.edit',[$menu])}}">{{$menu->title}}</a> 
                        <img src="{{asset('images/'.$menu->photo)}}" style="width: 250px; height: auto;">
                        <div class="menu">
                        <div >Price: {{$menu->price}}€ <br>Weight: {{$menu->weight}}grams <br>Meat: {{$menu->meat}} grams <br>About: {!!$menu->about!!}</div>
                        <form method="POST" action="{{route('menu.destroy', [$menu])}}">
                        @csrf
                        <button class="yellow" type="submit">Delete</button>
                        </div>
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