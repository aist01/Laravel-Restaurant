<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $menus = Menu::orderBy('price')->get();
        return view('menu.index', ['menus' => $menus]);
 
    }

    public function create()
    {
        return view('menu.create');
    }


    public function store(MenuRequest $request)
    {   
        // $validator = Validator::make($request->all(),
        // [
        //     'name' => ['required', 'min:2', 'max:64'],
        //     'surname' => ['required', 'min:2', 'max:64'],
        // ],
        // [
        //     'name.min' => 'Please enter at least 2 characters for menu name',
        //     'name.max' => 'Please enter no more than 64 characters for menu name',
        //     'surname.min' => 'Please enter at least 2 characters for menu surname',
        //     'surname.max' => 'Please enter at least 64 characters for menu surname'
        // ]
        // );
        // if ($validator->fails()) {
        //     $request->flash();
        //     return redirect()->back()->withErrors($validator);
        // }
        // $menu = new menu;
        $menu = Menu::create($request->all());
        // $menu->name = $request->menu_name;
        // $menu->surname = $request->menu_surname;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $menu->photo = $name;
        }
        $menu->save();

        return redirect()->route('menu.index')->with('success_message', 'Sucsesfully created.');
        
    }


    public function show(Menu $menu)
    {
        //
    }


    public function edit(Menu $menu)
    {
        return view('menu.edit', ['menu' => $menu]);
    }

    public function update(MenuRequest $request, Menu $menu)
    {   
        // $validator = Validator::make($request->all(),
        // [
        //     'name' => ['required', 'min:2', 'max:64'],
        //     'surname' => ['required', 'min:2', 'max:64'],
        // ],
        // [
        //     'name.min' => 'Please enter at least 2 characters for menu name',
        //     'name.max' => 'Please enter no more than 64 characters for menu name',
        //     'surname.min' => 'Please enter at least 2 characters for menu surname',
        //     'surname.max' => 'Please enter at least 64 characters for menu surname'
        // ]
        // );
        // if ($validator->fails()) {
        //     $request->flash();
        //     return redirect()->back()->withErrors($validator);
        // }
        
        $menu->fill($request->all());
        // $menu->name = $request->name;
        // $menu->surname = $request->surname;
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $menu->photo = $name;
        }
        $menu->save();
        // return redirect()->route('menu.index');

        return redirect()->route('menu.index')->with('success_message', 'Succsesfully updated.');
    }


    public function destroy(Menu $menu)
    {
        if($menu->restaurants->count()){
            return redirect()->route('menu.index')->with('info_message', 'Don\'t delete, there are restaurants by this menu.');;
        }
        $menu->delete();
        // return redirect()->route('menu.index');

        return redirect()->route('menu.index')->with('success_message', 'Succesfully deleted.');
 
    }
}