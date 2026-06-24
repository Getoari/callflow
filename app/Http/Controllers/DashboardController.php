<?php

namespace App\Http\Controllers;


use App\Models\Lead;
use Inertia\Inertia;


class DashboardController extends Controller
{

    public function __invoke()
    {

        return Inertia::render('Dashboard', [

            'stats'=>[

                'total'=>Lead::count(),

                'hot'=>Lead::where(
                    'temperature',
                    'hot'
                )->count(),


                'warm'=>Lead::where(
                    'temperature',
                    'warm'
                )->count(),


                'cold'=>Lead::where(
                    'temperature',
                    'cold'
                )->count(),


                'pipeline'=>
                    Lead::sum(
                        'opportunity_value'
                    )

            ],


            'recentLeads'=>
                Lead::latest()
                ->take(5)
                ->get()


        ]);

    }

}