<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Our Products</title>
  <link rel="stylesheet" href="{{asset('style/products/index.css')}}" />
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
  <section class ="category-cards">
    @foreach($categories as $category)
    <a href="{{route('products.index',['category' => $category->id])}}" class="category-card">
      <div>{{$category->name}}</div>
    </a>
    @endforeach
  </section>

  <main class="product-grid">
    @if($products->isEmpty())
    <p class="no-products-message">No products found in this category.</p>
    @else
      @foreach($products as $product)
        <a href="{{ route('products.show',$product->id)}}" class="product-item">
          <div class="product-card">
            <h3>Name => {{$product->name }}</h3>
            <p>Description => {{ $product->description }}</p>
            <p>Price => {{ $product->price }}</p>
            <p>Category => {{ $product->category->name ?? 'N/A' }}</p> 
          </div>
        </a>
        @endforeach
    @endif
  </main>

  <a href="{{route('products.create')}}"><div class="add-btn">+</div></a>
  
  @if(session('success'))
    <script>
      alert("{{ session('success') }}");
    </script>
  @endif
</body>

</html>
