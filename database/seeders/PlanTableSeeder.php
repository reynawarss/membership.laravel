<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'                  => 'Monthly Plan',
            'stripe_name'           => 'monthly',
            'stripe_product_id'     => 'prod_OkyYHw0NNwQiaY',
            'stripe_price_id'       => 'price_1NxSbRBRUxRe4Qtw5uHU1m0n',
            'price'                 => 2,
            'abbreviation'          => '/month',
        ]);

        Plan::create([
            'name'                  => 'Yearly Plan',
            'stripe_name'           => 'yearly',
            'stripe_product_id'     => 'prod_OkyZ6r3fKAVTWZ',
            'stripe_price_id'       => 'price_1NxSbvBRUxRe4QtwmtNtv9nI',
            'price'                 => 20,
            'abbreviation'          => '/yearly',
        ]);
    }
}
