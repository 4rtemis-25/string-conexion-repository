<?php

namespace App\Http\Controllers;

use App\Models\Cadena;
use Illuminate\Http\Request;

/**
 * Class CadenaController
 * @package App\Http\Controllers
 */
class CadenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadenas = Cadena::paginate();

        return view('cadena.index', compact('cadenas'))
            ->with('i', (request()->input('page', 1) - 1) * $cadenas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cadena = new Cadena();
        return view('cadena.create', compact('cadena'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cadena::$rules);

        $cadena = Cadena::create($request->all());

        return redirect()->route('cadenas.index')
            ->with('success', 'Cadena created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadena = Cadena::find($id);

        return view('cadena.show', compact('cadena'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadena = Cadena::find($id);

        return view('cadena.edit', compact('cadena'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cadena $cadena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadena $cadena)
    {
        request()->validate(Cadena::$rules);

        $cadena->update($request->all());

        return redirect()->route('cadenas.index')
            ->with('success', 'Cadena updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cadena = Cadena::find($id)->delete();

        return redirect()->route('cadenas.index')
            ->with('success', 'Cadena deleted successfully');
    }
}
