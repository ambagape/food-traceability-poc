<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewFarmers;
use App\Nova\Metrics\NewProducts;
use App\Nova\Metrics\NewTransactions;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            (new NewFarmers)->width('2/3'), new NewProducts, new NewTransactions
        ];
    }
}
