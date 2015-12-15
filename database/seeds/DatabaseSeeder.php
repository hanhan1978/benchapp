<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Todo;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('todos')->delete();
        Todo::create(['content' => 'buy some milk']);
        Todo::create(['content' => 'excercise']);
        Todo::create(['content' => 'leran Scheme']);
        Todo::create(['content' => 'configure nginx']);
        Todo::create(['content' => 'configure apache']);
        Todo::create(['content' => 'create behat test']);
        Model::reguard();
    }
}
