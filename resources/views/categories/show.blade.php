<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Product</title>
  <link rel="stylesheet" href="{{asset('style/categories/show.css')}}" />
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
    <div class="category-card">
      <h1>{{ $category->name }}</h1> 

      <div class="category-buttons">
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline"  class="delete-btn"> 
            @csrf 
            @method('DELETE') 
            <button type="submit"  class="delete-btn-s" style="padding:0px;">Delete</button> 
        </form>  
        <a href="{{route('categories.edit', $category->id)}}" class="update-btn">Update</a>
      </div>
    </div>
    <div>
      <img src="{{ asset('style/photos/online-shopping-34.svg')}}" style="width: 500px;">
    </div>
  </section>
  
</body>
</html>