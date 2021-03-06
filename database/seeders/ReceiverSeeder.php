<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Receiver;

class ReceiverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Receiver::factory()->count(50)->create();
    }
}
