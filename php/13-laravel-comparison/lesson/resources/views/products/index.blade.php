{{-- Lesson 27: the view. {{ }} escapes like htmlspecialchars(). --}}
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sklep</title>
</head>
<body>
  <h1>Sklep</h1>
  <ul>
    @foreach ($products as $product)
      <li>{{ $product->name }} - {{ $product->price }} zł</li>
    @endforeach
  </ul>
  <p><a href="/products/create">Dodaj produkt</a></p>
</body>
</html>
