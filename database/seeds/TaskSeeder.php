<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'user_id' => 1,
            'sort_order' => 1,
            'completed_at' => '2017-01-03 16:05:00',
            'title' => 'Sink into existential despair',
            'description' => 'Wallow in nihilistic stupor about the futility of it all'
        ]);

        DB::table('tasks')->insert([
            'user_id' => 1,
            'sort_order' => 2,
            'title' => 'Feed the cats',
            'description' => 'Take out food for the cats and give it to them. Note: open it first.'
        ]);
        
        DB::table('tasks')->insert([
            'user_id' => 1,
            'sort_order' => 3,
            'title' => 'Bring back Firefly',
            'description' => 'Come on, how hard can it be. Just one more season.'
        ]);
        
        DB::table('tasks')->insert([
            'user_id' => 1,
            'sort_order' => 4,
            'title' => 'Denounce the evils of truth and love',
            'description' => 'Extend our reach to the stars above'
        ]);
    }
}
