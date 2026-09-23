{{-- Lesson 27: the form. old() puts back what was typed, @error shows the message. --}}
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dodaj produkt</title>
</head>
<body>
  <h1>Dodaj produkt</h1>
  <form method="post" action="/products">
    {{-- Hidden token: Laravel rejects a POST without it (error 419). --}}
    @csrf
    <p>
      <label for="name">Nazwa</label>
      <input id="name" name="name" value="{{ old('name') }}">
      @error('name')
        <span class="error" id="error-name">{{ $message }}</span>
      @enderror
    </p>
    <p>
      <label for="price">Cena</label>
      <input id="price" name="price" value="{{ old('price') }}">
      @error('price')
        <span class="error" id="error-price">{{ $message }}</span>
      @enderror
    </p>
    <button type="submit">Zapisz</button>
  </form>
  <p><a href="/products">Wróć do listy</a></p>
</body>
</html>
