<?php

namespace App\Enums\Admin;

enum Role: int
{
    case WRITER = 0;
    case ADMIN = 1;
    case SUPER_ADMIN = 2;
}
