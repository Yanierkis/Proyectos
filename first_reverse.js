function FirstReverse(str) { 

  // code goes here 
  var result=str.split("");
  result=result.reverse();
  result=result.join("");
  //console.log(result)
  return result; 

}
   
// keep this function call here 
console.log(FirstReverse(readline()));