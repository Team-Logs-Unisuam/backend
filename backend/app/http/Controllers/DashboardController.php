<?php

namespace App\Http\Controllers;

use App\repositories\DashboardRepository;
use App\repositories\LogRepository;

class DashboardController 
{
    protected $dashboardRepository;
    protected $logRepository;

    public function __construct(DashboardRepository $dashboardRepository, LogRepository $logRepository)
    {
        $this->dashboardRepository = $dashboardRepository;
        $this->logRepository = $logRepository;
    }

    public function pegarDadosDashboard()
    {
        $dashboard = $this->dashboardRepository->pegarDadosDashboard();
        $logs = $this->logRepository->pegarDadosLogs();

        return [
            'Dashboard' => $dashboard,
            'Logs' => $logs
        ];
    }
}
