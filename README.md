# kmom06.js - Hangman Game Logic

This JavaScript file contains the core logic for a simple Hangman game. It handles the game's initialization, word display, letter guesses, and hangman part updates. The game uses a random word from a list fetched by the `wordManager` module and displays the current state of the game on the page.

## Features
- Initializes the game by fetching a random word.
- Displays the word with underscores for unguessed letters.
- Tracks and updates incorrect guesses with a hangman visual.
- Handles letter button clicks to register guesses.
- Displays messages for game win or loss.

## Modules
- **hangman.js**: Provides methods to update the hangman visuals based on incorrect guesses.
- **wordManager.js**: Manages fetching and providing random words for the game.

## Functions
- **initGame()**: Initializes the game by setting up the word and resetting game state.
- **resetHangman()**: Resets the hangman display to its initial state.
- **displayWord()**: Displays the current word with underscores for unguessed letters.
- **setupLetterButtons()**: Sets up the letter buttons for player guesses.
- **handleGuess()**: Handles a player's letter guess and updates the game state.
- **showNextHangmanPart()**: Displays the next hangman part based on incorrect guesses.
- **disableButtons()**: Disables letter buttons after the game ends.
- **refreshPage()**: Reloads the page to restart the game.

## Usage
1. Import the necessary modules (`hangman.js` and `wordManager.js`).
2. Ensure that the HTML file includes the correct elements (like buttons and game display areas).
3. Call the `initGame()` function to start the game.

## License
MIT License
