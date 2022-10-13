 const menuShow=()=> {
    let isHidden = document.getElementById("menu-container").style;
    if (isHidden.display == "none") {
        isHidden.display = "flex";

    } else {
        isHidden.display = "none";
    }
}