<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(create_admin_user::class);
          factory(App\User::class, 5)->create();
          factory(App\Articulo::class, 20)->create();
    }
}
