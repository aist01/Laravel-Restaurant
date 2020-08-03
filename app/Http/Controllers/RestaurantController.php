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
        {   $menus = Menu::all();
            $selectId = 0;
            $sort = '';
            if ($request->menu_id) {
                if ($request->sort) {
                    if ($request->sort == 'title') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('title')->get();
                        $sort = 'title';
                    } elseif ($request->sort == 'isbn') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('isbn')->get();
                        $sort = 'isbn';
                    } elseif ($request->sort == 'pages') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('pages')->get();
                        $sort = 'pages';
                    } elseif ($request->sort == 'about') {
                        $restaurants = Restaurant::where('menu_id', $request->menu_id)->orderBy('about')->get();
                        $sort = 'about';
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
                    } elseif ($request->sort == 'isbn') {
                        $restaurants = Restaurant::orderBy('isbn')->get();
                        $sort = 'isbn';
                    } elseif ($request->sort == 'pages') {
                        $restaurants = Restaurant::orderBy('pages')->get();
                        $sort = 'pages';
                    } elseif ($request->sort == 'about') {
                        $restaurants = Restaurant::orderBy('about')->get();
                        $sort = 'about';
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
    }

 
    public function create(Request $request)
    { 
       
        $menus = Menu::all();
        return view('restaurant.create', ['menus' => $menus]);
    }


    public function store(RestaurantRequest $request)
    {   
        // $validator = Validator::make($request->all(),
        // [
        //     'title' => ['required', 'min:4', 'max:64'],
        //     'isbn' => ['required', 'min:3', 'max:64'],
        //     'pages' => ['required', 'min:1', 'max:64'],
        //     'about' => ['required', 'min:4', 'max:100']
        // ],
        // [
        //     'title.min' => 'Please enter at least 2 characters for restaurant title',
        //     'title.max' => 'Please enter no more than 64 characters for restaurant title',
        //     'isbn.min' => 'Please enter at least 3 characters for restaurant isbn',
        //     'isbn.max' => 'Please enter no more than 64 characters for restaurant isbn',
        //     'pages.max' => 'Please enter at least 1 character for restaurant pages',
        //     'pages.max' => 'Please enter no more than 64 characters for restaurant pages',
        //     'about.max' => 'Please enter at least 4 characters to describe the item',
        //     'about.max' => 'Please enter no more than 100 characters to describe the item'
        // ]
        // );
        // if ($validator->fails()) {
        //     $request->flash();
        //     return redirect()->back()->withErrors($validator);
        // }
 
        $restaurant = Restaurant::create($request->all());
        
        // $restaurant = new restaurant;
        // $restaurant->title = $request->restaurant_title;
        // $restaurant->isbn = $request->restaurant_isbn;
        // $restaurant->pages = $request->restaurant_pages;
        // $restaurant->about = $request->restaurant_about;
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
        $menu->fill($request->all());
        // $restaurant->title = $request->restaurant_title;
        // $restaurant->isbn = $request->restaurant_isbn;
        // $restaurant->pages = $request->restaurant_pages;
        // $restaurant->about = $request->restaurant_about;
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