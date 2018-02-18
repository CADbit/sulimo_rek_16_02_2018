<?php

use Illuminate\Database\Seeder;

use App\Type;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::insert([
        	'name' => 'Podstawowe',
            'color' => 'primary'
        ]);
        Type::insert([
        	'name' => 'Normalne',
            'color' => 'secondary'
        ]);
        Type::insert([
        	'name' => 'Spotkanie',
            'color' => 'success'
        ]);
        Type::insert([
        	'name' => 'Ważne',
            'color' => 'danger'
        ]);
        Type::insert([
        	'name' => 'Priorytet',
            'color' => 'warning'
        ]);
        Type::insert([
        	'name' => 'Przypomnienie',
            'color' => 'info'
        ]);
        
    }
}
