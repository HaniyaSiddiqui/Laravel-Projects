<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Models\Dummy;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dummy::class);
        //
    }
}
