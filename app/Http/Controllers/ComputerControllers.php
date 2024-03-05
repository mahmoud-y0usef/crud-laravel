<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerControllers extends Controller
{
    // private static function getData(){
    //     return [
    //         ['id' => 1, 'name' => 'Dell', 'price' => 500],
    //         ['id' => 2, 'name' => 'HP', 'price' => 600],
    //         ['id' => 3, 'name' => 'Lenovo', 'price' => 700],
    //         ['id' => 4, 'name' => 'Asus', 'price' => 800],
    //         ['id' => 5, 'name' => 'Acer', 'price' => 900],
    //     ];
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', ['computers' => $computers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'price' => 'required | integer'
        ]);


        $computer = new Computer();
        $computer->name = strip_tags($request->input('name'));
        $computer->price = strip_tags($request->input('price'));
        $computer->save();

        if ($computer->save()){
            return redirect('/computers')->with('message', 'Computer has been added successfully');
        }else{
            return redirect('/computers/create')->with('message', 'Computer has not been added successfully');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $index = Computer::findOrFail($id);

        return view('computers.show', ['computer' => $index]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $index = Computer::findOrFail($id);

        return view('computers.edit', ['computer' => $index]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required | string',
            'price' => 'required | integer'
        ]);

        $computer = Computer::findOrFail($id);
        $computer->name = strip_tags($request->input('name'));
        $computer->price = strip_tags($request->input('price'));
        $computer->save();

        if ($computer->save()){
            return redirect('/computers')->with('message', 'Computer has been updated successfully');
        }else{
            return redirect('/computers/create')->with('message', 'Computer has not been updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Computer::destroy($id);
        return redirect('/computers')->with('message', 'Computer has been deleted successfully');
    }
}
