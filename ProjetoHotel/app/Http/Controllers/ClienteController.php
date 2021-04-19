<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Cliente;
use Illuminate\Http\Request;
//use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Cliente $cliente)
    {
        $this->repository = $cliente;
        $this->request = $request;
    }

    //retornar pagina de listagem de cliente
    public function index(Request $request)
    {
       //$registros = $this->repository->paginate(10);

        return view('cliente.index');
      /*    ,[
            'registros' => $registros,
        ]); ERRO NO CLIENTE/LISTAR */ 
    }

    //pagina para cadastrar novo cliente
    public function new()
    {
        return view('cliente.cadastrar');

    }

        //salvar registro de novo cliente
    public function create(Request $request)
    {
        return redirect()->route('cliente.listar')->with('success','Registro Cadastrado com sucesso!');
        //return view('cliente.index');
    }

    //retorna o registro de cliente para alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('cliente.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de cliente para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);

        return view('cliente.excluir', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro para consulta
    public function view($id)
    {
        $registro = $this->repository->find($id);

        return view('cliente.consultar', [
            'registro' => $registro 
        ]);
    }

    //alterar no banco o resgistro do cliente - modificado pelo usuário - tela
    public function save(Request $request, $id)
    {
        //return view('cliente.listar');
        return redirect()->route('cliente.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do cliente
    public function excluir( $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('cliente.listar')->with('success','Registro Excluído com sucesso!');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('cliente.listar');
    }

    //buscar
     public function search(Request $request){
        
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('cliente.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('cliente.home');
    } 
}
