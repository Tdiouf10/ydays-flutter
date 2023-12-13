import 'package:flutter/material.dart';


class TopScreenImage extends StatelessWidget {
  const TopScreenImage({super.key, required this.screenImageName});
  final String screenImageName;

  @override
  Widget build(BuildContext context) {
    return Image.asset(
      'assets/images/$screenImageName',
      width: 200, // Set the desired width
      height: 200, // Set the desired height
      fit: BoxFit.contain, // Choose an appropriate BoxFit
    );
  }
}
