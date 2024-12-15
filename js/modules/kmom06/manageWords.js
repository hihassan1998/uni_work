const wordManager = (() => {
    let words = [];
    let isLoaded = false;

    // Fetch words from words.json
    async function fetchWords() {
        const response = await fetch('./data/words.json');
        words = await response.json();
        isLoaded = true;
        console.log('Word list:', words);
    }

    // Get a random word from the list
    async function getRandomWord() {
        // Wait for words to be fetched if not loaded yet
        if (!isLoaded) await fetchWords();
        const randomIndex = Math.floor(Math.random() * words.length);
        return words[randomIndex];
    }

    return {
        getRandomWord
    };
})();

export { wordManager };
