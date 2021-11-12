<?php

namespace Database\Seeders;

use App\Models\ClientFeedback;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client_feedback')->delete();
        $feedback = new ClientFeedback();
        $feedback->user_id = User::where('roles_name','["client"]')->get()->random()->id;
        $feedback->serv_id = Service::all()->random()->id;
        $feedback->feedback = 'nice people and very good services thank you so much wolf company ';
        $feedback->save();
    }
}
