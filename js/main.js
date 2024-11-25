// dagens datum
const today = new Date()

// dagens datum formattering
const year = today.getFullYear()
// lägger till + 1 i month föt att månader är nollindexerad
const month = today.getMonth() + 1
const day = today.getDate()

const date = `${day}-${month}-${year}`
const greet = 'Hej!\nVälkommen till Hassans personliga me-sida.'

console.log(`${greet} \nDagens datum är: ${date}`)
