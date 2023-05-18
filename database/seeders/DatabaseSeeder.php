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
            'position_at_work' => 'Завідувач кафедри, Основне місце роботи',
            'structural_unit' => 'Факультет інформатики та обчислювальної техніки',
            'information_about_qualification' => 'Диплом доктора наук ДД 004503, виданий 30.06.2015, Атестат професора AП 000532, виданий 23.10.2018',
            'experience' => 15,
            'explanation' => 'Освіта: КПІ ім. Ігоря Сікорського, 1995, спеціальність: Компютерні та інтелектуалі системи та мережі, кваліфікація: Інженер системотехнік
Науковий ступінь:доктор технічних наук, 05.13.05 – комп’ютерні системи та компоненти, тема дисертації: Методи та засоби ефективної обробки паралельних задач в компютерних кластерних системах.
Вчене звання:професор за кафедрою обчислювальної техніки
Підвищення кваліфікації:
Курси НМК «Інститут післядипломної освіти» КПІ ім. Ігоря Сікорського, Свідоцтво про підвищення кваліфікації серія ПК No 02070921/005261- 19 за програмою «Організація та забезпечення технічного захисту інформації на об’єктах інформаційної діяльності та в інформаційно- телекомунікаційних системах». 1 листопаду 2019 року',
        ]);
        \App\Models\User::create([
            'name' => 'Василь',
            'surname' => 'Парахомин',
            'patronymic' => 'Петрович',
            'position_at_work' => 'Завідувач кафедри, Основне місце роботи',
            'structural_unit' => 'Факультет біомедичної інженерії',
            'information_about_qualification' => 'Диплом кандидата наук ДK 001225, виданий 22.12.2011, Атестат доцента 12ДЦ 034372, виданий 01.03.2013',
            'experience' => 7,
            'explanation' => 'Освіта: Київський державний інститут фізичної культури, спеціальність – фізична культура і спорт, кваліфікація:- викладач фізичного виховання. Науковий ступінь: Кандидат педагогічних наук, спеціальність:-13.00.02 – теорія та методика навчання (фізична культура, основи здоров’я). Тема дисертації: «Формування спеціальних умінь та навичок студентів вищих навчальних закладів у процесі навчання оздоровчого плавання».
Вчене звання: Доцент за кафедрою технологій оздоровлення і спорту. Підвищення кваліфікації: «Використання розширених сервісів Google для навчальної діяльності» (108 годин).
',
        ]);
        \App\Models\User::create([
            'name' => 'Галина',
            'surname' => 'Іванівна',
            'patronymic' => 'Мельниченковв',
            'position_at_work' => 'Доцент, Основне місце роботи',
            'structural_unit' => 'Факультет інформатики та обчислювальної техніки',
            'information_about_qualification' => 'Диплом магістра, Національний технічний університет України "Київський політехнічний інститут", рік закінчення: 2005, спеціальність: 091501 Компютернi системи та мережi, Диплом кандидата наук ДK 029949, виданий 30.06.2015, Атестат доцента AД 010536, виданий 06.06.2022',
            'experience' => 22,
            'explanation' => 'Вчене звання: Доцент за кафедрою обчислювальної техніки
Підвищення кваліфікації: Свідоцтво ПК No 02070921/005681-20 про підвищення кваліфікації в Інституті післядипломної освіти КПІ ім. Ігоря Сікорського за програмою «Англійська мова професійного спрямування (рівень В2)», термін: з 02.12.2019 по 12.06.2020, загальний обсяг 108 годин (3.6 кредити ЄКТС).
Види і результати професійної діяльності: 1, 4, 10, 12, 13
',
        ]);
        \App\Models\User::create([
            'name' => 'Артем',
            'surname' => 'Волокита',
            'patronymic' => 'Миколайович',
            'position_at_work' => 'Доцент, Основне місце роботи',
            'structural_unit' => 'Факультет інформатики та обчислювальної техніки',
            'information_about_qualification' => 'Диплом спеціаліста, Національний технічний університет України "Київський політехнічний інститут", рік закінчення: 2004, спеціальність: 091501 Компютерні системи та мережі, Диплом кандидата наук ДK 047643, виданий 02.07.2008, Атестат доцента 12ДЦ 037330, виданий 17.01.2014',
            'experience' => 22,
            'explanation' => 'Освіта: Національний технічний університет України “Київський політехнічний інститут”. 2004 р. Спеціальність “Комп’ютерні системи та мережі”. Кваліфікація: Інженер з комп’ютерних систем.
Науковий ступінь: Кандидат технічних наук, 01.05.03 – Математичне та програмне забезпечення обчислювальних машин та систем. Тема дисертації: «Методи і засоби підвищення ефективності систем моніторингу безпеки в компютерних системах і мережах».
    Вчене звання: доцент за кафедрою обчислювальної техніки.
    Підвищення кваліфікації: НМК «ІПО» КПІ ім. Ігоря Сікорського, курс підвищення кваліфікації "Англійська мова професійного спрямування (рівень В2)". Свідоцтво No ПК 02070921/005677-20. Місце проведення: КПІ ім. Ігоря Сікорського. Термін проведення: 2019-02-12 по 2020-12-06. Кількість годин: 108.
',
        ]);

        \App\Models\Discipline::create([
            'name' => 'Основи розроблення комп’ютерних ігор',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Мережі і мережні інформаційні технології',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Філософські основи наукового пізнання',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Дискретна математика',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Алгоритми та структури даних.',
        ]);
        \App\Models\Discipline::create([
            'name' => 'Операційні системи',
        ]);
    }
}
