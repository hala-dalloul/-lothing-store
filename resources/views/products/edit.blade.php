<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product Inf.</title>
  <link rel="stylesheet" href="{{asset('style/products/edit.css')}}" />
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
  <main class="edit-body-page">
    <form method="POST" action="{{route('products.update',$product->id)}}">
      @csrf 
      @method('PUT') 
      <fieldset class="new-info-form">
        <legend class="fieldset-outer">New information</legend>

        <label for="product-name">Product Name</label>
        <input type="text" name="name" id="product-name" placeholder="Ex:Product 1" 
        value="{{$product->name}}">


        <label for="product-desc">Product description</label>
        <input type="text" name="description" id="product-desc" placeholder="Ex:this is product one" value="{{$product->description}}">


        <label for="product-price">Product Price</label>
        <input type="number" name="price" id="product-price" placeholder="Ex:33.44"
        value="{{$product->price}}">


        <label for="product-category">Product Category Id</label>
        
        <select id="product-category" name="categoryId">
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>

        <input type="submit" id="update-info">
      </fieldset>
    </form>
    <div class="section-img">
      <img  src="{{asset('style/photos/businessman-76.svg')}}">
    </div>
  </main>
</body>
</html>