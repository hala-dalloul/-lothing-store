<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Online Shop</title>
  <link rel="icon" href="{{asset('style/photos/logo.png')}}" type="image/x-icon" >
  <link rel="stylesheet" href="{{ asset('style/styles.css')}}" />
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <a id="logo" href="{{ route('home','') }}">
        <img src="style/photos/logo.png">
      </a>
      
    </div>
    <nav class="nav-links">
      <a href="{{route('products.index')}}">Products</a>
      <a href="{{route('categories.index')}}">Categories</a>
    </nav>
  </header>

  <main class="main-content">
    <section class="text-section">
      <h1>Online<br/>Shop</h1>
      <p>Your favorite products,<br/>just a tap away</p>
    </section>
    <section class="image-section">
      <img src="style/photos/order-confirmed-1-97.svg" alt="Online Shop Illustration" />
    </section>
  </main>
  
</body>
</html>
