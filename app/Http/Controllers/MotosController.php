<?php

namespace App\Http\Controllers;
use App\Moto;
use Illuminate\Http\Request;

class MotosController extends Controller
{
            public function index(){
                $motos=Moto::get();
                return view('sistema.motos.index', compact('motos'));

            }

            public function index2(){
                $motos=Moto::get();
                return view('sistema.formulariomotos', compact('motos'));


        }

        public function create(){

            return view('sistema.motos.create');

        }

        public function store(Request $request){

            $moto= Moto::create ($request->all());
            return redirect()->route('motos.index');

        }



        public function edit($id){
            $moto=Moto::findOrFail($id);
            return view('sistema.motos.edit')->with(compact('motos'));

        }


        public function  update(Request $request, $id){
                $moto=Moto::find($id);
                $moto->update($request->all());
                return redirect()->route('motos.index');


        }
        public function delete($id){
            $moto=Moto::destroy($id);
            return redirect('motos');
        }

        }

