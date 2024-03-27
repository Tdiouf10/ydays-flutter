import 'package:flutter/material.dart';
import 'package:flutter_feather_icons/flutter_feather_icons.dart';
import 'package:recette/main.dart';
import 'package:recette/providers/auth.dart';
import 'package:recette/screens/register.dart';
import 'package:recette/widgets/snack_bar.dart';

import 'package:provider/provider.dart';

class Login extends StatefulWidget {
  const Login({super.key});

  @override
  State<Login> createState() => _LoginState();
}

class _LoginState extends State<Login> {
  final TextEditingController _email = TextEditingController();
  final TextEditingController _password = TextEditingController();

  final _formKey = GlobalKey<FormState>();

  Future submit() async {
    if (_formKey.currentState!.validate()) {
      await Provider.of<Auth>(context, listen: false).login(
          credential: {
            'email': _email.text,
            'password': _password.text
          });

      ScaffoldMessenger.of(context).showSnackBar(
          snackBar(context, 'Connexion réussie', false));
      Navigator.pushReplacement(
          context, MaterialPageRoute(builder: ((context) => HomePage())));
    } else {
      ScaffoldMessenger.of(context)
          .showSnackBar(snackBar(context, 'Veuiilez remplir tous les champs', true));
    }
  }

  @override
  void initState() {
    super.initState();
    _email.text = '';
    _password.text = '';
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        padding: const EdgeInsets.symmetric(horizontal: 20),
        child: Form(
          key: _formKey,
          child: ListView(
            children: [
              const SizedBox(height: 50),
              Image.asset('assets/images/logo.png', height: 100),
              const SizedBox(height: 50),
              TextFormField(
                controller: _email,
                decoration: const InputDecoration(
                  hintText: 'Email',
                  prefixIcon: Icon(FeatherIcons.mail),
                ),
                validator: (value) {
                  if (value!.isEmpty) {
                    return 'Veuillez entrer votre email';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 20),
              TextFormField(
                controller: _password,
                obscureText: true,
                decoration: const InputDecoration(
                  hintText: 'Mot de passe',
                  prefixIcon: Icon(FeatherIcons.lock),
                ),
                validator: (value) {
                  if (value!.isEmpty) {
                    return 'Veuillez entrer votre mot de passe';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 20),
              ElevatedButton(
                onPressed: () {
                  submit();
                },
                child: const Text('Se connecter'),
              ),
              const SizedBox(height: 20),
              Row(
                mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  const Text('Vous n\'avez pas de compte ?'),
                  TextButton(
                    onPressed: () {
                      Navigator.pushReplacement(context,
                          MaterialPageRoute(builder: ((context) => const Register())));
                    },
                    child: const Text('S\'inscrire'),
                  )
                ],
              )
            ],
          ),
        ),
      ),
    );
  }

}