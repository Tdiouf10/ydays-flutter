import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:recette/helpers/auth.dart';
import 'package:recette/helpers/globals.dart';
import 'package:recette/screens/home.dart';
import 'package:recette/screens/register.dart';
import 'package:http/http.dart' as http;
import 'package:recette/widgets/custom_text_field.dart';

import 'package:recette/widgets/top_screen_image.dart';

import '../widgets/custom_button.dart';

class Login extends StatefulWidget {
  const Login({Key? key}) : super(key: key);

  @override
  State<Login> createState() => _LoginState();
}

class _LoginState extends State<Login> {
  String _email = '';
  String _password = '';

  Future submit() async {
    if (_email.isNotEmpty && _password.isNotEmpty) {
      http.Response response = await Auth.login(_email, _password);
      Map data = jsonDecode(response.body);
      if (response.statusCode == 200) {
        Navigator.push(
            context, MaterialPageRoute(builder: ((context) => const Home())));
      } else {
        // J'ai le message invalide credentials mais je veux le message de l'api qui est dans data['message']
        errorSnackBar(context, data['message']);
      }
    } else {
      errorSnackBar(context, 'Veuillez remplir tous les champs');
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea(
        child: Padding(
          padding: const EdgeInsets.only(),
          child: Column(
            children: [
              const TopScreenImage(screenImageName: 'home.jpg'),
              const Text(
                'Connexion',
                style: TextStyle(
                  color: Colors.indigo,
                  fontSize: 30,
                  fontWeight: FontWeight.bold,
                ),
              ),
              const SizedBox(
                height: 20,
              ),
              Scrollbar(
                child: SingleChildScrollView(
                  padding: const EdgeInsets.all(16),
                  child: Column(
                    children: [
                      CustomTextField(
                          hint: 'Entrer votre email',
                          label: 'Email',
                          obscureText: true,
                          onChanged: (value) {
                            setState(() {
                              _email = value;
                            });
                          }),
                      const SizedBox(
                        height: 16,
                      ),
                      CustomTextField(
                          hint: 'Entrer votre mot de passe',
                          label: 'Mot de passe',
                          obscureText: true,
                          onChanged: (value) {
                            setState(() {
                              _password = value;
                            });
                          }),
                      CustomButton(onTap: submit, title: 'Se connecter')
                    ],
                  ),
                ),
              ),
              Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  const SizedBox(
                    child: Text("Vous n'avez pas de compte ?"),
                  ),
                  TextButton(
                    onPressed: () => Navigator.pushReplacement(
                      context,
                      MaterialPageRoute(
                          builder: ((context) => const Register())),
                    ),
                    child: const Text(
                      'Inscrivez-vous',
                      style: TextStyle(color: Colors.indigo),
                    ),
                  ),
                ],
              ),
            ],
          ),
        ),
      ),
    );
  }
}
