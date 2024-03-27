import 'package:flutter/material.dart';

SnackBar snackBar(BuildContext context, String msg, bool error) {
  return SnackBar(
    backgroundColor: error ? Colors.red : Colors.green,
    content: Text(
      msg,
      style: const TextStyle(
        color: Colors.white,
        fontSize: 16,
        fontWeight: FontWeight.w500,
      ),
      textAlign: TextAlign.center,
    ),
    duration: const Duration(seconds: 3),
  );
}