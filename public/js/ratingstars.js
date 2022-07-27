$().ready(function(){
    let ratings = document.querySelectorAll(".ratings");

ratings.forEach ((rating)=>{
  let stars = rating.querySelectorAll(".stars .fa");
  let result = rating.querySelector('.result');
  stars.forEach( star => {
    star.addEventListener("click", function () {
        const num = Number(this.dataset.star);
        result.innerText = num;
        stars.forEach( (item,index) => {
            if((index+1) <= num){
              item.className = "fa fa-star";
              item.style.color = "yellow";
            }else{
              item.className = "fa fa-star-o";
              item.style.color = "black";
            }
        })
    });
  });
})
})