let sid;
const addProduct = () => {
    event.preventDefault();
    const formValues = $("form").serializeArray();
    const obj = {
        [formValues[0].name]: formValues[0].value,
        [formValues[1].name]: formValues[1].value,
        [formValues[2].name]: formValues[2].value,
        [formValues[3].name]: formValues[3].value,
        [formValues[4].name]: formValues[4].value,
        [formValues[5].name]: formValues[5].value,
        [formValues[6].name]: formValues[6].value,
    }


    $.post("../helpers/handleAddProduct.php", obj, result => {
        $(".allproducts-container").load("addProduct.php .allproducts-container");
        alert(result);

    })
    $("form")[0].reset();
}

const deleteProduct = (sID) => {
    event.preventDefault();
    $.post(
        "../helpers/deleteProduct.php", {
        id: sID
    },
        result => {
            $(".allproducts-container").load("addProduct.php .allproducts-container");
            $(".add-products").load("addProduct.php .add-products");
        }
    )
}


const showUpForm = (pname, photo, size, category, price, quantity, isFeatured, inStock, pid) => {
    document.getElementById('update-name').value = pname;
    document.getElementById('update-category').value = category;
    document.getElementById('new-photo').src = photo;
    const blah = document.getElementById('update-featured').value = isFeatured;
    document.getElementById('update-photo').value = photo;
    document.getElementById('update-size').value = size;
    document.getElementById('update-price').value = price;
    document.getElementById('update-quantity').value = quantity;
    document.getElementById('update-stock').value = inStock;
    sid = pid;
    $("#products-form-container").hide();
    $(".updateform-container").show();
}
const updateProduct = () =>{
    event.preventDefault();
    const pname = document.getElementById('update-name').value 
    const pcategory = document.getElementById('update-category').value 
    const pphoto = document.getElementById('update-photo').value 
    const psize = document.getElementById('update-size').value
    const pprice = document.getElementById('update-price').value
    const pquantity = document.getElementById('update-quantity').value
    const isFeatured = document.getElementById('update-featured').value
    const inStock = document.getElementById('update-stock').value
    const updatedProduct = {
        s_id :sid,
        s_name :pname,
        s_category :pcategory,
        s_photo:pphoto,
        s_size:psize,
        s_price:pprice,
        s_quantity:pquantity,
        isFeatured:isFeatured,
        in_stock :inStock
    }
    $.post("../helpers/updateProduct.php", updatedProduct, result => {

        if(result == 'Product Updated')
        {
            alert(result);
            $(".allproducts-container").load("addProduct.php .allproducts-container");
            $(".updateform-container").hide();
            $("#products-form-container").show();
        }
        else{
            alert(result);
        }

    })
}
const cancelUpdate = () => {
    $(".updateform-container").hide();
    $("#products-form-container").show();
}


const getPhotoUrl = () => {
    let url = document.getElementById("photo-input").value;
    if (url.length > 1) {
        document.getElementById("photo").src = `${url}`;
        document.getElementById("img-div").style.display = "flex";
        document.getElementById("photo").style.display = "block";
    };

}