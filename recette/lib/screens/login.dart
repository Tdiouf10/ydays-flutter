import 'package:flutter/material.dart';
import 'package:recette/main.dart';
import 'package:recette/providers/auth.dart';
import 'package:recette/screens/register.dart';
import 'package:recette/widgets/snack_bar.dart';

import 'package:provider/provider.dart';
import 'package:recette/widgets/top_screen_image.dart';

import '../widgets/custom_button.dart';
import '../widgets/custom_text_field.dart';

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
          credential: {'email': _email.text, 'password': _password.text});

      ScaffoldMessenger.of(context)
          .showSnackBar(snackBar(context, 'Connexion réussie', false));
      Navigator.pushReplacement(
          context, MaterialPageRoute(builder: ((context) => HomePage())));
    } else {
      ScaffoldMessenger.of(context).showSnackBar(
          snackBar(context, 'Veuiilez remplir tous les champs', true));
    }
  }

  @override
  void initState() {
    super.initState();
    _email.text = '';
    _password.text = '';
  }

  @override
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea(
        child: Padding(
          padding: const EdgeInsets.only(top: 20),
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
              Form(
                key: _formKey,
                child: Scrollbar(
                  child: SingleChildScrollView(
                    padding: const EdgeInsets.all(16),
                    child: Column(
                      children: [
                        CustomTextField(
                          email: _email,
                          label: 'Email',
                          hint: 'theo@gmail.com',
                        ),
                        const SizedBox(
                          height: 16,
                        ),
                        CustomTextField(
                          email: _password,
                          hint: 'Entrer votre mot de passe',
                          label: 'Mot de passe',
                        ),
                        CustomButton(onTap: submit, title: 'Login')
                      ],
                    ),
                  ),
                ),
              ),
              const SizedBox(
                height: 20,
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
                      MaterialPageRoute(builder: ((context) => const Register())),
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
