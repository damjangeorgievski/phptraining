<?php

namespace App\Enums;

enum Status: string
{
    case PAID = 'PAID';
    case PENDING = 'PENDING';
    case DECLINED = 'DECLINED';
}
