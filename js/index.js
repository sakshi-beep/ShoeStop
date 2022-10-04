const hamburgerToggle =()=>{
    let hamburgerStatus = document.getElementById("menu-items");

    if(hamburgerStatus.style.display==='flex'){
        hamburgerStatus.style.display = 'none';
    }
    else{
        hamburgerStatus.style.display = 'flex';

    }

}

let width = screen.width;

if(width< 768){
    document.getElementById("shoe").src="../images/shoelogo-big.svg";
}