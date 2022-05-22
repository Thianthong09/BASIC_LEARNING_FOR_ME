let score = 50;
let pass; 

// if(score>50){
//     pass="ຜ່ານ";
// }else{
//     pass="ບໍ່ຜ່ານ";
// }

pass = score>50? "ຜ່ານ" : "ບໍ່ຜ່ານ";

console.log(pass);

// -------------------------------------------

let x = 50;
let num;
if(x%2 ==0){
    console.log("ເລກຄູ່");
}else{
    console.log("ເລກຄີ");
}

num = x%3 == 0? "ເລກຄູ່" : "ເລກຄີ" ;
console.log(num);

// -------------------------------------------

let a=50, b=100;
let sum;
if(a>b){
    console.log("a ມີຄ່າໜ້ອຍກວ່າ");
}else if(a<b){
    console.log("b ມີຄ່າຫຼາຍກວ່າ");
}else{
    console.log("ມີຄ່າເທົ່າກັນ")
}

sum = a>b?"a ມີຄ່າໜ້ອຍກວ່າ"
:a<b?"b ມີຄ່າຫຼາຍກວ່າ"
:"ມີຄ່າເທົ່າກັນ";

console.log(sum);