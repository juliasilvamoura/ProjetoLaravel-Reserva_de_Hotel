<?php

namespace App\Http\Controllers;

use App\models\Cliente;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\ClienteRequest;


class ClienteController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(ClienteRequest $request, Cliente $cliente)
    {
        $this->repository = $cliente;
        $this->request = $request;
    }

    //retornar pagina de listagem de cliente
    public function index(Request $request)
    {
       $registros = $this->repository->paginate(10);

        return view('cliente.index',[
            'registros' => $registros,
        ]);
    }

    //pagina para cadastrar novo cliente
    public function new()
    {
        return view('cliente.cadastrar');

    }

        //salvar registro de novo cliente
    public function create(ClienteRequest $request)
    {
        return redirect()->route('cliente.listar')->with('success','Registro Cadastrado com sucesso!');;
    }

    //retorna o registro de cliente para alteração dos dados
    public function update($id)
    {
        $registros = $this->repository->find($id);
        if(!$registros){
            return redirect()->back();
        }
        return view('cliente.alterar', [
            'registro' => $registros,
        ]);
    }

    //retorna o registro de cliente para excluir do banco de dados
    public function delete($id)
    {
        $registros = $this->repository->find($id);
        if(!$registros){
            return redirect()->back();
        }
        return view('cliente.excluir',[
            'registro' =>$registros,
        ]);
    }

    //retorna o registro para consulta
    public function view($id)
    {
        $registros = $this->repository->find($id);
        if(!$registros){
            return redirect()->back();
        }
        return view('cliente.consultar', [
            'registro' => $registros,
        ]);
    }

    //alterar no banco o resgistro do cliente - modificado pelo usuário - tela
    public function save(ClienteRequest $request, $id)
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
     public function search(ClienteRequest $request){
        
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
