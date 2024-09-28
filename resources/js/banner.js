let headerBackground = document.querySelectorAll(".background");

let imgageIndex = 0;

function changeBackground(){
    headerBackground[imgageIndex].classList.remove("showing");

    imgageIndex++;

    if (imgageIndex >= headerBackground.length){
        imgageIndex = 0;
    }

    headerBackground[imgageIndex].classList.add("showing")
}

setInterval(changeBackground, 5000);
