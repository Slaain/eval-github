function tikTok (a){
    const xhr = new XMLHttpRequest();
    let text = document.getElementById('load')
    xhr.onload=function(){
      text.innerHTML=this.response;
    }
    xhr.open('GET', a,true);
    xhr.send()
  
  }
alert('Ca marche')

//   function tiktok(){
  
//   var instance = new XMLHttpRequest();
//   console.log(instance);
//   instance.onload=function(){
//        document.getElementById('load').innerHTML= this.responseText;

      
//       }
  
//   instance.open('GET','recherchemembres.php',true);

//   instance.send();
// }

//   alert('jemarche');