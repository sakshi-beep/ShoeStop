const productImage = document.getElementById("product-img").src;
const productName = document.getElementById("product_name").innerHTML;
const productCategory = document.getElementById("product_category").innerHTML;
const productQuantity = document.getElementById("quantity_value").innerHTML;


class Product {
  constructor(photo, name, category, quantity, price, size, id) {
    this.name = name;
    this.category = category;
    this.price = price;
    this.size = size;
    this.quantity = quantity;
    this.photo = photo;
    this.id = id;
  }

  setQuantity(type) {
    this.quantity = document.getElementById("quantity_value").innerHTML;
    switch (type) {
      case "+":
        if (this.quantity >= 3) {
          return;
        } else {
          this.quantity++;
          document.getElementById("quantity_value").innerHTML = this.quantity;
        }

        break;

      case "-":
        if (this.quantity <= 1) {
          console.log("value is less than one");
          return;
        } else {
          this.quantity--;
          document.getElementById("quantity_value").innerHTML = this.quantity;
        }
        break;

      default:
        return;
    }
  }

  addtoCart(productID, productPrice) {
    this.price = this.quantity * productPrice;
    this.id = productID;
    const PRODUCT = {
      s_id: this.id,
      s_name: this.name,
      s_photo: this.photo,
      s_category: this.category,
      s_price: this.price,
      s_size: this.size,
      s_quantity: this.quantity,
    };
    console.log(PRODUCT);
    $.post("../includes/cart.php", PRODUCT, (result) => {
      if (result === "not logged in") {
        alert(`${result}, redirecting to login page`);
        window.location.href = "../screens/login.php";
      } else {
        // alert(result);
        window.location.href = "../screens/cartScreen.php";
      }
    });
  }

  setSize() {
    const elements = document.getElementsByClassName("size");
    for (const element of elements) {
      if (element === event.target) {
        this.size = event.target.innerHTML;
        console.log(this.size);
        element.style.border = "2px solid black";
      } else {
        console.log(this.size);
        element.style.border = "";
      }
    }
  }
}




const product = new Product( productImage,productName,productCategory, productQuantity
);
