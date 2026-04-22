<?php

namespace Controller;

use Model\GraduateStudent;
use Model\ScientificSupervisor;
use Src\Request;
use Src\Validator\Validator;
use Src\View;

class PRAKTIC_WORK
{
    // Список всех аспирантов
    public function index(): string
    {
        $students = GraduateStudent::with(['supervisor'])->get();
        return (new View('students.index', ['students' => $students]))->render();
    }

    // Форма добавления аспиранта
    public function create(): string
    {
        $supervisors = ScientificSupervisor::all();

        return (new View('students.create', [
            'supervisors' => $supervisors
        ]))->render();
    }

    // Сохранение нового аспиранта
    public function store(Request $request): void
    {
        if ($request->method === 'POST') {
            // Валидация
            $validator = new Validator($request->all(), [
                'full_name' => ['required'],
                'department' => ['required'],
                'enrollment_date' => ['required'],
                'manager_id' => ['required']
            ], [
                'required' => 'Поле :field обязательно для заполнения'
            ]);

            if ($validator->fails()) {
                $supervisors = ScientificSupervisor::all();
                echo (new View('students.create', [
                    'supervisors' => $supervisors,
                    'errors' => $validator->errors(),
                    'old' => $request->all()
                ]))->render();
                exit;
            }

            // Создание аспиранта
            GraduateStudent::create([
                'Full_name' => $request->full_name,
                'Department' => $request->department,
                'enrollment_date' => $request->enrollment_date,
                'Manager_ID' => $request->manager_id
            ]);

            app()->route->redirect('/students');
            exit;
        }
    }
}