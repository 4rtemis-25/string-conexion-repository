<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use App\Models\Cadena;
use App\Models\Programa;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class AprendiceController
 * @package App\Http\Controllers
 */
class AprendiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aprendices = Aprendice::paginate();

        return view('aprendice.index', compact('aprendices'));
            /* ->with('i', (request()->input('page', 1) - 1) * $aprendices->perPage()); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendice = new Aprendice();
        /**
         * LLAMAMOS LAS INSTANCIAS DE LOS MODELOS PARA MOSTRAR LA INFORMACION QUE QUERRAMOS
         * EN LUGAR DEL ID
         */
        $cadenas = Cadena::pluck('nombre_cadena', 'id');
        $programas = Programa::pluck('nombre_programa', 'id');
        $usuarios = User::pluck('name', 'id');
        return view('aprendice.create', compact('aprendice', 'cadenas', 'programas', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aprendice::$rules);

        $aprendice = Aprendice::create($request->all());

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendice created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aprendice = Aprendice::find($id);

        return view('aprendice.show', compact('aprendice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aprendice = Aprendice::find($id);
        /**
         * LLAMAMOS LAS INSTANCIAS DE LOS MODELOS PARA MOSTRAR LA INFORMACION QUE QUERRAMOS
         * EN LUGAR DEL ID
         */
        $cadenas = Cadena::pluck('nombre_cadena', 'id');
        $programas = Programa::pluck('nombre_programa', 'id');
        $usuarios = User::pluck('name', 'id');
        return view('aprendice.edit', compact('aprendice', 'cadenas', 'programas', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aprendice $aprendice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aprendice $aprendice)
    {
        request()->validate(Aprendice::$rules);

        $aprendice->update($request->all());

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendice updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aprendice = Aprendice::find($id)->delete();

        return redirect()->route('aprendices.index')
            ->with('success', 'Aprendice deleted successfully');
    }
}
