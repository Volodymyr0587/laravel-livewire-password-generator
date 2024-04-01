<?php

namespace App\Enums;

enum PasswordPart: string
{
    case Uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    case Lowercase = 'abcdefghijklmnopqrstuvwxyz';
    case Numbers = '0123456789';
    case Symbols = '!@#$%^&*()_+-=[]{}|;:,.<>?/~';
}
