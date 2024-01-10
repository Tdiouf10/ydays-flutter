import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

import '../helpers/auth.dart';
import '../helpers/globals.dart';

import '../widgets/custom_button.dart';
import '../widgets/top_screen_image.dart';
import 'home.dart';
import 'login.dart';

class Register extends StatefulWidget {
  const Register({Key? key}) : super(key: key);

  @override
  State<Register> createState() => _RegisterState();
}

class _RegisterState extends State<Register> {
  String _name = '';
  String _email = '';
  String _password = '';
  String _password_confirmation = '';

  Future submit() async {
    bool emailValid = RegExp(r'^.+@[a-zA-Z]+\.{1}[a-zA-Z]+(\.{0,1}[a-zA-Z]+)$')
        .hasMatch(_email);

    if (_password != _password_confirmation) {
      errorSnackBar(context, 'Les mots de passe ne correspondent pas');
    } else {
      if (emailValid) {
        http.Response response = await Auth.register(_name, _email, _password, _password_confirmation);
        Map data = jsonDecode(response.body);
        if (response.statusCode == 200) {
          Navigator.push(
              context, MaterialPageRoute(builder: ((context) => const Home())));
        } else {
          errorSnackBar(context, data.values.first);
        }
      } else {
        errorSnackBar(context, 'Veuillez entrer un email valide');
      }
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea(
        child: ListView(
          children: [
            Padding(
              padding: const EdgeInsets.only(),
              child: Column(
                children: [
                  const TopScreenImage(screenImageName: 'home.jpg'),
                  const Text(
                    'Inscription',
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
                          TextField(
                            decoration: const InputDecoration(
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.only(
                                    topLeft: Radius.circular(12),
                                    bottomRight: Radius.circular(12)
                                ),
                              ),
                              labelText: 'Nom',
                              hintText: 'Entrer votre nom',
                            ),
                            onChanged: (value) {
                              setState(() {
                                _name = value;
                              });
                            },
                          ),
                          const SizedBox(
                            height: 16,
                          ),
                          TextField(
                            decoration: const InputDecoration(
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.only(
                                    topLeft: Radius.circular(12),
                                    bottomRight: Radius.circular(12)
                                ),
                              ),
                              labelText: 'Email',
                              hintText: 'Entrer votre email',
                            ),
                            onChanged: (value) {
                              setState(() {
                                _email = value;
                              });
                            },
                          ),
                          const SizedBox(
                            height: 16,
                          ),
                          TextField(
                            obscureText: true,
                            decoration: const InputDecoration(
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.only(
                                    topLeft: Radius.circular(12),
                                    bottomRight: Radius.circular(12)
                                ),
                              ),
                              labelText: 'Mot de passe',
                              hintText: 'Entrer votre mot de passe',
                            ),
                            onChanged: (value) {
                              setState(() {
                                _password = value;
                              });
                            },
                          ),
                          const SizedBox(
                            height: 16,
                          ),
                          TextField(
                            obscureText: true,
                            decoration: const InputDecoration(
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.only(
                                    topLeft: Radius.circular(12),
                                    bottomRight: Radius.circular(12)
                                ),
                              ),
                              labelText: 'Confirmer le mot de passe',
                              hintText: 'Confirmez votre mot de passe',
                            ),
                            onChanged: (value) {
                              setState(() {
                                _password_confirmation = value;
                              });
                            },
                          ),
                          const SizedBox(
                            height: 16,
                          ),
                          CustomButton(
                              onTap: submit,
                              title: 'S\'inscrire'
                          ),
                        ],
                      ),
                    ),
                  ),
                ],
              ),
            ),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                const Text('Vous avez déjà un compte ?'),
                TextButton(
                  onPressed: () => Navigator.pushReplacement(
                    context,
                    MaterialPageRoute(builder: (context) => const Login()),
                  ),
                  child: const Text(
                    'Connectez-vous',
                    style: TextStyle(color: Colors.indigo),
                  ),
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
