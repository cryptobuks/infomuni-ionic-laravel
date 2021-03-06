<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mapa;

class MapaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapas = Mapa::all();
        return view('infomapa.index', compact('mapas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infomapa.create');
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
            
                    'title'              => 'required|string|max:70',
                    'horarioapertura'     => 'required',
                    'horariocierre'            => 'required',
                    'dias1'          => 'required|not_in:0',
                    'dias2'          => 'required|not_in:0',
                    'contacto'          => 'required|integer',
                    'paginaweb'          => 'required|string|max:70',
                    'tipo'          => 'required|not_in:0',
                    'searchmap' => 'required'
                
            
        ],
        [   
            'title.required'    => 'El campo nombre es obligatorio.',
            'title.max'      => 'El campo nombre debe tener como máximo 70 caracteres.',
            'horarioapertura.required' => 'El campo horario apertura es obligatorio.',
            'horariocierre.required' => 'El campo horario cierre es obligatorio.',
            'dias1.required' => 'El campo día es obligatorio.',
            'dias2.required' => 'El campo día es obligatorio.',
            'contacto.required' => 'El campo contacto es obligatorio.',
            'contacto.integer' => 'El campo contacto solo permite números.',
            'paginaweb.required' => 'El campo página web es obligatorio.',
            'paginaweb.max' => 'El campo pagina web debe tener como máximo 70 caracteres.',
            'tipo.required'      => 'El campo tipo es obligatorio.',
            'searchmap.required' => 'El campo de busqueda es obligatorio.'
        ]);
        
        $mapa = new Mapa;
        $mapa->titulo = $request->title;
        $mapa->horario_apertura = $request->horarioapertura;
        $mapa->horario_cierre = $request->horariocierre;
        $mapa->dia_inicio = $request->dias1;
        $mapa->dia_termino = $request->dias2;
        $mapa->contacto = $request->contacto;
        $mapa->paginaweb = $request->paginaweb;
        $mapa->tipo = $request->tipo;
        $mapa->lat = $request->lat;
        $mapa->lng = $request->lng;
        $mapa->save();
        
        //dd($request->title,"/",$request->lat,"/",$request->lng);
        
       return redirect()->route('infomapa.index')
                        ->with('info', 'El lugar de interes '.$mapa->titulo.' fue creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapa = Mapa::find($id);
        //dd($mapa);
        return view('infomapa.edit', compact('mapa'));
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
            
                    'title'              => 'required|string|max:70',
                    'horarioapertura'     => 'required',
                    'horariocierre'            => 'required',
                    'dias1'          => 'required',
                    'dias2'          => 'required',
                    'contacto'          => 'required|integer',
                    'paginaweb'          => 'required|string|max:70',
                    'tipo'          => 'required'
                
            
        ],
        [   
            'title.required'    => 'El campo nombre es obligatorio.',
            'title.max'      => 'El campo nombre debe tener como máximo 70 caracteres.',
            'horarioapertura.required' => 'El campo horario apertura es obligatorio.',
            'horariocierre.required' => 'El campo horario cierre es obligatorio.',
            'dias1.required' => 'El campo día es obligatorio.',
            'dias2.required' => 'El campo día es obligatorio.',
            'contacto.required' => 'El campo contacto es obligatorio.',
            'contacto.integer' => 'El campo contacto solo permite números.',
            'paginaweb.required' => 'El campo página web es obligatorio.',
            'paginaweb.max' => 'El campo pagina web debe tener como máximo 70 caracteres.',
            'tipo.required'      => 'El campo tipo es obligatorio.',
            'searchmap.required' => 'El campo de busqueda es obligatorio.'
        ]);
        
        $mapa = Mapa::find($id);
        $mapa->titulo = $request->title;
        $mapa->horario_apertura = $request->horarioapertura;
        $mapa->horario_cierre = $request->horariocierre;
        $mapa->dia_inicio = $request->dias1;
        $mapa->dia_termino = $request->dias2;
        $mapa->contacto = $request->contacto;
        $mapa->paginaweb = $request->paginaweb;
        $mapa->tipo = $request->tipo;
        $mapa->lat = $request->lat;
        $mapa->lng = $request->lng;
        $mapa->save();

        return redirect()->route('infomapa.index')
                        ->with('info', 'El lugar de interes '.$mapa->titulo.' fue modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapas = Mapa::find($id);
        $mapas->delete();
        
    
        return back()->with('info', ' El lugar de interes '.$mapas->titulo.' fue eliminado correctamente!');
    }
}
