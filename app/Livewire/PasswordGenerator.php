<?php

namespace App\Livewire;

use Livewire\Component;
use App\Enums\PasswordPart;
use Livewire\Attributes\Validate;

class PasswordGenerator extends Component
{
    #[Validate('required|numeric|min:6|max:32')]
    public $length;

    #[Validate('nullable|boolean')]
    public $uppercase;

    #[Validate('nullable|boolean')]
    public $numbers;

    #[Validate('nullable|boolean')]
    public $symbols;

    #[Validate('required|numeric|min:1|max:10')]
    public $quantity;

    public $passwords = [];


    public function generatePasswords()
    {
        $this->validate();

        $characters = PasswordPart::Lowercase->value;
        $characters .= $this->uppercase ? PasswordPart::Uppercase->value : '';
        $characters .= $this->numbers ? PasswordPart::Numbers->value : '';
        $characters .= $this->symbols ? PasswordPart::Symbols->value : '';

        $this->passwords = [];

        for ($i=0; $i < $this->quantity; $i++) {
            $this->passwords[] = $this->generateRandomString($this->length, $characters);
        }
    }

    private function generateRandomString($length, $characters)
    {
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    public function render()
    {
        return view('livewire.password-generator');
    }
}
