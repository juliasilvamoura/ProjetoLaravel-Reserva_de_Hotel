<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Reserva;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Model\Cliente;
use App\Model\Quarto;
use App\Model\Pagamento;

class ReservaController extends Controller
{
    private $repository;
    protected $request;

    public function __construct(Request $request, Reserva $reserva)
    {
        $this->repository = $reserva;
        $this->request = $request;
    }

    //retornar pagina de listagem de reserva
    public function index(Request $request)
    {
       //$registros = $this->repository->paginate(10);

        return view('reserva.index');
      /*    ,[
            'registros' => $registros,
        ]); ERRO NO reserva/LISTAR */ 
    }

    //pagina para cadastrar novo reserva
    public function new()
    {
        $clientes = Cliente::all();
        $quartos = Quarto::all();
        $pagamentos = Pagamento::all();

        return view('reserva.cadastrar',[
            'clientes'=>$clientes,
            'quartos'=>$quartos,
            'pagamentos'=>$pagamentos,
        ]);

    }

        //salvar registro de novo reserva
    public function create(Request $request)
    {
        $dataa = $request->all();
        $dataa['data_chegada'] = Carbon::createFromFormat('d/m/Y',$request['data_chegada'])->format('Y-m-d');
        $this->repository->create($dataa);

        $data = $request->all();
        $data['data_saida'] = Carbon::createFromFormat('d/m/Y',$request['data_saida'])->format('Y-m-d');
        $this->repository->create($data);


        $clientes = Cliente::all();
        $quartos = Quarto::all();
        $pagamentos = Pagamento::all();

        return redirect()->route('reserva.listar')->with('success','Registro Cadastrado com sucesso!');
        //return view('reserva.index');
    }

    //retorna o registro de reserva para alteração dos dados
    public function update($id)
    {

        $clientes = Cliente::all();
        $quartos = Quarto::all();
        $pagamentos = Pagamento::all();


        $registro = $this->repository->find($id);

        if(!$registro){
            return redirect()->back();
        }
        return view('reserva.alterar', [
            'registro' => $registro,
            'clientes'=>$clientes,
            'quartos'=>$quartos,
            'pagamentos'=>$pagamentos,
        ]);
    }

    //retorna o registro de reserva para excluir do banco de dados
    public function delete($id)
    {
        $registro = $this->repository->find($id);
        $clientes = Cliente::all();
        $quartos = Quarto::all();
        $pagamentos = Pagamento::all();

        return view('reserva.excluir', [
            'registro' => $registro,
            'clientes'=>$clientes,
            'quartos'=>$quartos,
            'pagamentos'=>$pagamentos,
        ]);
    }

    //retorna o registro para consulta
    public function view($id)
    {

        $registro = $this->repository->find($id);

        $clientes = Cliente::all();
        $quartos = Quarto::all();
        $pagamentos = Pagamento::all();

        return view('reserva.consultar', [
            'registro' => $registro,
            'clientes'=>$clientes,
            'quartos'=>$quartos,
            'pagamentos'=>$pagamentos, 
        ]);
    }

    //alterar no banco o resgistro do reserva - modificado pelo usuário - tela
    public function save(Request $request, $id)
    {

        $dataa = $request->all();
        $registro = $this->repository->find($id);
        $dataa['data_chegada'] = Carbon::createFromFormat('d/m/Y',$request['data_chegada'])->format('Y-m-d');
        $registro->update($dataa);

        $data = $request->all();
        $registro = $this->repository->find($id);
        $data['data_saida'] = Carbon::createFromFormat('d/m/Y',$request['data_saida'])->format('Y-m-d');
        $registro->update($data);

        //return view('reserva.listar');
        return redirect()->route('reserva.listar')->with('success','Registro Alterado com sucesso!');
    }

    //excluir no banco o registro do reserva
    public function excluir( $id)
    {
        $registro = $this->repository->find($id);
        $registro->delete();
        return redirect()->route('reserva.listar')->with('success','Registro Excluído com sucesso!');
    }

    //cancela a operação do usuario
    public function cancel()
    {
        return redirect()->route('reserva.listar');
    }

    //buscar
     public function search(Request $request){
        
        $filters = $request->all();

        $registros = $this->repository->search($request->nome);

        return view('reserva.index', [
            'registros' => $registros,
            'filters' => $filters,
        ]);

    }

    public function home()
    {
        return view('reserva.home');
    } 
}
