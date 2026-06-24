<?php

namespace App\Http\Controllers;


use App\Models\Lead;
use App\Services\LeadScoringService;
use Illuminate\Http\Request;
use Inertia\Inertia;


class LeadController extends Controller
{


public function index(Request $request)
{

    $leads = Lead::query()
        ->when(
            $request->search,
            function($query,$search){

                $query->where(
                    'first_name',
                    'like',
                    "%$search%"
                )
                ->orWhere(
                    'company',
                    'like',
                    "%$search%"
                );

            }
        )
        ->latest()
        ->paginate(10);


    return Inertia::render(
        'Leads/Index',
        [
            'leads'=>$leads,
            'filters'=>$request->only('search')
        ]
    );

}



public function create()
{
    return Inertia::render(
        'Leads/Create'
    );
}



public function store(
    Request $request,
    LeadScoringService $scorer
)
{

    $data=$request->validate([

        'first_name'=>'required',
        'last_name'=>'required',

        'email'=>'required|email',

        'company'=>'nullable',

        'phone'=>'nullable',

        'opportunity_value'=>'nullable|numeric',

        'notes'=>'nullable'

    ]);



    $lead=Lead::create($data);



    $score=$scorer->calculate($lead);


    $lead->update([

        'score'=>$score,

        'temperature'=>
            $scorer->temperature($score)

    ]);



    return redirect()
        ->route('leads.index');

}




public function show(Lead $lead)
{

    return Inertia::render(
        'Leads/Show',
        [
            'lead'=>
                $lead->load('activities')
        ]
    );

}



public function destroy(Lead $lead)
{

    $lead->delete();


    return back();

}



public function update(
    Request $request,
    Lead $lead
)
{

    $lead->update(
        $request->all()
    );


    return back();

}



}