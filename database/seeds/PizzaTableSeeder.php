<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = config('pizze');

        foreach ($pizzas as $pizza) {
            $new_pizza = new Pizza();
            $new_pizza->name = $pizza['nome'];
            $new_pizza->description = $pizza['ingredienti'];
            $new_pizza->price = $pizza['prezzo'];
            if ($pizza['vegetariana'] === 'sì') {
                $new_pizza->isVegetarian = true;
            }
            if (!empty($pizza['popolarita'])) {
                $new_pizza->popularity = $pizza['popolarita'];
            }

            $new_pizza->slug = Pizza::slugGenerator($pizza['nome']);

            $new_pizza->save();
        }
    }
}