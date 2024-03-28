<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Denuncia;
use App\Models\Documento;
use App\Models\Mensaje;
use App\Models\Noticias;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getDenunciasByMonth()
    {
        $currentMonth = date('m');
        $currentYear = date('Y');
        $startMonth = $currentMonth - 12;
        $startYear = $currentYear;
    
        if ($startMonth <= 0) {
            $startMonth = 12 + $startMonth;
            $startYear--;
        }

        $meses = [
            "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
        ];
        
        $denunciasCount = DB::table('denuncia')
            ->select(DB::raw('YEAR(created_at) as year'), DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as total'))
            ->groupBy([
                DB::raw('YEAR(created_at)'),
                DB::raw('MONTH(created_at)')
            ])
            ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
            ->orderBy(DB::raw('MONTH(created_at)'), 'desc')
            ->get();

            //dd($denunciasCount);
    
        return $denunciasCount;
    }
    
    public function index()
    {
        $denuncias = $this->getDenunciasByMonth();
        
        $denunciasCount = Denuncia::count();
        $noticiasCount = Noticias::count();
        $documentosCount = Documento::count();
        $mensajesCount = Mensaje::count();

        return view('admin.index', [
            'denunciasCount' => $denunciasCount,
            'noticiasCount' => $noticiasCount,
            'documentosCount' => $documentosCount,
            'mensajesCount' => $mensajesCount,
            'denuncias' =>  $denuncias
        ]);
    }

}
