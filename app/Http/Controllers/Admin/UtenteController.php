<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Utente;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
class UtenteController extends Controller
{
    public function index()
    {
        return view('utente.index');
    }
    public function store(Request $request)
    {

        $mensagens = [
            'required' => 'O :attribute é obrigatório!',
            'unique:utentes' => 'O :attribute já está sendo utilizado',
            'nome.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'nome.max' => 'É necessário no máximo 9 caracteres no nome!',
            'telefone.min' => 'É necessário no mínimo 9 caracteres no telefone!',
            'telefone.max' => 'É necessário no máximo 9 caracteres no telefone!',
            'email.email' => 'Digite um email válido!',

        ];
        $request->validate(
            [
            'nome'=>'required|max:255|min:4',
            'email'=>'required|email|unique:utentes',
            'PartipacaoExame'=>'required',
            'InfoExame'=>'required',
            'tipoParticpacao'=>'required',
            'provincia'=>'required',
            'municipio'=>'required',
            'pais'=>'required',
            'Instituicao'=>'required',
             'telefone'=>'required|min:9|max:9',

            ],
            $mensagens
        );
           Utente::create([
               'nome'=>$request->nome,
               'email'=>$request->email,
               'PartipacaoExame'=>$request->PartipacaoExame,
               'InfoExame'=>$request->InfoExame,
               'tipoParticpacao'=>$request->tipoParticpacao,
               'provincia'=>$request->provincia,
               'municipio'=>$request->municipio,
               'pais'=>$request->pais,
               'Instituicao'=>$request->Instituicao,
                'telefone'=>$request->telefone,
            ]);
            $data["bootstrap"] = file_get_contents("css/utentes/bootstrap.min.css");
            $data["css"] = file_get_contents("css/utentes/style.css");

            $pdf = PDF::Loadview("pdfs/convite", $data)->setPaper('a4', 'landscape');
            Mail::send('mail.index', array(

                'name' =>$request->nome,
                'email' => $request->email,
             ), function($message) use ($request,$pdf){
                 $message->from('simposio_exame_nacional@inade.gov.ao', 'Simposio Internacional')
                 ->to($request->email)
                 ->subject('Envio de confirmação e do convite')
                 ->attachData($pdf->output(),"convite.pdf");

             });
             return redirect()->back()->with('utenteadd','1');

    }
    public function list($id)
    {
       $utentes = Utente::find($id);
       return view('utente.list.index',compact('utentes'));
    }
    public function cartao($id)
    {
        $testi = Utente::find($id);
         $data['utentes'] = $testi;
        $data["bootstrap"] = file_get_contents("css/utentes/bootstrap.min.css");
        $data["css"] = file_get_contents("css/utentes/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 0,
            'margin_left' => 0,
            'margin_right' => 0, 'margin_bottom' => 0, 'format' => [90, 48]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/cartao", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("utente.pdf", "I");
    }
    public function certificado($id)
    {
        $testi = Utente::find($id);
         $data['utentes'] = $testi;
        $data["bootstrap"] = file_get_contents("css/utentes/bootstrap.min.css");
        $data["css"] = file_get_contents("css/utentes/style.css");
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 'margin_top' => 0,
            'margin_left' => 0,
            'margin_right' => 0, 'margin_bottom' => 0, 'format' => [210, 297]
        ]);
        $mpdf->SetFont("arial");
        $mpdf->setHeader();
        $mpdf->AddPage('L');
        $html = view("pdfs/certificado", $data);
        $mpdf->writeHTML($html);
        $mpdf->Output("utente.pdf", "I");
    }
}
