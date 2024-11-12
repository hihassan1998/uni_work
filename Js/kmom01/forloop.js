/**
 * All arguments.
 * 0 /usr/bin/node
 * 1 absolute path
 * 2 first argument = <arg1>
 * 3 second argument = <arg2>
 * n n:th argument.
 */

// get the arguments
// let arg1 = Number(process.argv[2]);
// let arg2 = Number(process.argv[3]);

const arg1 = Number(process.argv[2])
const arg2 = Number(process.argv[3])

// comapre arg1 och arg2
if (arg1 < arg2) {
  // if arg1 less than  arg2, all numbers btween arg1 to arg2
  for (let i = arg1; i <= arg2; i++) {
    console.log(i)
  }
} else if (arg1 > arg2) {
  // if arg1 greater than  arg2, all numbers btween arg1 to arg2
  for (let i = arg1; i >= arg2; i--) {
    console.log(i)
  }
} else {
  // if arg1 is equal to arg2,

  for (let i = arg1; i >= 0; i -= 2) {
    console.log(i)
  }
}
