<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Service::count() == 0){
            Service::create([
                'title' => 'interisting news 1',
                'content' => 'some content for news 1'

            ]);
            Service::create([
                'title' => 'interisting news 2'

            ]);
            Service::create([
                'title' => 'interisting news 3',
            ]);
        }
    }
}
