<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Product</title>
  <link rel="stylesheet" href="{{asset('style/products/show.css')}}" />
  <link rel="stylesheet" href="{{ asset('style/styles.css')}}" />
  <link rel="icon" href="{{asset('style/photos/logo.png')}}" type="image/x-icon" >

</head>
<body>
  <header class="navbar">
    <div class="logo">
      <a id="logo" href="{{ route('home','') }}">
        <img src="{{ asset('style/photos/logo.png')}}">
      </a>
      
    </div>
    <nav class="nav-links">
      <a href="{{route('products.index')}}">Products</a>
      <a href="{{route('categories.index')}}">Categories</a>
    </nav>
  </header>
  <section class="show-body-page">
    <div class="product-card">
      <h1>{{ $product->name }}</h1> 
      <p>Description: {{ $product->description }}</p> 
      <p>Price: ${{ $product->price }}</p> 

      <div class="product-buttons">
        <!-- <a href="{{route('products.destroy', $product->id)}}">Delete</a> -->
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline"  class="delete-btn"> 
            @csrf 
            @method('DELETE') 
            <button type="submit"  class="delete-btn-s" style="padding:0px;">Delete</button> 
        </form>  
        <a href="{{route('products.edit', $product->id)}}" class="update-btn">Update</a>
      </div>
    </div>
    <div>
      <img src="{{ asset('style/photos/online-shopping-34.svg')}}" style="width: 500px;">
    </div>
  </section>
  
</body>
</html>