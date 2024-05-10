<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chamado;
class ChamadoController extends Controller
{
    
    public function index(){
        $chamadosResolvidos = session('chamados_resolvidos', 0);
        
        return view('home')->with('chamadosResolvidos', $chamadosResolvidos);;
    }
    public function create(){
        return view('adicionar');
    }
    public function delete(){
        $chamados=Chamado::all();
        return view('deletar',['chamados'=>$chamados]);
        
    }
    public function update(){
        $chamados=Chamado::all();
        return view('atualizar',['chamados'=>$chamados]);
        
    }
    public function read(){
        $chamados=Chamado::all();
        return view('listar',['chamados'=>$chamados]);
        
    }

    public function store(Request $request){
        $chamado=new Chamado();
        $chamado->titulo = $request->titulo;
        $chamado->descricao = $request->descricao;
        $chamado->categoria = $request->categoria;
        $chamado->situacao="Novo";
        $chamado->prazodesolucao = Carbon::now()->addDays(3);
        $chamado->save();
        return redirect('/');
    }

    public function destroy($id){
        Chamado::findOrFail($id)->delete();
        return redirect('/');
    }

    public function edit(Request $request,$id){
        $chamado = Chamado::findOrFail($id);
        $chamado->update(['situacao'=>$request->situacao]);
        if($request->situacao=='Resolvido' &&  $chamado->prazodesolucao>Carbon::now()){
            $chamadosResolvidos = session('chamados_resolvidos', 0) + 1;
            session(['chamados_resolvidos' => $chamadosResolvidos]);
        }
        return redirect('/');
    }
}
