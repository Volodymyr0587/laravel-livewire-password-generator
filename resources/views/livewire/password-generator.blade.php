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
                <h1 class="text-white font-bold text-5xl leading-tight mb-6">Quickly Generate Customized Secure Passwords</h1>
            </div>
            <div class="md:w-1/2">

                <img src="https://images.unsplash.com/photo-1633265486064-086b219458ec?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Password lock"
                    class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Featured section -->
<section class="py-20">
    <div class="container mx-auto px-4">
        <h2 class="inline-flex text-3xl font-bold text-gray-800 mb-8">
            Password generator
            <svg class="w-5 h-5 ml-2" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11 11H10V10H11V11Z" fill="#000000"></path> <path d="M8 11H9V10H8V11Z" fill="#000000"></path> <path d="M13 11H12V10H13V11Z" fill="#000000"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6V3.5C3 1.567 4.567 0 6.5 0C8.433 0 10 1.567 10 3.5V6H11.5C12.3284 6 13 6.67157 13 7.5V8.05001C14.1411 8.28164 15 9.29052 15 10.5C15 11.7095 14.1411 12.7184 13 12.95V13.5C13 14.3284 12.3284 15 11.5 15H1.5C0.671573 15 0 14.3284 0 13.5V7.5C0 6.67157 0.671573 6 1.5 6H3ZM4 3.5C4 2.11929 5.11929 1 6.5 1C7.88071 1 9 2.11929 9 3.5V6H4V3.5ZM8.5 9C7.67157 9 7 9.67157 7 10.5C7 11.3284 7.67157 12 8.5 12H12.5C13.3284 12 14 11.3284 14 10.5C14 9.67157 13.3284 9 12.5 9H8.5Z" fill="#000000"></path> </g></svg>
        </h2>

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
