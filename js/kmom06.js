/**
 * Huvudskript för Hangman-spelet.
 * - Hanterar spelets logik och uppdaterar UI.
 * - Använder moduler för att visa och uppdatera hangman samt hantera ordlistan.
 * @namespace kmom06
 * @property {module:kmom06/hangman} hangman Hanterar logiken för att visa hangman.
 * @property {module:kmom06/manageWords} manageWords Tillhandahåller funktionalitet för att hantera ordlistan.
 */
import { hangman } from './modules/kmom06/hangman.js'
import { wordManager } from './modules/kmom06/manageWords.js'

(async () => {
  const lettersDiv = document.getElementById('letters')
  const wordDisplay = document.getElementById('word-display')
  const gameMessage = document.getElementById('game-message')

  let word = ''
  let guessedLetters = []
  let wrongGuesses = 0

  const hangmanParts = hangman.validParts

  /**
   * Startar spelet och sätter upp nödvändig logik och visning.
   * @async
   * @function
   * @returns {Promise<void>} Initierar spelet.
   */
  async function startGame () {
    word = await wordManager.getRandomWord()
    // console.log('The correct word:', word)
    guessedLetters = []
    wrongGuesses = 0
    resetHangmanDisplay()
    displayWord()
    createLetterButtons()
    gameMessage.textContent = ''
  }

  /**
   * Återställer hangman till dess initialt tillstånd.
   */
  function resetHangmanDisplay () {
    for (let i = 0; i < hangmanParts.length; i++) {
      hangman.hide(hangmanParts[i])
    }
  }

  /**
   * Visar ordet med streck för obokstaverade bokstäver och rätt gissade bokstäver.
   */
  function displayWord () {
    let displayed = ''
    for (let i = 0; i < word.length; i++) {
      displayed += guessedLetters.includes(word[i]) ? word[i] : '_'
      if (i < word.length - 1) {
        displayed += ' '
      }
    }
    wordDisplay.textContent = displayed

    if (!displayed.includes('_')) {
      gameMessage.textContent = '🎉 You Won The Game!  🎉'
      disableButtons()
    }
  }

  /**
   * Ställer in knapparna för bokstäver i spelet.
   */
  function createLetterButtons () {
    lettersDiv.innerHTML = ''
    for (let i = 65; i <= 90; i++) {
      const letter = String.fromCharCode(i)
      const button = document.createElement('button')
      button.textContent = letter
      button.addEventListener('click', () => handleGuess(letter.toLowerCase(), button))
      lettersDiv.appendChild(button)
    }
  }

  /**
   * Hanterar gissning av en bokstav och uppdaterar spelet baserat på resultatet.
   * @param {string} letter - Bokstaven som gissats.
   * @param {HTMLButtonElement} button - Knappen som klickades på.
   */
  function handleGuess (letter, button) {
    console.log('Guessing letter:', letter)
    button.disabled = true
    guessedLetters.push(letter)

    if (word.includes(letter)) {
      displayWord()
    } else {
      wrongGuesses++
      showNextPart()
      if (wrongGuesses === hangmanParts.length) {
        gameMessage.textContent = '💀 Game Over!'
        disableButtons()
      }
    }
    console.log('Guessed letters:', guessedLetters)
    console.log('Wrong guesses:', wrongGuesses)
  }

  /**
   * Visar nästa del av hangman baserat på antalet felaktiga gissningar.
   */
  function showNextPart () {
    if (wrongGuesses <= hangmanParts.length) {
      hangman.show(hangmanParts[wrongGuesses - 1])
    }
  }

  /**
   * Inaktiverar alla knappar för bokstäver när spelet är slut.
   */
  function disableButtons () {
    const buttons = document.querySelectorAll('#letters button')
    for (let i = 0; i < buttons.length; i++) {
      buttons[i].disabled = true
    }
  }

  /**
   * Visar det aktuella ordet i konsolen.
   */
  window.peek = () => {
    console.log('Active word:', word)
  }

  /**
   * Uppdaterar sidan för att starta spelet på nytt.
   * @function
   */
  function refreshPage () {
    location.reload() // This reloads the page
  }

  document.getElementById('refreshButton').addEventListener('click', refreshPage)

  await startGame()
})()
