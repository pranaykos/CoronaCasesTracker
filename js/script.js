




$("div.top").on("click", function(){
    console.log("clicked");
});

let topArrow = document.querySelector("div.top");

window.onscroll = function(){
    scrollfunction();
}

function scrollfunction(){
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
        topArrow.style.display = "block";
    }else{
        topArrow.style.display = "none";
    }
}

topArrow.addEventListener("click", () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});