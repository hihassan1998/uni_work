/**
 * En function som sätter om form container, gömmer återställningsknapp, sätter användaren kan början på nytt.
 * @function
 * @module kmom03/reset
 * @param {HTMLElement} container - Container elementen där formen visas.
 * @param {HTMLElement} button - Button element som adderar ny form i ordning.
 * @param {HTMLElement} resetBtn - Återställningsknapp element som återställer spelet.
 * @param {number} currentIndex - Det aktuella indexet som spårar framstegen för tillagda former.
 * @returns {number} Returnerar 0 för att återställa aktuellt index för att starta spelet igen.
 */
function reset (container, button, resetBtn, currentIndex) {
  // ta bort alla form
  container.innerHTML = ''

  currentIndex = 0

  button.textContent = 'Skapa Form'
  button.style.visibility = 'visible'

  resetBtn.style.display = 'none'

  return currentIndex
}

export { reset }
