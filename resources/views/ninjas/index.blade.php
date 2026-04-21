<x-layout>
  <div>
    <h2 class="text-xl font-bold">Welcome to Ninjas Page</h2>
    @if($token)
    <p class="text-xs">Your name is Yusuf, right?</p>
    @endif
  </div>

  <div class="self-center text-left">
    <p>Get the ninja what you need.</p>
    <ul>
      @foreach($ninjas as $ninja)
      <div class="flex items-center gap-2">
        <li>🥷 {{ $ninja['name']}}</li>
        <a class="underline italic text-xs" href="/ninjas/{{$ninja['id']}}">View Details</a>
      </div>
      @endforeach
    </ul>
  </div>

  <a href="/" class="border-2 px-4 py-2 w-fit self-center rounded-md mt-2 bg-blue-200 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🏠 HOMEPAGE</a>
</x-layout>