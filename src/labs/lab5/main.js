const one = document.getElementById("one");
const two = document.getElementById("two");
const three = document.getElementById("three");
const four = document.getElementById("four");
const five = document.getElementById("five");
const six = document.getElementById("six");
const seven = document.getElementById("seven");
const eight = document.getElementById("eight");
const nine = document.getElementById("nine");
const zero = document.getElementById("zero");
const C = document.getElementById("C");
const del = document.getElementById("del");
const plus = document.getElementById("plus");
const minuse = document.getElementById("minuse");
const slesh = document.getElementById("slesh");
const multiply = document.getElementById("multiply");
const enter = document.getElementById("enter");
const input = document.getElementById("input");
let a = "";
one.onclick = () => {
  added("1");
};
two.onclick = () => {
  added("2");
};
three.onclick = () => {
  added("3");
};
four.onclick = () => {
  added("4");
};
five.onclick = () => {
  added("5");
};
six.onclick = () => {
  added("6");
};
seven.onclick = () => {
  added("7");
};
eight.onclick = () => {
  added("8");
};
nine.onclick = () => {
  added("9");
};
zero.onclick = () => {
  added("0");
};
plus.onclick = () => {
  added("+");
};
slesh.onclick = () => {
  added("/");
};
multiply.onclick = () => {
  added("*");
};
C.onclick = () => {
  input.placeholder = "";
  a = "";
};

minuse.onclick = () => {
  added("-");
};

del.onclick = () => {
  a = a.substring(0, a.length - 1);
  input.placeholder = a;
};

del.onclick = () => {
  a = a.substring(0, a.length - 1);
  input.placeholder = a;
};

function added(par) {
  a += par;
  input.placeholder = a;
}

enter.onclick = () => {
  console.log(a);
  input.placeholder = eval(a);
};
