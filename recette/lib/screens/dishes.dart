import 'dart:convert';

import 'package:flutter/material.dart';



class Dishes extends StatefulWidget {
  const Dishes({Key? key}) : super(key: key);

  @override
  State<Dishes> createState() => _DishesState();
}

class _DishesState extends State<Dishes> {

  // fonction pour récupérer l'ensemble des plats de mon api

  // function pour cliquer sur un plat et voir les détails de ce plat

  // créer des caroussels selon la difficulté des plats

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Plats'),
      ),
      body: const Center(
        child: Text('Plats'),
      ),
    );
  }
}