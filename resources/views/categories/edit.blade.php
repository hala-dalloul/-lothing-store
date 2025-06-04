<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Product Inf.</title>
  <link rel="stylesheet" href="{{asset('style/categories/edit.css')}}" />
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
    <form method="POST" action="{{route('categories.update',$category->id)}}">
      @csrf 
      @method('PUT') 
      <fieldset class="new-info-form">
        <legend class="fieldset-outer">Update category</legend>

        <label for="category-name">Category Name</label>
        <input type="text" name="name" id="category-name" placeholder="Ex:Category 1" 
        value="{{$category->name}}">

        <input type="submit" id="update-info" value="Update Category">
      </fieldset>
    </form>
    <div class="section-img">
      <img  src="{{asset('style/photos/online-shopping-13-61aac.svg')}}">
    </div>
  </main>
</body>
</html>