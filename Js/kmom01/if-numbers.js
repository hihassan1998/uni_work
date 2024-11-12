/**
 * All arguments.
 * 0 /usr/bin/node
 * 1 absolute path
 * 2 first argument
 * n n:th argument.
 */

// get the arguments
const arg = Number(process.argv[2])

// Debugging:
// console.log('Type of argument:', typeof arg)

// # check if arg is less than 10
if (arg < 10) {
  console.log(arg + ' är längre än 10')
}
// # check if arg is more than 100 or equal

if (arg >= 100) {
  console.log(arg + ' är högre än eller lika med 100.')
}
// check if arg is between 10 and  20
if (arg > 10 && arg < 20) {
  console.log(arg + ' är mellan 10 och 20.')
}
//  check if arg is even or odd
if (arg % 2 === 0) {
  console.log(arg + ' är ett jämt tal.')
} else {
  console.log(arg + ' är ett udda tal.')
}

if (arg === 42) {
  console.log('Meaning of life.')
}
