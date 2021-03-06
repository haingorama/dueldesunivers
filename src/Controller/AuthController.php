<?php

namespace Controller;

use Entity\User;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class AuthController extends AbstractController
{
    public function login(Request $request): Response
    {
        $userRepo = $this->getOrm()->getRepository(User::class);

        if ($request->request->has('username') && $request->request->has('password')) {
            $criateWithloginAndPawword = [
                "nickname" => $request->request->get('username'),
                "password" => $request->request->get('password')
            ];
            $usersWithThisNicknameAndPassword = $userRepo->findBy($criateWithloginAndPawword);
            if (count($usersWithThisNicknameAndPassword) == 1) {
                $request->getSession()->set("user", $usersWithThisNicknameAndPassword[0]);
                return $this->redirectToRoute("display");
            } else {
                $errorMsg = "Wrong login and/or password.";
                $data = array(
                    "errorMsg" => $errorMsg
                );
                return $this->render("loginForm.php", $data);
            }
        } else {
            return $this->render("loginForm.php");
        }
    }

    public function logout(Request $request): Response
    {
        if ($request->getSession()->has('user')) {
            $request->getSession()->remove('user');
        }
        return $this->redirectToRoute("display");
    }

    public function register(Request $request): Response
    {
        $userRepo = $this->getOrm()->getRepository(User::class);
        $manager = $this->getOrm()->getManager();
        
        if ($request->request->has('username') && $request->request->has('password') && $request->request->has('passwordRetype')) {
            $errorMsg = NULL;
            $criateriaWithlogin = [
                "nickname" => $request->request->get('username')
            ];
            $usersWithThisUsername = $userRepo->findBy($criateriaWithlogin);
            if (count($usersWithThisUsername) > 0) {
                $errorMsg = "Nickname already used.";
            } else if ($request->request->get('password') != $request->request->get('passwordRetype')) {
                $errorMsg = "Passwords are not the same.";
            } else if (strlen(trim($request->request->get('password'))) < 4) {
                $errorMsg = "Your password should have at least 4 characters.";
            } else if (strlen(trim($request->request->get('username'))) < 4) {
                $errorMsg = "Your nickame should have at least 4 characters.";
            }
            if ($errorMsg) {
                $data = array(
                    "errorMsg" => $errorMsg
                );
                return $this->render("RegisterForm.php", $data);
            } else {
                $newUser = new User();
                $newUser->nickname = $request->request->get('username');
                $newUser->password = $request->request->get('password');
                $manager->persist($newUser);
                $manager->flush();
                $request->getSession()->set("user", $newUser);
                return $this->redirectToRoute("display");
            }
        } else {
            return $this->render("RegisterForm.php");
        }
    }  
}