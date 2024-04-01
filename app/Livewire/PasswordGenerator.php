<?php

namespace App\Livewire;

use Livewire\Component;
use App\Enums\PasswordPart;

class PasswordGenerator extends Component
{
    public $length;
    public $uppercase;
    public $lowercase;
    public $numbers;
    public $symbols;
    public $quantity;
    public $passwords = [];

    protected $rules = [
        'lenght' => 'required|numeric|min:6|max:32',
        'uppercase' => 'nullable|boolean',
        'lowercase' => 'nullable|boolean',
        'numbers' => 'nullable|boolean',
        'symbols' => 'nullable|boolean',
        'quantity' => 'required|numeric|min:1|max:10',
    ];

    public function generatePasswords()
    {
        // $this->validate();

        $characters = '';
        $characters .= $this->uppercase ? PasswordPart::Uppercase->value : '';
        $characters .= $this->lowercase ? PasswordPart::Lowercase->value : '';
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
