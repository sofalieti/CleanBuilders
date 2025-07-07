<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateAdminUser extends Command
{
    protected $signature = 'make:admin-user {--email=admin@admin.com} {--password=admin123}';
    protected $description = 'Создать пользователя-администратора';

    public function handle()
    {
        $email = $this->option('email');
        $password = $this->option('password');

        if (User::where('email', $email)->exists()) {
            $this->error('Пользователь с таким email уже существует!');
            return 1;
        }

        $user = User::create([
            'name' => 'admin',
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        // Назначаем роль admin для Orchid
        if (class_exists('Orchid\\Platform\\Models\\Role')) {
            $role = \Orchid\Platform\Models\Role::where('slug', 'admin')->first();
            if (!$role) {
                $role = \Orchid\Platform\Models\Role::create([
                    'slug' => 'admin',
                    'name' => 'Administrator',
                ]);
            }
            $user->addRole($role);
        }

        $this->info('Администратор успешно создан! Email: ' . $email . ' Пароль: ' . $password);
        return 0;
    }
} 