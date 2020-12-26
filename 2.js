function isiArray(x,y){
  let num = 2;
for (let i=0; i < x;i++){
  str = '';
  for (let j=0; j < y; j++){
      str+=num+' ';
      num+=6;
      
  }
  console.log(str);
}
}
isiArray(3,5)