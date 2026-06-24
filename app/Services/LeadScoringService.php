<?php

namespace App\Services;


use App\Models\Lead;


class LeadScoringService
{

    public function calculate(Lead $lead): int
    {

        $score = 0;


        if($lead->company)
            $score += 20;


        if($lead->email)
            $score += 10;


        if($lead->phone)
            $score += 10;



        if($lead->opportunity_value >= 10000)
            $score += 30;



        if($lead->last_contacted_at)
            $score += 20;



        return min($score,100);

    }



    public function temperature(int $score)
    {

        return match(true){

            $score >= 80 => 'hot',

            $score >= 50 => 'warm',

            default => 'cold'

        };

    }

}