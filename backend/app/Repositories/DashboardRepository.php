<?php
namespace App\Repositories;

use App\Models\Dashboard;

class DashboardRepository
{
    public function pegarDadosDashboard()
    {
        return new Dashboard(
            "Integrações Workalove",
            [
                "ALUNOS PARA INSERIR",
                "ALUNOS PARA ATUALIZAR",
                "CURSOS PARA INSERIR",
                "CURSOS PARA ATUALIZAR",
                "DISCIPLINAS PARA INSERIR",
                "DISCIPLINAS PARA ATUALIZAR",
                "ALUNOS PARA CANCELAR",
                "ALUNOS EGRESSOS PARA INSERIR"
            ],
            [7, 51, 10, 19742, 47609, 35655, 15, 0]
        );
    }
}
