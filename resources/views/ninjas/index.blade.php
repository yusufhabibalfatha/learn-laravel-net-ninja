<x-layout>
  @if(session('success'))
  <div id="flash" class="text-green-600">
    {{ session('success') }}
  </div>
  @endif
  <div>
    <h2 class="text-xl font-bold">Welcome to Ninjas Page</h2>
    @if($token)
    <p class="text-xs">Your name is Yusuf, right?</p>
    @endif
  </div>

  <div class="self-center text-left ">
    <p class="mb-2 text-center">Get the ninja what you need.</p>
    <ul class="flex flex-col gap-2">
      @foreach($ninjas as $ninja)
      <div class="flex flex-col border-2 p-2 gap-2">
        <li>🥷 {{ $ninja->name}}</li>
        <p>Dojo name : {{ $ninja->dojo->name }}</p>
        <a class="underline italic text-xs" href="{{ route('ninjas.show', $ninja->id) }}">View Details</a>
      </div>
      @endforeach
    </ul>

  </div>
  {{ $ninjas->links() }}

  <div>
    <a href="{{ route('ninjas.create') }}" class="border-2 px-4 py-2 w-fit rounded-md mt-2 self-center bg-blue-200 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">➕ CREATE NINJAS</a>
    <a href="{{ route('welcome') }}" class="border-2 px-4 py-2 w-fit self-center rounded-md mt-2 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🏠 HOMEPAGE</a>

  </div>
</x-layout>