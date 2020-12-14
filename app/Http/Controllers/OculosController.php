<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oculos;
class OculosController extends Controller {
    
    public function novo() {
        return view('oculos.cadastro');
    }

    public function salvar(Request $request) {
        //valida dados inseridos pelo usuario, as condições são adicionadas atraves da barra pipe
        $request->validate([
            'cod'  => 'required|integer',
            'descricao'=> 'required',
            'grife' => 'required',
            ]);
            //Instanciar um objeto que sera definido pelo Model para salvar no banco. 
            //Request recebe os dados que foram enviados no formulario
        $oculos = new Oculos();
        $oculos->cod = $request->cod;
        $oculos->estilo = $request->estilo;
        $oculos->descricao = $request->descricao;
        $oculos->grife = $request->grife;

        $oculos->save();
            
        
            //outro tipo de redirecionamento, via rota. Com mensagemd e sucesso
        return redirect()->route('oculos.listar')->with('acao', 'Cadastrado com sucesso');
    }

    public function listar() {

        $resultados = Oculos::all();
        foreach($resultados as $oc){

        }

        //armazena dados na variavel em forma de vetor para ser imprimido na view.
        $dados['oculos'] = Oculos::all();
            
        
        return view('oculos.listar', $dados);
    }

    public function editar($id) {
        $dados = ['oculos' => Oculos::findOrfail($id)];
        
        return view('oculos.edicao', $dados);
    }
    
    public function atualizar(Request $request, $id) {
        $request->validate([
            'cod'  => 'required|integer',
            'descricao'=> 'required',
            'grife' => 'required',
           
        ]);
        $oculos = Oculos::findOrfail($id);
        $oculos->cod = $request->cod;
        $oculos->estilo = $request->estilo;
        $oculos->descricao = $request->descricao;
        $oculos->grife = $request->grife;

        $oculos->save();

        return redirect()->route('oculos.listar')->with('acao', 'Atualizado com sucesso');
    }

    public function visualizar($id) {


        $dados = ['oculos' => Oculos::findOrfail($id)];
        return view('oculos.visualizar', $dados);
    }

    public function excluir($id) {
        Oculos::destroy($id);
     
        return redirect()->route('oculos.listar')->with('acao', 'Excluído com sucesso');
    }
}
