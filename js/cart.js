const deleteCartItem = (id) => {
  $.post(
    "../includes/deleteCartItems.php",
    {
      id: id,
    },
    (result) => {
      $(".cart-table").load("cartScreen.php .cart-table");
      $(".checkout-details").load("cartScreen.php .checkout-details");
      $(".total").load("cartScreen.php .total");
    }
  );
};

const updateQuantity = (id, quantity, type) => {
  if (type === "increment") {
    quantity < 3 && ++quantity;
  }
  if (type === "decrement") {
    quantity > 1 && --quantity;
  }

  $.post(
    "../includes/updateCartItems.php",
    {
      id: id,
      quantity: quantity,
    },
    (result) => {
      // $(".container").empty();
      $(".cart-table").load("cartScreen.php .cart-table");
      $(".checkout-details").load("cartScreen.php .checkout-details");
      $(".total").load("cartScreen.php .total");
    }
  );
};

const checkout = () => {
  window.location.href = "../screens/checkout.php";
};
