
const li = document.querySelectorAll(".menu-menupodstawowe-container ul li");
document.querySelector(".burger").addEventListener("click", ()=>{
        document.querySelector("body").classList.toggle("active--burger");
        document.querySelector(".hamburger-box").classList.toggle("active--burger");
        document.querySelector(".hamburger-inner").classList.toggle("active--burger");
        document.querySelector(".menu-menupodstawowe-container").classList.toggle("active--burger");
        li.forEach(item =>{
            item.classList.toggle("active--burger");
        });
});
const addClass = () =>{
    setTimeout(()=>{
        document.querySelector('h2').style.transform = "translateX(0) translateY(-1.5vh)";
        document.querySelector('h1').style.transform = "translateX(0)";
        console.log("start");
    }, 1000);
    setTimeout(() => {document.querySelector(".menu-buttonnav-container").style.transform = "translateX(-50%) translateY(0)";},1800);
}
document.querySelector(".menu-buttonnav-container li").appendChild(document.createElement("i"));
arrow = document.querySelector(".menu-buttonnav-container li i");
arrow.classList.add("fas");
arrow.classList.add("fa-chevron-left");

addClass();


