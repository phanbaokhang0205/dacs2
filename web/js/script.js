// MENU SLIDEBAR CATEGORY
const itemslidebar = document.querySelectorAll(".category-left-li")
itemslidebar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})