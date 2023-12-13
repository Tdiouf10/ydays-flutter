<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // ENTREES
            [
                'category_id' => 2,
                'name' => "Tarte à l'oignon rapide",
                'description' => "Une tarte à l'oignon rapide à faire et très bonne.",
                'number_of_people' => 4,
                'cooking_time' => 30,
                'preparation_time' => 45,
                'dificulty' => 1,
            ],
            [
                'category_id' => 2,
                'name' => "Carpaccio de butternut, betterave et feta",
                'description' => "Une entrée fraîche et colorée, idéale pour l'été.",
                'number_of_people' => 6,
                'cooking_time' => 0,
                'preparation_time' => 15,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Tartare de tomate",
                'description' => "Une entrée fraîche et colorée, idéale pour l'été.",
                'number_of_people' => 4,
                'cooking_time' => 0,
                'preparation_time' => 15,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Soupe carottes rôties, tahini",
                'description' => "Une soupe automnale à la purée de sésame (tahini).",
                'number_of_people' => 6,
                'cooking_time' => 80,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Ceviche, leche de tigre et lime",
                'description' => "Un ceviche tout en fraîcheur, relevé par le lime, et adouci par le lait de coco.",
                'number_of_people' => 4,
                'cooking_time' => 1,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Salade japonaise",
                'description' => "On reproduit chez soi cette recette bien connue des aficionados des restaurants de sushis.",
                'number_of_people' => 4,
                'cooking_time' => 0,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Soupe de lentilles corail et courge butternut",
                'description' => "Réconfortant et exotique, c’est le parfait velouté de saison.",
                'number_of_people' => 6,
                'cooking_time' => 25,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Salade de carottes au citron confit, yaourt aux herbes",
                'description' => "Ne salez pas trop car le citron confit l’est déjà.",
                'number_of_people' => 4,
                'cooking_time' => 10,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Chaussons pommes, brie et oignon",
                'description' => "Servez-les avec une salade d’hiver à base d’endives et de scarole.",
                'number_of_people' => 6,
                'cooking_time' => 20,
                'preparation_time' => 10,
                'dificulty' => 4,
            ],
            [
                'category_id' => 2,
                'name' => "Ceviche de daurade (Pierre Hermé)",
                'description' => "On découvre cette recette incontournable de Pierre Hermé.",
                'number_of_people' => 10,
                'cooking_time' => 0,
                'preparation_time' => 30,
                'dificulty' => 4,
            ],

            // PLATS
            [
                'category_id' => 3,
                'name' => "Cordons-bleus au four",
                'description' => "Le classique cordon-bleu repensé, version healthy.",
                'number_of_people' => 4,
                'cooking_time' => 20,
                'preparation_time' => 30,
                'dificulty' => 1,
            ],
            [
                'category_id' => 3,
                'name' => "Filet mignon aux mirabelles, sauce à la moutarde",
                'description' => "Idéal pour les amateurs de sucré-salé.",
                'number_of_people' => 4,
                'cooking_time' => 30,
                'preparation_time' => 5,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Soupe de poissons comme à Marseille",
                'description' => "Un concentré de saveurs marines.",
                'number_of_people' => 4,
                'cooking_time' => 40,
                'preparation_time' => 45,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Mac and cheese au cheddar",
                'description' => "On teste notre recette de ce plat typique made in USA. ",
                'number_of_people' => 4,
                'cooking_time' => 35,
                'preparation_time' => 10,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Gratin de courgettes au curry",
                'description' => "Le goût des courgettes est relevé par le curry. ",
                'number_of_people' => 6,
                'cooking_time' => 40,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Kefta à l’agneau, aux épices et aux herbes, pita et tzatziki maison",
                'description' => "A savourer en famille.",
                'number_of_people' => 6,
                'cooking_time' => 15,
                'preparation_time' => 35,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Soupe butternut, chèvre et oeuf",
                'description' => "Une soupe généreuse à customiser au dernier moment.",
                'number_of_people' => 4,
                'cooking_time' => 40,
                'preparation_time' => 10,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Risotto de quinoa au butternut",
                'description' => "Ajoutez quelques noix concassées si vous souhaitez un peu de croquant.",
                'number_of_people' => 4,
                'cooking_time' => 40,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Poulet fermier à la normande",
                'description' => "Ce plat s’accorde parfaitement avec du riz sauvage.",
                'number_of_people' => 4,
                'cooking_time' => 60,
                'preparation_time' => 10,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Tian de pommes de terre, courgettes, oignon et morbier",
                'description' => "Un plat de caractère grâce au morbier, ce fromage du Jura AOP au lait cru de vache.",
                'number_of_people' => 4,
                'cooking_time' => 35,
                'preparation_time' => 15,
                'dificulty' => 4,
            ],
            [
                'category_id' => 3,
                'name' => "Frittata aux champignons",
                'description' => "Ce plat se décline à l’infini. Il est délicieux aussi avec des carottes, des épinards et de la feta.",
                'number_of_people' => 5,
                'cooking_time' => 35,
                'preparation_time' => 20,
                'dificulty' => 4,
            ],

            // DESERTS
            [
                'category_id' => 4,
                'name' => "Meringue rapide",
                'description' => "Une recette pour devenir la pro des meringues ! ",
                'number_of_people' => 4,
                'cooking_time' => 10,
                'preparation_time' => 30,
                'dificulty' => 1,
            ],
            [
                'category_id' => 4,
                'name' => "Moelleux chocolat",
                'description' => "Un gâteau au chocolat moelleux et fondant à souhait.",
                'number_of_people' => 6,
                'cooking_time' => 10,
                'preparation_time' => 12,
                'dificulty' => 2,
            ],
            [
                'category_id' => 4,
                'name' => "Crème au chocolat Thermomix",
                'description' => "Pour se régaler avec une crème onctueuse et fondante au bon goût de chocolat. ",
                'number_of_people' => 4,
                'cooking_time' => 2,
                'preparation_time' => 15,
                'dificulty' => 1,
            ],
            [
                'category_id' => 4,
                'name' => "Gâteau au yaourt",
                'description' => "Pour se régaler avec une crème onctueuse et fondante au bon goût de chocolat. ",
                'number_of_people' => 8,
                'cooking_time' => 15,
                'preparation_time' => 35,
                'dificulty' => 3,
            ],
            [
                'category_id' => 4,
                'name' => "Crêpes sans lait",
                'description' => "Une recette de crêpes idéale pour les intolérants au lactose.",
                'number_of_people' => 4,
                'cooking_time' => 10,
                'preparation_time' => 3,
                'dificulty' => 1,
            ],
            [
                'category_id' => 4,
                'name' => "Ratafia de raisin",

                'number_of_people' => 4,
                'cooking_time' => 25,
                'preparation_time' => 20,
                'dificulty' => 3,
            ],
            [
                'category_id' => 4,
                'name' => "Crème au chocolat",

                'number_of_people' => 6,
                'cooking_time' => 5,
                'preparation_time' => 35,
                'dificulty' => 1,
            ],
            [
                'category_id' => 4,
                'name' => "Smoothie aux fruits rouges",
                'description' => "Une recette de smoothie, facile, saine et gourmande !",
                'number_of_people' => 4,
                'cooking_time' => 5,
                'preparation_time' => 15,
                'dificulty' => 3,
            ],
            [
                'category_id' => 4,
                'name' => "Mon super banoffee",
                'description' => "On succombe à cette pâtisserie anglaise à base de banane et de de caramel.",
                'number_of_people' => 4,
                'cooking_time' => 20,
                'preparation_time' => 30,
                'dificulty' => 1,
            ],
            [
                'category_id' => 4,
                'name' => "Crumble aux raisins et aux pommes",
                'description' => "Une belle façon d’accommoder les raisins quand la vigne en donne à foison. Succès garanti, accompagné de crème fraîche.",
                'number_of_people' => 6,
                'cooking_time' => 20,
                'preparation_time' => 30,
                'dificulty' => 1,
            ],
            [
                'category_id' => 4,
                'name' => "Roses de pomme feuilletées",

                'number_of_people' => 6,
                'cooking_time' => 25,
                'preparation_time' => 48,
                'dificulty' => 1,
            ],

            // BOISSONS
            [
                'category_id' => 5,
                'name' => "Cocktail orgasme à la tequila",

                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 2,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Cocktail Tequila sunrise",
                'description' => "Un classique de la mixologie.",
                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 4,
                'dificulty' => 2,
            ],
            [
                'category_id' => 5,
                'name' => "Cocktail Blue Hawaiian au rhum et curaçao",

                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 2,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Soupe de champagne",
                'description' => "On teste cet apéritif originaire de la région Champagne-Ardenne.",
                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 10,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Cocktail Cosmopolitan à la vodka et à la fraise",

                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 2,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Mojito sans alcool",

                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 5,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Cocktail daiquiri",

                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 3,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Cocktail Jacqueline au vin blanc",

                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 2,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Cocktail Malibu Sunrise",
                'description' => "Un cocktail exotique pour l'apéritif.",
                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 5,
                'dificulty' => 1,
            ],
            [
                'category_id' => 5,
                'name' => "Cocktail vodka Martini",

                'number_of_people' => 1,
                'cooking_time' => 0,
                'preparation_time' => 2,
                'dificulty' => 1,
            ],
        ];

        foreach ($products as $product) {
            Product::factory()->create($product);
        }
    }
}
