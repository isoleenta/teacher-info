<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Admin::create([
             'name' => 'Олександр Коваль',
             'role' => Enums\Admin\Role::SUPER_ADMIN,
             'email' => 'super_admin@gmail.com',
             'password' => Hash::make('12345678'),
         ]);

        \App\Models\Admin::create([
            'name' => 'Владислав Щербина',
            'role' => Enums\Admin\Role::ADMIN,
            'email' => 'vlad@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\Admin::create([
            'name' => 'Заповнювач',
            'role' => Enums\Admin\Role::WRITER,
            'email' => 'teacher@kpi.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\User::create([
            'name' => 'Володимир',
            'surname' => 'Денисенко',
            'patronymic' => 'Віталійович',
            'position_at_work' => 'доцент',
            'structural_unit' => 'АПЕПС',
            'information_about_qualification' => 'доцент',
            'experience' => 15,
            'explanation' => 'Крутий викладач',
        ]);
        \App\Models\User::create([
            'name' => 'Василь',
            'surname' => 'Парахомин',
            'patronymic' => 'Петрович',
            'position_at_work' => 'Викладач математики',
            'structural_unit' => 'ІПСА',
            'information_about_qualification' => 'аспірант',
            'experience' => 7,
            'explanation' => 'Гарно знаю математику',
        ]);
        \App\Models\User::create([
            'name' => 'Галина',
            'surname' => 'Іванівна',
            'patronymic' => 'Мельниченковв',
            'position_at_work' => 'Викладач Історії',
            'structural_unit' => 'ФІОТ',
            'information_about_qualification' => 'професор',
            'experience' => 22,
            'explanation' => 'Професор зі стажем',
        ]);

        \App\Models\Discipline::create([
            'name' => 'С++',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Історія',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Укр Мова',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Програмування',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Математика',
        ]);
    }
}
