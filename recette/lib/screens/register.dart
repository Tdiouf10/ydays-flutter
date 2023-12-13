import 'package:flutter/material.dart';
import 'package:flutter_feather_icons/flutter_feather_icons.dart';
import 'package:recette/main.dart';
import 'package:recette/providers/auth.dart';
import 'package:recette/widgets/snack_bar.dart';

import 'package:provider/provider.dart';

import '../widgets/custom_button.dart';
import '../widgets/custom_text_field.dart';
import 'login.dart';

class Register extends StatefulWidget {
  const Register({super.key});

  @override
  State<Register> createState() => _RegisterState();
}

class _RegisterState extends State<Register> {
  final TextEditingController _name = TextEditingController();
  final TextEditingController _email = TextEditingController();
  final TextEditingController _password = TextEditingController();
  final TextEditingController _passwordConfirm = TextEditingController();

  final _formKey = GlobalKey<FormState>();

  Future submit() async {
    if (_formKey.currentState!.validate()) {
      await Provider.of<Auth>(context, listen: false).register(credential: {
        'name': _name.text,
        'email': _email.text,
        'password': _password.text,
        'password_confirmation': _passwordConfirm.text,
      });

      ScaffoldMessenger.of(context)
          .showSnackBar(snackBar(context, 'Inscription réussie', false));
      Navigator.pushReplacement(
          context, MaterialPageRoute(builder: ((context) => const HomePage())));
    } else {
      ScaffoldMessenger.of(context).showSnackBar(
          snackBar(context, 'Veuillez remplir tous les champs', true));
    }
  }

  @override
  void initState() {
    super.initState();
    _email.text = '';
    _name.text = '';
    _password.text = '';
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea(
        child: ListView(
          children: [
            Padding(
              padding: const EdgeInsets.only(top: 20),
              child: Column(
                children: [
                  const Text('Inscription',
                      style: TextStyle(
                          color: Colors.indigo,
                          fontSize: 30,
                          fontWeight: FontWeight.bold)),
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
                                email: _name,
                                hint: 'Entrer votre nom',
                                label: 'Name'),
                            const SizedBox(
                              height: 16,
                            ),
                            CustomTextField(
                                email: _email,
                                hint: 'exemple@gmail.com',
                                label: 'Email'),
                            const SizedBox(
                              height: 16,
                            ),
                            CustomTextField(
                                email: _password,
                                hint: 'Entrer votre mot de passe',
                                label: 'Mot de passe'),
                            const SizedBox(
                              height: 16,
                            ),
                            TextFormField(
                              decoration: InputDecoration(
                                border: OutlineInputBorder(
                                    borderRadius: BorderRadius.circular(10),
                                    borderSide: BorderSide(
                                      color: Colors.indigo.shade500,
                                    )),
                                focusedBorder: OutlineInputBorder(
                                    borderRadius: BorderRadius.circular(10),
                                    borderSide: const BorderSide(
                                        color: Colors.indigo, width: 2)),
                                labelText: 'Confirmer le mot de passe',
                                suffixIcon: GestureDetector(
                                  onTap: () {
                                    Provider.of<Auth>(context, listen: false)
                                        .toggleText();
                                  },
                                  child: context.watch<Auth>().obscureText
                                      ? const Icon(
                                          FeatherIcons.eyeOff,
                                          color: Colors.indigo,
                                        )
                                      : const Icon(
                                          FeatherIcons.eye,
                                          color: Colors.indigo,
                                        ),
                                ),
                              ),
                              obscureText:
                                  Provider.of<Auth>(context).obscureText,
                              controller: _passwordConfirm,
                              autofocus: true,
                              validator: (value) {
                                if (value == null || value.isEmpty) {
                                  return 'Confirmation de mot de passe obligatoire';
                                }
                                if (value != _password.text) {
                                  return 'Les mots de passe ne correspondent pas';
                                } else {
                                  return null;
                                }
                              },
                            ),
                            CustomButton(onTap: submit, title: 'S\'inscrire')
                          ],
                        ),
                      ),
                    ),
                  ),
                ],
              ),
            ),
            const SizedBox(
              height: 20,
            ),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                const Text('Vous avez déjà un compte ?'),
                TextButton(
                    onPressed: () => Navigator.pushReplacement(
                        context,
                        MaterialPageRoute(
                            builder: ((context) => const Login()))),
                    child: const Text(
                      'Connectez-vous',
                      style: TextStyle(color: Colors.indigo),
                    ))
              ],
            )
          ],
        ),
      ),
    );
  }
}
