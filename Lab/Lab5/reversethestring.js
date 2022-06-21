document.getElementById('title').innerHTML = 'reverse the string';
const string = prompt('enter ');
var newstr= "";
console.log(string);
for (let i = string.length-1; i >=0;i--) {
    // console.log(string[i]);
    newstr+= string[i];

}
console.log(newstr);


