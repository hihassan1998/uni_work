/**
 * Modul för att visa slumpmässiga djur från varje kontinent och en hälsning baserad på tid på dagen.
 * @namespace kmom02
 * @property {module:kmom02/greeting} greeting Skriver ut hälsning.
 */
import { africanAnimals, americanAnimals, europeanAnimals } from './modules/kmom02/animals.js'
import { getGreeting } from './modules/kmom02/greeting.js'

// Visar ett slumpmässigt djur från varje kontinent
document.getElementById('africa-animal').textContent = getRandomAnimal(africanAnimals)
document.getElementById('america-animal').textContent = getRandomAnimal(americanAnimals)
document.getElementById('europe-animal').textContent = getRandomAnimal(europeanAnimals)

// Visar hälsning
document.getElementById('greeting').textContent = getGreeting()

/**
 * Hämtar ett slumpmässigt djur från den angivna arrayen av djur.
 * @function
 * @param {string[]} animals - Array med namn på djur.
 * @returns {string} Ett slumpmässigt valt djurnamn.
 */
function getRandomAnimal (animals) {
  const randomIndex = Math.floor(Math.random() * animals.length)
  return animals[randomIndex]
}
