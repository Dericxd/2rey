<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Moviment;
use App\Product;
use App\History;



class MovimentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $moviments = Moviment::orderBy('id', 'DESC')->paginate(5);

      return view('user.moviments.index', compact('moviments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('user.moviments.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $moviment = Moviment::create($request->all());

      return redirect()->route('moviments.edit', $moviment->id)->with('info', 'Moviemiento creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $moviment = Moviment::find($id);
      $product = Product::find($id);

      return view('user.moviments.show', compact('moviment', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::orderBy('name', 'ASC')->pluck('name', 'id');
      $moviment = Moviment::find($id);

      return view('user.moviments.edit', compact('moviment'));
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
      $moviment = Moviment::find($id);

      $moviment->fill($request->all())->save();

      return redirect()->route('moviments.edit', $moviment->id)->with('info', 'Movimiento actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $moviment = Moviment::find($id)->delete();

      return back()->with('info', 'Eliminado correctamente');
    }
}
