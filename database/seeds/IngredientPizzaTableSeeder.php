<?php

use App\Ingredient;
use App\Pizza;
use Illuminate\Database\Seeder;

class IngredientPizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $ingredients = Ingredient::all();
        $pizzas = Pizza::all();
        foreach($pizzas as $pizza){
            $counter = 0;
            while($counter<3){
                $isInPizza = false;
                $rand_ingredientID = Ingredient::inRandomOrder()->first()->id;
                foreach($pizza->ingredients as $ingredient){
                    if($ingredient->id == $rand_ingredientID) $isInPizza = true;
                }
                if(!$isInPizza){
                    $pizza->ingredients()->attach($rand_ingredientID);
                    $pizza->save();
                    $counter++;
                }
            }
        }
    }
}
