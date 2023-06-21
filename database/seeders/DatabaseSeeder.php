<?php

namespace Database\Seeders;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
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
        
        //USUARIOS
        User::create(['name'=>'David','email'=>'davidroldan2901@gmail.com','role'=>'admin','password'=>Hash::make("Administrador1")]);
        
        User::create(['name'=>'Victor','email'=>'david.roldan.jimenez.al@iespoligonosur.org','role'=>'user','password'=>Hash::make("Usuario1")]);
        
        $this->call(EquiposSeeder::class);


    }
}
