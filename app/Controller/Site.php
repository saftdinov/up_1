<?php

namespace Controller;

use Model\GraduateStudent;
use Model\Publication;
use Model\Thesis;
use Model\ScientificSupervisor;
use Model\User;
use Src\Auth\Auth;
use Src\Request;
use Src\View;

class Site
{
    public function hello(): string
    {
        $countStudents = GraduateStudent::count();
        $countPublications = Publication::count();
        $countDefenses = Thesis::where('Status', 'defended')->count();
        $countSupervisors = ScientificSupervisor::count();

        $data = [
            'countStudents'    => $countStudents,
            'countPublications'=> $countPublications,
            'countDefenses'    => $countDefenses,
            'countSupervisors' => $countSupervisors
        ];

        return (new View('site.hello', $data))->render();
    }

    public function login(Request $request): string
    {
        if (\Src\Auth\Auth::check()) {
            app()->route->redirect('/hello');
        }

        $message = '';

        if ($request->method === 'POST') {
            $login = $request->login ?? '';
            $password = $request->password ?? '';

            if (\Src\Auth\Auth::attempt(['login' => $login, 'password' => $password])) {
                app()->route->redirect('/hello');
                exit;
            } else {
                $message = 'Неверный логин или пароль';
            }
        }

        // ✅ ИСПОЛЬЗУЕМ echo + exit вместо return
        echo (new View('site.login', ['message' => $message]))->withoutLayout()->render();
        exit;
    }

    public function signup(Request $request): string
    {
        if (\Src\Auth\Auth::check()) {
            app()->route->redirect('/hello');
        }

        if ($request->method === 'POST') {
            \Model\User::create([
                'name' => $request->name,
                'login' => $request->login,
                'password' => $request->password
            ]);

            app()->route->redirect('/login');
            exit;
        }

        // ✅ ИСПОЛЬЗУЕМ echo + exit вместо return
        echo (new View('site.signup'))->withoutLayout()->render();
        exit;
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/login');
    }
}