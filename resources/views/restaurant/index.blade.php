@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        {{-- <div class="picture" style="background: url('{{asset('images/iu.png')}}'); height: 200px; ">.</div> --}}
            <div class="card dunno">
                {{-- <div class="card-header test"><h3>Restaurants</h3> --}}
                <div class="card-header test" style="background-image: url('{{asset('images/iu.jpg')}}'); background-size: 100% 100%;">
                    <h3>Restaurants</h3>
                    <p>Sort by Menu:</p>
                        <a href="{{route('restaurant.index')}}">RESET</a>
                        <form action="{{route('restaurant.index')}}" method="get">
                            <select name="menu_id">
                                <option value="0">Show All</option>
                                @foreach ($menus as $menu)
                                    <option value="{{$menu->id}}" @if($selectId == $menu->id) selected @endif>{{$menu->title}} </option>
                                @endforeach
                            </select><br><br>
                        {{-- <select name="menu_id">
                            @foreach ($menus as $menu)
                                <option value="{{$menu->id}}">{{$menu->title}} </option>
                            @endforeach
                        </select> --}}
                        {{-- Sort By: <br>
                        Title: <input type="radio" name="sort" value="title" @if('title' == $sort) checked @endif><br>
                        Customers: <input type="radio" name="sort" value="customers" @if('customers' == $sort) checked @endif><br>
                        Employees: <input type="radio" name="sort" value="employees" @if('employees' == $sort) checked @endif><br> --}}
                        {{-- about: <input type="radio" name="sort" value="about" @if('about' == $sort) checked @endif><br> --}}
                        <button class="pink" type="submit">SORT</button>
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
               <div class="card-header">RESTAURANT LIST</div>
               <div class="card-body">
                 @foreach ($restaurants as $restaurant)
                 
                  <a class="black" href="{{route('restaurant.edit',[$restaurant])}}">{{$restaurant->title}} "{{$restaurant->menus->title}}" </a>
                  <form method="POST" action="{{route('restaurant.destroy', [$restaurant])}}">
                    @csrf
                    <button class="pink" type="submit">Delete</button>
                    <small class="text-muted">{!!$restaurant->about!!}</small>
                  </form>
                  <br>
                @endforeach
               </div>
           </div>
       </div>
   </div>
</div>
@endsection