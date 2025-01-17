function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

function bar(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

console.log(foo(0, '0')); // false
console.log(bar(0, '0')); // false