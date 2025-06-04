<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Categories</title>
  <link rel="stylesheet" href="{{asset('style/categories/index.css')}}" />
  <link rel="stylesheet" href="{{ asset('style/styles.css')}}" />
  <link rel="icon" href="{{asset('style/photos/logo.png')}}" type="image/x-icon" >

</head>
<body>
    <header class="navbar">
    <div class="logo">
      <a id="logo" href="{{ route('home','') }}">
        <img src="{{asset('style/photos/logo.png')}}">
      </a>
    </div>
    <nav class="nav-links">
      <a href="{{route('products.index')}}">Products</a>
      <a href="{{route('categories.index')}}">Categories</a>
    </nav>
  </header>
  <main class="category-grid">
   @foreach($categories as $category)
    <a href="{{ route('categories.show',$category->id)}}" class="category-item">
      <div class="category-card">
        <h3>Name => {{$category->name }}</h3>
      </div>
    </a>
    @endforeach
  </main>
  <a href="{{route('categories.create')}}"><div class="add-btn">+</div></a>
  
  @if(session('success'))
    <script>
      alert("{{ session('success') }}");
    </script>
  @endif
</body>

</html>
