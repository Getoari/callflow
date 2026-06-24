<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;



class LeadFactory extends Factory
{
    public function definition(): array
    {

        $score = fake()->numberBetween(20,100);


        return [

            'first_name'=>fake()->firstName(),

            'last_name'=>fake()->lastName(),

            'company'=>fake()->company(),

            'email'=>fake()->email(),

            'phone'=>fake()->phoneNumber(),


            'status'=>fake()->randomElement([
                'new',
                'contacted',
                'qualified',
                'won'
            ]),


            'score'=>$score,


            'temperature'=>
                $score >=80
                ? 'hot'
                :
                ($score >=50 ? 'warm':'cold'),



            'opportunity_value'
                => fake()->numberBetween(1000,50000),


            'notes'=>fake()->sentence()

        ];

    }
}