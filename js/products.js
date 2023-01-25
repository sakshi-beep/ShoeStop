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


const addtoCart=()=>{
    alert("asfdasdf");
}