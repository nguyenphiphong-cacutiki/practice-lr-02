<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Channel;
use Illuminate\Support\Testing\Fakes\Fake;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $f = Faker::create();
        for($i = 0; $i < 100; $i++){
            Channel::create([
                'ChannelName' => $f->sentence(2, true),
                'Description' => $f->sentence(8, true),
                'SubscribersCount' => $f->numberBetween(20, 50),
                'URL' => $f->url()
            ]);
        }

    }
}
