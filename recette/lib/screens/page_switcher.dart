import 'package:flutter/material.dart';

import '../utils/AppColor.dart';
import '../widgets/custom_bottom_navigation_bar.dart';
import 'bookmarks_page.dart';
import 'explore_page.dart';
import 'home_page.dart';

class PageSwitcher extends StatefulWidget {
  const PageSwitcher({super.key});

  @override
  _PageSwitcherState createState() => _PageSwitcherState();
}

class _PageSwitcherState extends State<PageSwitcher> {
  int _selectedIndex = 0;

  _onItemTapped(int index) {
    setState(() {
      _selectedIndex = index;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      extendBody: true,
      body: Stack(
        children: [
          [
            HomePage(),
            ExplorePage(),
            const BookmarksPage(),
          ][_selectedIndex],
          const BottomGradientWidget(),
        ],
      ),
      bottomNavigationBar: CustomBottomNavigationBar(
          onItemTapped: _onItemTapped, selectedIndex: _selectedIndex),
    );
  }
}

class BottomGradientWidget extends StatelessWidget {
  const BottomGradientWidget({super.key});

  @override
  Widget build(BuildContext context) {
    return Positioned(
      bottom: 0,
      child: Container(
        width: MediaQuery.of(context).size.width,
        height: 150,
        decoration: BoxDecoration(gradient: AppColor.bottomShadow),
      ),
    );
  }
}
