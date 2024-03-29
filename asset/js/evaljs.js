// function tiktak (a){
//     const xhr = new XMLHttpRequest();
//     let text = document.getElementById('load')
//     xhr.onload=function(){
//       text.innerHTML=this.response;
//     }
//     xhr.open('GET', a,true);
//     xhr.send()
  
//   }

var titre = document.getElementsByTagName('h1') [0];
titre.addEventListener('click',function(){
    titre.style.color ='red';
});