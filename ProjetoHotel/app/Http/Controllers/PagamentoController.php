<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pagamento;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PagamentoController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Pagamento $pagamento)
    {
        $this->repository = $pagamento;
        $this->request = $request;
    }

    //retornar pagina de listagem de pagamento
    public function index(Request $request)
    {
       //$registros = $this->repository->paginate(10);

        return view('pagamento.index');
      /*    ,[
            'registros' => $registros,
        ]); ERRO NO pagamento/LISTAR */ 
    }

    //pagina para cadastrar novo pagamento
    public function new()
    {
        return view('pagamento.cadastrar');

    }

        //salvar registro de novo pagamento
    public function create(Request $request)
    {

        $dataa = $request->all();
        $dataa['data'] = Carbon::createFromFormat('d/m/Y',$request['data'])->format('Y-m-d');
        $this->repository->create($dataa);

        return redirect()->route('pagamento.listar')->with('success','Registro Cadastrado com sucesso!');
        //return view('pagamento.index');
    }

    //retorna o registro de pagamento para alteração dos dados
    public function update($id)
    {
        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('pagamento.alterar', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro de pagamento para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);

        return view('pagamento.excluir', [
            'registro' => $registro,
        ]);
    }

    //retorna o registro para consulta
    public function view($id)
    {
        $registro = $this->repository->find($id);

        return view('pagamento.consultar', [
            'registro' => $registro 
        ]);
    }

    //alterar no banco o resgistro do pagamento - modificado pelo usuário - tela
    public function save(Request $request, $id)
    {

        $dataa = $request->all();
        $registro = $this->repository->find($id);
        $dataa['data'] = Carbon::createFromFormat('d/m/Y',$request['data'])->format('Y-m-d');
        $registro->update($dataa);
        //return view('pagamento.listar');
        return redirect()->route('pagamento.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do pagamento
    public function excluir( $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('pagamento.listar')->with('success','Registro Excluído com sucesso!');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('pagamento.listar');
    }

    //buscar
     public function search(Request $request){
        
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('pagamento.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('pagamento.home');
    } 
}
