import 'package:flutter/material.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';
import 'package:provider/provider.dart';
import 'package:recette/providers/auth.dart';
import 'package:recette/screens/home.dart';
import 'package:recette/screens/login.dart';

void main() {
  runApp(ChangeNotifierProvider(
    create: ((context) => Auth()),
    child: const MyApp(),
  ));
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: HomePage(),
    );
  }
}

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  final storage = FlutterSecureStorage();

  void _attemptAuthentication() async {
    String? key = await storage.read(key: 'auth');
    Provider.of<Auth>(context, listen: false).attempt(key);
  }

  @override
  void initState() {
    super.initState();
    _attemptAuthentication();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Recette'),
      ),
      body: Center(
        child: Consumer<Auth>(
          builder: (context, value, child) {
            if (value.authenticated) {
              return Home();
            } else {
              return Login();
            }
          },
        ),
      ),
    );
  }
}
