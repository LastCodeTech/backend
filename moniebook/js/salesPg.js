let productCard=document.querySelector('.productCard');
let data=document.querySelector('.data');
// let dataValue=data.value;
// console.log(dataValue);
let longPressTimer=null;
let longPressDuration=5000;
productCard.addEventListener('mousedown',function(){
    longPressTimer=setTimeout(function(){
        alert('long press detected');
    },longPressDuration);


// // })
// isArray(productCard).forEach(card => {
//     card.addEventListener('click',function(){
//     alert('hi');
})
// });

