import 'dart:convert';

import 'package:flutter/foundation.dart';
import 'package:recette/helpers/globals.dart';
import 'package:http/http.dart' as http;


class Auth {
  static Future<http.Response> register(String name, String email, String password, String password_confirmation) async {
    Map data = {
      'name': name,
      'email': email,
      'password': password,
      'password_confirmation': password_confirmation,
    };

    var body = json.encode(data);
    var url = Uri.parse('${baseURL}register');

    http.Response response = await http.post(url, headers: headers, body: body);

    if (kDebugMode) {
      print(response.body);
    }
    return response;
  }

  static Future<http.Response> login(String email, String password) async {
    Map data = {
      'email': email,
      'password': password,
    };

    var body = json.encode(data);
    var url = Uri.parse('${baseURL}login');

    http.Response response = await http.post(url, headers: headers, body: body);

    if (kDebugMode) {
      print(response.body);
    }
    return response;
  }
}