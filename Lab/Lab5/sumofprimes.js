document.getElementById('title').innerHTML = 'sum of Prime numbers';

let sum = 0;
for (let i = 1; i <= 50; i++) {
    let check = 0;
    for (let j = 2; j <= i / 2; j++) {
        if ((i % j) == 0) {
            check = 1;
            break;
        }
    }
    if (check != 1) {
        sum += i;
        
    }
}
console.log(sum);