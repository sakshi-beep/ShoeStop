
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


const showUpForm =(productid)=>{
$.post(
    `../helpers/updateProduct.php`, 
    {
        id:productid
    },
    result=>console.log(result)
    // $("#update-name").val(result)
)

    $("#products-form-container").hide();
    $(".updateform-container").show();
}
const cancelUpdate = () =>{
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