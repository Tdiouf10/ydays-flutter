<?php

namespace App\Helppers;

class JsonRecetteData
{
    public static function fictiveRecetteData(): array
    {
        return [
            [
                "product" => [
                    "category_id" => 1,
                    "title" => "Green Healthy Meat & Vegetable Pizza.",
                    "photo" => "assets/images/popularnowpizza.jpg",
                    "calories" => 1500,
                    "time" => 25,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Broccoli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 9,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 5,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 1,
                    "title" => "Green Leafy Vegetable Dish.",
                    "photo" => "assets/images/featured2.jpg",
                    "calories" => 1500,
                    "time" => 25,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Broccoli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 2,
                    "title" => "Brown Chopstick Bowl",
                    "photo" => "assets/images/recom2.jpg",
                    "calories" => 1500,
                    "time" => 25,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Broccoli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 2,
                    "title" => "Delicious Salad with Egg.",
                    "photo" => "assets/images/recom1.jpg",
                    "calories" => 870,
                    "time" => 32,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Broccoli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 2,
                    "title" => "Healthy Vege Green Egg.",
                    "photo" => "assets/images/list1.jpg",
                    "calories" => 1500,
                    "time" => 25,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 3,
                    "title" => "Pancake with Honey.",
                    "photo" => "assets/images/sweetfood1.jpg",
                    "calories" => 1500,
                    "time" => 25,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 3,
                    "title" => "Chocolate Pancake.",
                    "photo" => "assets/images/sweetfood2.jpg",
                    "calories" => 870,
                    "time" => 32,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 3,
                    "title" => "Delicious Salad by Ron.",
                    "photo" => "assets/images/list2.jpg",
                    "calories" => 870,
                    "time" => 32,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 2,
                    "title" => "Basil Leaves & Avocado Bread.",
                    "photo" => "assets/images/list4.jpg",
                    "calories" => 1200,
                    "time" => 40,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 4,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 4,
                    "title" => "Healthy Beef & Egg.",
                    "photo" => "assets/images/list5.jpg",
                    "calories" => 1100,
                    "time" => 30,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 2,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 1,
                    "title" => "Meats and Vegetables Bowl.",
                    "photo" => "assets/images/list6.jpg",
                    "calories" => 1450,
                    "time" => 120,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],
            [
                "product" => [
                    "category_id" => 4,
                    "title" => "Breakfast Delimenu.",
                    "photo" => "assets/images/list3.jpg",
                    "calories" => 870,
                    "time" => 32,
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                ],
                "ingredients" => [
                    [
                        "name" => "Spinach",
                        "size" => 250
                    ],
                    [
                        "name" => "Noodles",
                        "size" => 1000
                    ],
                    [
                        "name" => "Chili",
                        "size" => 50
                    ],
                    [
                        "name" => "Chocolatte",
                        "size" => 1000
                    ],
                    [
                        "name" => "Brocolli",
                        "size" => 150
                    ]
                ],
                "tutorial" => [
                    [
                        "step" => "1. Tuangkan Air.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "2. Masukkan Mie.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "3. Cuci Piringnya.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "4. Tambahkan Nasi.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ],
                    [
                        "step" => "5. Buang semua isi piring.",
                        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    ]
                ],
                "reviews" => [
                    [
                        "user_id" => 3,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ],
                    [
                        "user_id" => 1,
                        "review" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    ]
                ]
            ],

        ];


    }
}
