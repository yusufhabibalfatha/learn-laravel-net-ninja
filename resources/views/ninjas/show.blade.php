<x-layout>
  <div>
    <h2 class="text-xl font-bold">Welcome to Ninjas Page</h2>
    <p class="text-xs">Your name is Yusuf, right?</p>
  </div>

  <div class="self-center">
    <h3 class="text-xl font-bold">Congratulations!</h3>
    <p>The ID of Ninja is {{$ninja->id}}</p>
  </div>

  <form action="{{ route('ninjas.destroy', $ninja->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="text-red-500 bg-red-100 rounded-md font-bold border-2 px-4 py-2">🗑️ Delete Ninja</button>
  </form>

  <div>
    <a href="{{ route('ninjas.index') }}" class="border-2 px-4 py-2 w-fit rounded-md mt-2 self-center bg-blue-200 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🥷 LIST NINJAS</a>
    <a href="{{ route('welcome') }}" class="border-2 px-4 py-2 w-fit self-center rounded-md mt-2 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🏠 HOMEPAGE</a>

  </div>
</x-layout>