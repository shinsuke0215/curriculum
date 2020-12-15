// let number = 1;
// while (number <= 100){
//   console.log(number);
//   number++;
// }

// let number = 1;
// do {
//   console.log(number);
//   number++;
// } while (number <= 100);

// for(let number = 1; number <= 100; number++) {
//   console.log(number);
// }

// let number = 0;
// while(number < 5){
//   if(number === 3){
//     break;
//   }
//   console.log(number);
//   number++;
// }

// let number = 0;
// while(number < 5) {
//   if(number === 3) {
//     number++;
//     continue;
//   }
//   console.log(number);
//   number++;
// }


for(let i = 1; i <= 100; i++){
  if(i % 3 === 0 && i % 5 === 0){
    console.log('fizzbizz');
  }else if(i % 3 === 0){
    console.log('fizz');
  }else if(i % 5 === 0){
    console.log('bizz');
  }else{
    console.log(i);
  }
}