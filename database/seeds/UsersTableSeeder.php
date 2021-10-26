<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $rekayasaRole = Role::where('name', 'perekayasa')->first();
        $pabrikRole = Role::where('name', 'pabrik')->first();
        $outletRole = Role::where('name', 'outlet')->first();

        $rekayasa = User::create([
            'name' => 'rekayasa kopi',
            'email' => 'rekayasakylo@gmail.com',
            'alamat' => 'Jalan Sultan Agung nomer 5 Jakarta Pusat',
            'nomer' => '0892039102942',
            'tempat' => 'BSD Tanggerang Selatan',
            'status' => 'aktif',
            'password' => bcrypt('rekayasakopi123')
        ]);

        $pabrik = User::create([
            'name' => 'pabrik kopi',
            'email' => 'pabrikkylo@gmail.com',
            'alamat' => 'Jalan Kalimantan nomer 12 BSD',
            'nomer' => '081765829102365',
            'tempat' => 'Tanggerang Selatan',
            'status' => 'aktif',
            'password' => bcrypt('kylopabrik123')
        ]);

        $outlet = User::create([
            'name' => 'outlet kopi kylo tangsel',
            'email' => 'kylotangsel@gmail.com',
            'alamat' => 'Jalan Salahudin Jarupat nomer 54 Tanggerang Selatan',
            'nomer' => '081765829102365',
            'tempat' => 'Tanggerang Selatan',
            'status' => 'aktif',
            'password' => bcrypt('kylotangsel123')
        ]);

        $rekayasa->roles()->attach($rekayasaRole);
        $pabrik->roles()->attach($pabrikRole);
        $outlet->roles()->attach($outletRole);
    }
}
