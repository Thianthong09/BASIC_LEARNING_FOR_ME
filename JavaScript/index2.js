const name = 'THIAN'; //const ປ່ຽນຄ່າບໍ່ໄດ້
let height = 175;

let isMale = false;
let city = null;

// let bigNumber = 10n;

console.log(name, height, isMale, city);

// Variables are used to store data values in computer memory. 
// They can be referred by using their names


// ------------------------------------
//Object
const person = {
    name: 'THIAN',
    height: 175,
    city: 'LPB'

};
console.log(person.name);

person.height = 180;

console.log(person);
// ------------------------------------
//Array
const number = [5, 10, 15, 20];
console.log(number[2]);

//ໃສ່ ເມັດຕອດ ຄ່າໃຫ້ Array ຄ່າທ້າຍສຸດ
number.push(25);
console.log(number);

// ເມັດຕອດ ລົບ ຄ່າທ້າຍສຸດ Array
number.pop();

// ເມັດຕອດ ເພິ່ມຄ່າ ທຳອິດ
number.unshift(1);

//ເມັດຕອດ ລົບຄ່າ ທຳອິດ
number.shift();

//Operator
let result = 10 + 5 * 2 / 2;
console.log(result);


//Condition 

let password = '';
if (password === '') {
    console.log('Password is equired');
} else if (password.length > 8 && password.length < 12) {
    console.log('Password is velid');
} else {
    console.log('Password is invelid');
}