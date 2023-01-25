function incDec  (type) {
let value = document.getElementById("quantity_value").innerHTML;
if(type === '+'){
if(value>=3){
    return;
}
else{
    value++;
document.getElementById("quantity_value").innerHTML= value;
}

}

else if(type === '-'){
    if(value<=1){
        console.log('value is less than one');
        return;
    }
    else{
value--;
document.getElementById("quantity_value").innerHTML= value;

    }

}
}


const addtoCart=(pname, photo, size, category, price, quantity, id)=>{
    const PRODUCT = {
        s_id:id,
        s_name:pname,
        s_photo:photo,
        s_category:category,
        s_price:price,
        s_size:size,
        s_quantity:quantity  
    }
    console.log(PRODUCT);
    $.post("../includes/cart.php",PRODUCT, result => {
       if(result === 'not logged in'){
        alert(`${result}, redirecting to login page`);
        window.location.href = "../screens/login.php";
       }
       else{
        alert(result);
       }

    })

}