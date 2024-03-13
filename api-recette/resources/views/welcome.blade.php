<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        @php
            $json_data = '{
                "title": "Green Healthy Meat & Vegetable Pizza.",
                "photo": "assets/images/popularnowpizza.jpg",
                "calories": "1500 Cal",
                "time": "25 min",
                "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "ingredients": [
                    {
                        "name": "Spinach",
                        "size": "250 g"
                    },
                    {
                        "name": "Noodles",
                        "size": "1000 g"
                    },
                    {
                        "name": "Chili",
                        "size": "50 g"
                    },
                    {
                        "name": "Chocolatte",
                        "size": "1000 g"
                    },
                    {
                        "name": "Broccoli",
                        "size": "150 g"
                    }
                ],
                "tutorial": [
                    {
                        "step": "1. Tuangkan Air.",
                        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    },
                    {
                        "step": "2. Masukkan Mie.",
                        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    },
                    {
                        "step": "3. Cuci Piringnya.",
                        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    },
                    {
                        "step": "4. Tambahkan Nasi.",
                        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    },
                    {
                        "step": "5. Buang semua isi piring.",
                        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat"
                    }
                ],
                "reviews": [
                    {
                        "username": "@username1",
                        "review": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    },
                    {
                        "username": "@username2",
                        "review": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    },
                    {
                        "username": "@username3",
                        "review": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    },
                    {
                        "username": "@username4",
                        "review": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
                    }
                ]
            }';

$array_data = json_decode($json_data, true);

print_r($array_data);
        @endphp
        hello bro Theo where are you from ?
    </body>
</html>
