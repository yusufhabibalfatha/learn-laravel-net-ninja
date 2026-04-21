<div>
  <x-layout>
    <h2 class="text-xl font-bold">Welcome to Create Ninjas Page</h2>
    @if($token)
    <p class="text-xs">On this page you can create a new Ninja!</p>
    @endif
</div>

<a href="{{ route('welcome') }}" class="border-2 px-4 py-2 w-fit self-center rounded-md mt-2 bg-blue-200 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🏠 HOMEPAGE</a>
</x-layout>