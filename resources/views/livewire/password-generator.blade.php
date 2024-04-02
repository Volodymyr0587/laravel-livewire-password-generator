{{-- <div class="m-10 items-center">
   <h1 class="font-bold text-lg">Password Generator</h1>

   <form wire:submit.prevent="generatePasswords">
        @csrf

        <label for="length">Password Length:</label>
        <input type="number" wire:model="length"><br><br>
        <p class="text-red-500">@error('length') {{ $message }} @enderror</p>

        <input type="checkbox" wire:model="uppercase" >
        <label for="uppercase">Include Uppercase Letters</label><br>
        <p class="text-red-500">@error('uppercase') {{ $message }} @enderror</p>

        <input type="checkbox" wire:model="lowercase" >
        <label for="lowercase">Include Lowercase Letters</label><br>
        <p class="text-red-500">@error('lowercase') {{ $message }} @enderror</p>

        <input type="checkbox" wire:model="numbers" >
        <label for="numbers">Include Numbers</label><br>
        <p class="text-red-500">@error('numbers') {{ $message }} @enderror</p>

        <input type="checkbox" wire:model="symbols" >
        <label for="symbols">Include Symbols</label><br><br>
        <p class="text-red-500">@error('symbols') {{ $message }} @enderror</p>

        <label for="quantity">Number of Passwords to Generate:</label>
        <input type="number" wire:model="quantity"><br><br>
        <p class="text-red-500">@error('quantity') {{ $message }} @enderror</p>

        <button type="submit">Generate Passwords</button>
   </form>

   <div>
        <ul>
            @foreach ($passwords as $password)
                <li>{{ $password }}</li>
            @endforeach
        </ul>
   </div>
</div> --}}

<div>
    <!-- Hero section -->
<section class="bg-blue-600 py-20">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-white font-bold text-5xl leading-tight mb-6">Discover the world's best coffee</h1>
            </div>
            <div class="md:w-1/2">
                <img src="https://plus.unsplash.com/premium_photo-1675716443562-b771d72a3da7" alt="Coffee beans"
                    class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Featured section -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Featured products</h2>

            <form wire:submit.prevent="generatePasswords" class="max-w-sm mx-auto mb-10">
                @csrf
                <div class="mb-5">
                    <label for="length" class="block mb-2 text-sm font-medium text-gray-900">Password Length:</label>
                    <input type="number" min="6" wire:model="length"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <p class="text-red-500">@error('length') {{ $message }} @enderror</p>
                </div>

                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input type="checkbox" wire:model="uppercase" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        <label for="uppercase" class="ms-2 text-sm font-medium text-gray-900">Include Uppercase Letters</label>
                    </div>

                    <div class="flex items-center h-5">
                        <input type="checkbox" wire:model="numbers" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        <label for="numbers" class="ms-2 text-sm font-medium text-gray-900">Include Numbers</label>
                    </div>

                    <div class="flex items-center h-5">
                        <input type="checkbox" wire:model="symbols" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300">
                        <label for="symbols" class="ms-2 text-sm font-medium text-gray-900">Include Symbols</label>
                    </div>
                </div>

                <div class="mb-5">
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Password Quantity:</label>
                    <input type="number" min="1" wire:model="quantity"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <p class="text-red-500">@error('quantity') {{ $message }} @enderror</p>
                </div>

                <button onclick="showMessage('Passwords generated successfully');" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Generate
                </button>

           </form>


            <div class="w-full flex justify-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-items-center mt-6 w-2/3">
                    @foreach ($passwords as $password)
                        <p class="flex flex-wrap justify-between bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg  w-full p-2.5">
                            {{ $password }}
                        </p>
                    @endforeach
                </div>
            </div>
    </div>

</section>
</div>

<script>
    function showMessage(message) {
        // Show a message
        var messageElement = document.createElement("div");
        messageElement.innerText = message;
        messageElement.style.position = "fixed";
        messageElement.style.bottom = "20px";
        messageElement.style.right = "20px";
        messageElement.style.background = "rgba(0, 0, 0, 0.8)";
        messageElement.style.color = "white";
        messageElement.style.padding = "10px";
        messageElement.style.borderRadius = "5px";
        messageElement.style.zIndex = "9999";
        document.body.appendChild(messageElement);
        // Remove the message after a few seconds
        setTimeout(function() {
            document.body.removeChild(messageElement);
        }, 4000);

        }
</script>
