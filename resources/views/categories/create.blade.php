<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Category</title>
  <link rel="stylesheet" href="{{ asset('style/categories/create.css') }}" />
  <link rel="stylesheet" href="{{ asset('style/styles.css') }}" />
  <link rel="icon" href="{{ asset('style/photos/logo.png') }}" type="image/x-icon" />
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <a id="logo" href="{{ route('home', '') }}">
        <img src="{{ asset('style/photos/logo.png') }}" alt="Logo">
      </a>
    </div>
    <nav class="nav-links">
      <a href="{{ route('products.index') }}">Products</a>
      <a href="{{ route('categories.index') }}">Categories</a>
    </nav>
  </header>

  <main class="add-body-page">
    <form method="POST" action="{{ route('categories.store') }}">
      @csrf
      <fieldset class="new-info-form">
        <legend class="fieldset-outer">Add New Category</legend>

        <label for="category-name">Category Name</label>
        <input type="text" name="name" id="category-name" placeholder="Ex: Category 1" required>

        <input type="submit" id="add-info" value="Add Category">
      </fieldset>
    </form>

    <div class="section-img">
      <img src="{{ asset('style/photos/team-presentation-3-40.svg') }}" alt="Illustration">
    </div>
  </main>
</body>
</html>
