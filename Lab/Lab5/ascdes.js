document.getElementById('title').innerHTML = 'asc des';

const input = prompt('Enter "a" for ascending :: "d" for descenging ');
let array = [3, 4, 1, 2, 5, 6, 7];
let temp;
if (input == 'a' || input == 'A') {
    ascending();
}
else { descending(); }

function ascending() {
    for (let j = 0; j < array.length - 1; j++) {
        for (let k = j + 1; k < array.length; k++) {
            if (array[j] > array[k]) {
                temp = array[j];
                array[j] = array[k];
                array[k] = temp;
            }
        }
    }
    console.log(array);
}

function descending() {
    for (let j = 0; j < array.length - 1; j++) {
        for (let k = j + 1; k < array.length; k++) {
            if (array[j] < array[k]) {
                temp = array[j];
                array[j] = array[k];
                array[k] = temp;
            }
        }
    }
    console.log(array);
}