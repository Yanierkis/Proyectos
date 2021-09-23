function rot13(str) {

var ascii_code ="";
var result="";
var regex= /[A-Z]/;
for(var i=0; i<str.length;i++){
  var letra=str[i];
  var comp=regex.test(letra);
      console.log(comp)
      if(letra!==" " && comp==true){
      ascii_code = (str.charCodeAt(i));
      if(ascii_code>77){
        result+=String.fromCharCode(ascii_code-13);
      }else{
      result+=String.fromCharCode(ascii_code+13);
      }
      
      }else{
        result+= letra;
       }
}

  return result;
}

console.log(rot13("SERR PBQR PNZC"))