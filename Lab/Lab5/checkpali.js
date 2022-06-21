document.getElementById('title').innerHTML = 'check palindrom or not';

var string = prompt('enter ');

string = string.toString();


var newstr = "";
// console.log(string);
for (let i = string.length - 1; i >= 0; i--) {
    
    newstr += string[i];

}
// console.log(newstr);
if (newstr == string) {
    console.log('palindrom');
}
else
    console.log('not palindrom');





