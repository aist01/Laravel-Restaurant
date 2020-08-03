<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Requests\RestaurantRequest;
use Validator;

class RestaurantController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index(Request $request)
    {
        $menus = Menu::orderBy('title')->get();
            $selectId = 0;
            $sort = '';
            if ($request->menu_id) {
                if ($request->sort) {
                    if ($request->sort == 'title') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('title')->get();
                        $sort = 'title';
                    } elseif ($request->sort == 'price') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('price')->get();
                        $sort = 'price';
                    } elseif ($request->sort == 'weight') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('weight')->get();
                        $sort = 'weight';
                    } elseif ($request->sort == 'meat') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('meat')->get();
                        $sort = 'meat';
                    } else {
                        $restaurants = Restaurant::all();
                    }
                } else {
                    $restaurants = Restaurant::where('menu_id', $request->menu_id)->get();
                }
                $selectId = $request->menu_id;
            } else {
                if ($request->sort) {
                    if ($request->sort == 'title') {
                        $restaurants = Restaurant::orderBy('title')->get();
                        $sort = 'title';
                    } elseif ($request->sort == 'price') {
                        $restaurants = Restaurant::orderBy('price')->get();
                        $sort = 'price';
                    } elseif ($request->sort == 'weight') {
                        $restaurants = Restaurant::orderBy('weight')->get();
                        $sort = 'weight';
                    } elseif ($request->sort == 'meat') {
                        $restaurants = Restaurant::orderBy('meat')->get();
                        $sort = 'meat';
                    } else {
                        $restaurants = Restaurant::all();
                    }
                } else {
                    $restaurants = Restaurant::all();
                }
            }
            return view('restaurant.index', compact('restaurants','menus', 'selectId', 'sort'));
            // $restaurants = restaurant::all();
            // return view('restaurant.index', ['restaurants' => $restaurants]);
        
    }

 
    public function create(Request $request)
    { 
        $menus = Menu::orderBy('title')->get();
        // $menus = Menu::all();
        return view('restaurant.create', ['menus' => $menus]);
    }


    public function store(RestaurantRequest $request)
    {   
        // $validator = Validator::make($request->all(),
        // [
        //     'title' => ['required', 'min:4', 'max:64'],
        //     'price' => ['required', 'min:3', 'max:64'],
        //     'weight' => ['required', 'min:1', 'max:64'],
        //     'meat' => ['required', 'min:4', 'max:100']
        // ],
        // [
        //     'title.min' => 'Please enter at least 2 characters for restaurant title',
        //     'title.max' => 'Please enter no more than 64 characters for restaurant title',
        //     'price.min' => 'Please enter at least 3 characters for restaurant price',
        //     'price.max' => 'Please enter no more than 64 characters for restaurant price',
        //     'weight.max' => 'Please enter at least 1 character for restaurant weight',
        //     'weight.max' => 'Please enter no more than 64 characters for restaurant weight',
        //     'meat.max' => 'Please enter at least 4 characters to describe the item',
        //     'meat.max' => 'Please enter no more than 100 characters to describe the item'
        // ]
        // );
        // if ($validator->fails()) {
        //     $request->flash();
        //     return redirect()->back()->withErrors($validator);
        // }
 
        $restaurant = Restaurant::create($request->all());
        
        // $restaurant = new restaurant;
        // $restaurant->title = $request->restaurant_title;
        // $restaurant->price = $request->restaurant_price;
        // $restaurant->weight = $request->restaurant_weight;
        // $restaurant->meat = $request->restaurant_meat;
        // $restaurant->menu_id = $request->menu_id;
        // $restaurant->save();

        // dd($request->file('photo')->getClientOriginalName());

       

        $restaurant->save();
        return redirect()->route('menu.index')->with('success_message', 'Sucsesfully created.');
 
    }


    public function show(Restaurant $restaurant)
    {
        //
    }


    public function edit(Restaurant $restaurant)
    {
        $menus = Menu::all();
        return view('restaurant.edit', ['restaurant' => $restaurant, 'menus' => $menus]);
 
    }


    public function update(RestaurantRequest $request, Restaurant $restaurant)
    {   
        $restaurant->fill($request->all());
        // $restaurant->title = $request->restaurant_title;
        // $restaurant->price = $request->restaurant_price;
        // $restaurant->weight = $request->restaurant_weight;
        // $restaurant->meat = $request->restaurant_meat;
        // $restaurant->menu_id = $request->menu_id;
        $restaurant->save();
        // return redirect()->route('restaurant.index');

        return redirect()->route('menu.index')->with('success_message', 'Succsesfully updated.');
 
    }


    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
    //    return redirect()->route('restaurant.index');

       return redirect()->route('menu.index')->with('success_message', 'Succesfully deleted.');
    }
}