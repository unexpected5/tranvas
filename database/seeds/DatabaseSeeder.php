<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Modules\Event\Event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name'=>'Prem',
        'email'=>'psarojanand@gmail.com',
        'password'=>bcrypt('password'),
        'is_active' => 1,
      ]);

      factory(Event::class,20),
        // $this->call(UsersTableSeeder::class);
    }
}
