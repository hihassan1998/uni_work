/**
 * @namespace kmom02
 * @description Modulen för hantering av utrotningshotade djur och deras kontinenter.
 * Innehåller funktioner för att hämta djur baserat på kontinent, filtrera djur,
 * samt skapa rapporter över djuren och deras kontinent.
 */

// importerar djurdata
import { africanAnimals, americanAnimals, europeanAnimals } from './animals.js'

/**
 * Hämtar alla djur från de tre kontinenterna.
 * @returns {Array} En array med alla djur från Afrika, Amerika och Europa.
 */
function getAll () {
  return [...africanAnimals, ...americanAnimals, ...europeanAnimals]
}

/**
 * Hämtar djur från en specifik kontinent.
 * @param {string} continent - Namnet på kontinenten (africa, europe, america).
 * @returns {Array} En array med djur från den angivna kontinenten.
 */
function getFrom (continent) {
  if (continent === 'africa') {
    return africanAnimals
  } else if (continent === 'europe') {
    return europeanAnimals
  } else if (continent === 'america') {
    return americanAnimals
  }
  return [] // Tomm array om igen matchning
}

/**
 * Filtrerar djur baserat på en del av namnet.
 * @param {string} userSearch - Den del av djurets namn som användaren söker på.
 * @returns {Array} En array med djur vars namn innehåller sökordet.
 */
function filterAnimals (userSearch) {
  const allAnimals = getAll()

  return allAnimals.filter(animal =>
    animal.toLowerCase().includes(userSearch.toLowerCase())
  )
}

/**
 * Hittar vilken kontinent ett djur lever på.
 * @param {string} animal - Namnet på djuret.
 * @returns {string} Kontinenten där djuret finns, eller "Unavailable" om inte hittat.
 */
function whereLives (animal) {
  if (africanAnimals.includes(animal)) {
    return 'Africa'
  } else if (americanAnimals.includes(animal)) {
    return 'America'
  } else if (europeanAnimals.includes(animal)) {
    return 'Europe'
  } else {
    return 'Unavailable'
  }
}

/**
 * Genererar en rapport med alla djur, deras kontinent och index.
 * @returns {string} Formaterad rapport med alla djur.
 */
function report () {
  let result = ''

  africanAnimals.forEach((animal, index) => {
    result += `Africa: ${animal} (${index})\n`
  })
  americanAnimals.forEach((animal, index) => {
    result += `America: ${animal} (${index})\n`
  })
  europeanAnimals.forEach((animal, index) => {
    result += `Europe: ${animal} (${index})\n`
  })

  return result.trim()
}

export { getAll, getFrom, filterAnimals, whereLives, report }
