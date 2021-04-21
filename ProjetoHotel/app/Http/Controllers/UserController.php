<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, User $usuario)
    {
        $this->repository = $usuario;
        $this->request = $request;
    }

    //retornar pagina de listagem de usuario
    public function index(Request $request)
    {
       $registros = $this->repository->all();

        return view('usuario.index'
          ,[
            'registros' => $registros,
        ]);
    }

    //pagina para cadastrar novo usuario
    public function new()
    {

        return view('usuario.cadastrar');

    }

        //salvar registro de novo usuario
    public function create(Request $request)
    {
        $data = $request->all();

        $this->repository->create($data);

        return redirect()->route('usuario.listar')->with('success','Registro Cadastrado com sucesso!');
        
    }

    //retorna o registro de usuario para alteração dos dados
    public function update($id)
    {

        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('usuario.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de usuario para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }

        return view('usuario.excluir', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro para consulta
    public function view($id)
    {

        $registro = $this->repository->find($id);


        return view('usuario.consultar', [
            'registro' => $registro, 
        ]);
    }

    //alterar no banco o resgistro do usuario - modificado pelo usuário - tela
    public function save(Request $request, $id)
    {

        
        return redirect()->route('usuario.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do usuario
    public function excluir( $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('usuario.listar')->with('success','Registro Excluído com sucesso!');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('usuario.listar');
    }

    //buscar
     public function search(Request $request){
        
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('usuario.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('usuario.home');
    } 
}
