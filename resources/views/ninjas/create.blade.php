<x-layout>
  <form action="{{ route('ninjas.store') }} " method="POST">
    <!-- CSRF token for security -->
    @csrf

    <h2>Create a New Ninja</h2>

    <!-- ninja Name -->
    <label for="name">Ninja Name:</label>
    <input
      type="text"
      id="name"
      name="name"
      required>

    <!-- ninja Strength -->
    <label for="skill">Ninja Skill (0-100):</label>
    <input
      type="number"
      id="skill"
      name="skill"
      required>

    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio"
      name="bio"
      required></textarea>

    <!-- select a dojo -->
    <label for="dojo_id">Dojo:</label>
    <select id="dojo_id" name="dojo_id" required>
      <option value="" disabled selected>Select a dojo</option>
      @foreach ($dojos as $dojo)
      <option value="{{ $dojo->id }}">
        {{ $dojo->name }}
      </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Ninja</button>

    <!-- validation errors -->

  </form>

  <div>
    <a href="{{ route('welcome') }}" class="border-2 px-4 py-2 w-fit self-center rounded-md mt-2 font-bold shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">🏠 HOMEPAGE</a>


    {{ $errors->first() }}
  </div>
</x-layout>