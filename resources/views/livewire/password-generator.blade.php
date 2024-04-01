<div>
   <h1>Password Generator</h1>

   <form wire:submit.prevent="generatePasswords" method="POST">
        @csrf

        <label for="length">Password Length:</label>
        <input type="number" wire:model="length" min="6" max="32" required><br><br>

        <input type="checkbox" wire:model="uppercase" >
        <label for="uppercase">Include Uppercase Letters</label><br>

        <input type="checkbox" wire:model="lowercase" >
        <label for="lowercase">Include Lowercase Letters</label><br>

        <input type="checkbox" wire:model="numbers" >
        <label for="numbers">Include Numbers</label><br>

        <input type="checkbox" wire:model="symbols" >
        <label for="symbols">Include Symbols</label><br><br>

        <label for="quantity">Number of Passwords to Generate:</label>
        <input type="number" wire:model="quantity" min="1" max="10" required><br><br>

        <button type="submit">Generate Passwords</button>
   </form>

   <div>
        <ul>
            @foreach ($passwords as $password)
                <li>{{ $password }}</li>
            @endforeach
        </ul>
   </div>
</div>
