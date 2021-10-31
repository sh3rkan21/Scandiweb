<script>
    document.addEventListener("DOMContentLoaded", function(){
        var typeSwitcher = document.querySelector("#productType");
        var DVD = document.querySelector(".DVDContainer");
        var Furniture = document.querySelector(".FurnitureContainer");
        var Book = document.querySelector(".BookContainer");
        DVD.style.display="none";
        Furniture.style.display="none";
        Book.style.display="none";
        typeSwitcher.addEventListener("change", function(){
            switch(this.value){
                    case "DVD":
                    DVD.style.display="block";
                    Furniture.style.display="none";
                    Book.style.display="none";
                    break;
                    case "Furniture":
                        DVD.style.display="none";
                        Furniture.style.display="block";
                        Book.style.display="none";
                    break;
                    case "Book":
                        DVD.style.display="none";
                        Furniture.style.display="none";
                        Book.style.display="block";
                    break;
            }
        })
    })
</script>

<form id = "product_form" method="POST" action="classes/productscontr.class.php">
  <div class="mb-3">
    <label for="sku" class="form-label">SKU</label>
    <input type="text" class="form-control" id="sku" name="sku">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price ($)</label>
    <input type="text" class="form-control" id="price" name="price">
  </div>
  <div>
    <label for="productType" class="visually-hidden">Type Switcher</label>
    <select class="form-select" id="productType" name="product_type" >

      <option selected>Type Switcher</option>
      <option value="DVD" id="DVD">DVD-disc</option>
      <option value="Furniture" >Furniture</option>
      <option value="Book">Book</option>

    </select>

      <div class="DVDContainer">
          <label for="size">Size (MB)</label>
          <input type="text" id="size" name="size">
          <br>
          <span style="font-weight: bold">Please, provide size in MB!</span>
      </div>
      <div class="FurnitureContainer">
          <label for="height">Height (CM)</label>
          <input type="text" id="height" name="height">
          <br>
          <label for="width">Width (CM)</label>
          <input type="text" id="width" name="width">
          <br>
          <label for="lenght">Lenght (CM)</label>
          <input type="text" id="lenght" name="length">
          <br>
          <span style="font-weight: bold">Please, provide size in CM!</span>
      </div>
      <div class="BookContainer">
          <label for="weight">Weight (KG)</label>
          <input type="text" id="weight" name="weight">
          <br>
          <span style="font-weight: bold">Please, provide weight in KG!</span>
      </div>
  </div>
    <input class="btn btn-primary" type="submit"  name="save" value="Save">
    <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
</form>