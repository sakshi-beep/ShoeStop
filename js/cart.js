const deleteCartItem = (id) => {
  $.post(
    "../includes/deleteCartItems.php",
    {
      id: id,
    },
    (result) => {
      $("table").load("cartScreen.php table");
      console.log(result);
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
      $("table").load("cartScreen.php table");
      console.log(result);
    }
  );
};
