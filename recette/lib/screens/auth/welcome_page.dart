import 'package:flutter/material.dart';
import 'package:recette/utils/AppColor.dart';
import 'package:recette/widgets/modals/login_modal.dart';
import 'package:recette/widgets/modals/register_modal.dart';

class WelcomePage extends StatelessWidget {


  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: SingleChildScrollView(
          child: Stack(
            children: [
              Container(
                width: MediaQuery.of(context).size.width,
                height: MediaQuery.of(context).size.height,
                decoration: const BoxDecoration(image: DecorationImage(image: AssetImage('assets/images/bg2.png'), fit: BoxFit.cover)),
              ),
              Positioned(
                bottom: 0,
                child: Container(
                  padding: const EdgeInsets.only(left: 16, right: 16, bottom: 32),
                  width: MediaQuery.of(context).size.width,
                  height: MediaQuery.of(context).size.height * 60 / 100,
                  decoration: BoxDecoration(gradient: AppColor.linearBlackBottom),
                  child: Column(
                    mainAxisAlignment: MainAxisAlignment.spaceBetween,
                    children: [
                      const Column(
                        mainAxisAlignment: MainAxisAlignment.start,
                        crossAxisAlignment: CrossAxisAlignment.center,
                        children: [
                          Padding(
                            padding: EdgeInsets.only(bottom: 16),
                            child: Text('Une petite faim', style: TextStyle(fontFamily: 'inter', fontWeight: FontWeight.w700, fontSize: 32, color: Colors.white)),
                          ),
                          Text("Nous allons vous aider", style: TextStyle(color: Colors.white)),
                        ],
                      ),
                      Column(
                        mainAxisAlignment: MainAxisAlignment.start,
                        crossAxisAlignment: CrossAxisAlignment.center,
                        children: [
                          // Get Started Button
                          SizedBox(
                            width: MediaQuery.of(context).size.width,
                            height: 60,
                            child: ElevatedButton(
                              onPressed: () {
                                showModalBottomSheet(
                                  context: context,
                                  backgroundColor: Colors.white,
                                  shape: const RoundedRectangleBorder(borderRadius: BorderRadius.only(topLeft: Radius.circular(20), topRight: Radius.circular(20))),
                                  isScrollControlled: true,
                                  builder: (context) {
                                    return RegisterModal();
                                  },
                                );
                              },
                              style: ElevatedButton.styleFrom(
                                shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10)),
                                primary: AppColor.primarySoft,
                              ),
                              child: Text('Se connecter', style: TextStyle(color: AppColor.secondary, fontSize: 16, fontWeight: FontWeight.w600, fontFamily: 'inter')),
                            ),
                          ),
                          const SizedBox(height: 16),
                          // Log in Button
                          SizedBox(
                            width: MediaQuery.of(context).size.width,
                            height: 60,
                            child: OutlinedButton(
                              onPressed: () {
                                showModalBottomSheet(
                                  context: context,
                                  backgroundColor: Colors.white,
                                  shape: const RoundedRectangleBorder(borderRadius: BorderRadius.only(topLeft: Radius.circular(20), topRight: Radius.circular(20))),
                                  isScrollControlled: true,
                                  builder: (context) {
                                    return LoginModal();
                                  },
                                );
                              },
                              style: OutlinedButton.styleFrom(
                                shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(10)),
                                side: BorderSide(color: AppColor.secondary.withOpacity(0.5), width: 1),
                                primary: Colors.white,
                              ),
                              child: Text('S\'inscrire', style: TextStyle(color: AppColor.secondary, fontSize: 16, fontWeight: FontWeight.w600, fontFamily: 'inter')),
                            ),
                          ),
                        ],
                      )
                    ],
                  ),
                ),
              ),
            ],
          ),
        ));
  }
}
