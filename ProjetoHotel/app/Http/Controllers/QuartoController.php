<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Quarto;
use App\Http\Controllers\Controller;

class QuartoController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Quarto $quarto)
    {
        $this->repository = $quarto;
        $this->request = $request;
    }

    //retornar pagina de listagem de quarto
    public function index(Request $request)
    {
       $registros = $this->repository->all();

        return view('quarto.index'
          ,[
            'registros' => $registros,
        ]);  
    }

    //pagina para cadastrar novo quarto
    public function new()
    {
        return view('quarto.cadastrar');

    }

        //salvar registro de novo quarto
    public function create(Request $request)
    {
        return redirect()->route('quarto.listar')->with('success','Registro Cadastrado com sucesso!');
        //return view('quarto.index');
    }

    //retorna o registro de quarto para alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('quarto.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de quarto para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);

        return view('quarto.excluir', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro para consulta
    public function view($id)
    {
        $registro = $this->repository->find($id);

        return view('quarto.consultar', [
            'registro' => $registro 
        ]);
    }

    //alterar no banco o resgistro do quarto - modificado pelo usuário - tela
    public function save(Request $request, $id)
    {
        //return view('quarto.listar');
        return redirect()->route('quarto.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do quarto
    public function excluir( $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('quarto.listar')->with('success','Registro Excluído com sucesso!');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('quarto.listar');
    }

    //buscar
     public function search(Request $request){
        
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('quarto.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('quarto.home');
    } 
}
