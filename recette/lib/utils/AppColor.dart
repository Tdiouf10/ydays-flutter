import 'package:flutter/material.dart';

class AppColor {
  static Color primary = const Color(0xFF042B11);
  static Color primarySoft = const Color(0xFF2F7D2D);
  static Color primaryExtraSoft = const Color(0xFFEEF4F4);
  static Color secondary = const Color(0xFFEDE5CC);
  static Color whiteSoft = const Color(0xFFF8F8F8);
  static LinearGradient bottomShadow = LinearGradient(colors: [const Color(0xFF107873).withOpacity(0.2), const Color(
      0xFF4FB957).withOpacity(0)], begin: Alignment.bottomCenter, end: Alignment.topCenter);
  static LinearGradient linearBlackBottom = LinearGradient(colors: [Colors.black.withOpacity(0.45), Colors.black.withOpacity(0)], begin: Alignment.bottomCenter, end: Alignment.topCenter);
  static LinearGradient linearBlackTop = LinearGradient(colors: [Colors.black.withOpacity(0.5), Colors.transparent], begin: Alignment.topCenter, end: Alignment.bottomCenter);
}
