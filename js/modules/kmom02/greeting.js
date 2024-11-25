/**
 * En funktion som returnerar "God förmiddag" eller "God eftermiddag" beroende på om klockan är före eller efter 12.00.
 * @returns {string} "God förmiddag" om innan 12:00, annars "God eftermiddag".
 */
function getGreeting () {
  const currentHour = new Date().getHours()
  return currentHour < 12 ? 'God förmiddag' : 'God eftermiddag'
}

export { getGreeting }
