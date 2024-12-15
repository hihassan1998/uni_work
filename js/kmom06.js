import { hangman } from './modules/kmom06/hangman.js'
import { wordManager } from './modules/kmom06/manageWords.js'


(async () => {
  const lettersDiv = document.getElementById('letters')
  const wordDisplay = document.getElementById('word-display')
  const gameMessage = document.getElementById('game-message')

  let word = ''
  let guessedLetters = []
  let wrongGuesses = 0

  // List of hangman parts (uses the existing hangman.js code)
  const hangmanParts = hangman.validParts

  /**
   * Initialize the game logic.
   */
  async function initGame () {
    word = await wordManager.getRandomWord()
    console.log('The correct word is:', word);
    guessedLetters = []
    wrongGuesses = 0
    resetHangman()
    displayWord()
    setupLetterButtons()
    gameMessage.textContent = ''
  }

  /**
   * Reset the hangman display to its initial state.
   */
  function resetHangman() {
    hangmanParts.forEach(part => hangman.hide(part))
  }

  /**
   * Display the word with underscores for unguessed letters and the actual letters for guessed ones.
   */
  function displayWord () {
    const displayed = word.split('').map(letter =>
      guessedLetters.includes(letter) ? letter : '_'
    ).join(' ')
    wordDisplay.textContent = displayed

    // Check if the player has won
    if (!displayed.includes('_')) {
      gameMessage.textContent = '🎉 You Won The Game!  🎉'
      disableButtons()
    }
  }

  /**
   * Set up the letter buttons for the game.
   */
  function setupLetterButtons() {
    lettersDiv.innerHTML = ''
    for (let i = 65; i <= 90; i++) { // A-Z
      const letter = String.fromCharCode(i)
      const button = document.createElement('button')
      button.textContent = letter
      button.addEventListener('click', () => handleGuess(letter.toLowerCase(), button))
      lettersDiv.appendChild(button)
    }
  }

  /**
   * Handle a letter guess. Update the game based on whether the guess is correct.
   * @param {string} letter - The letter the player guessed.
   * @param {HTMLButtonElement} button - The button that was clicked.
   */
  function handleGuess (letter, button) {
    console.log('Guessing letter:', letter)
    button.disabled = true
    guessedLetters.push(letter)

    if (word.includes(letter)) {
      displayWord()
    } else {
      wrongGuesses++
      showNextHangmanPart()
      if (wrongGuesses === hangmanParts.length) {
        gameMessage.textContent = '💀 Game Over!'
        disableButtons()
      }
    }
    console.log('Guessed letters:', guessedLetters)
    console.log('Wrong guesses:', wrongGuesses)
  }

  /**
   * Show the next part of the hangman based on wrong guesses.
   */
  function showNextHangmanPart () {
    if (wrongGuesses <= hangmanParts.length) {
      hangman.show(hangmanParts[wrongGuesses - 1])
    }
  }

  /**
   * Disable all letter buttons once the game is over.
   */
  function disableButtons () {
    document.querySelectorAll('#letters button').forEach(button => {
      button.disabled = true
    })
  }

  // Peek the word (for debugging purposes)
  window.peek = () => {
    console.log('Active word:', word)
  }
  /**
   * Refreshes the current page.
   *
   * This function reloads the page when called, effectively restarting the game or
   * resetting the game state. It is used when the user clicks the "Play Again" button.
   * @function
   */
  function refreshPage () {
    location.reload() // This reloads the page
  }

  // Add event listener to the button to trigger the refreshPage function when clicked
  document.getElementById('refreshButton').addEventListener('click', refreshPage)

  // Start the game
  await initGame()
})()
