/**
 * Uppdatera highscorelistan i sessionStorage baserat på de lägsta värdena i varje kolumn.
 * - Minsta CO2.
 * - Minsta CO2 per capita.
 * - Maximalt kol CO2.
 * @module kmom05/highscore
 * @param {Array} data - Den hämtade datan.
 */
function updateHighscore (data) {
  const highscore = JSON.parse(sessionStorage.getItem('highscore')) || {}

  let minCoalCo2 = 10000
  let minCo2 = 10000
  let minCo2PerCapita = 10000
  for (let i = 0; i < data.length; i++) {
    const item = data[i]

    if (item.coal_co2 < minCoalCo2) {
      minCoalCo2 = item.coal_co2
    }
    if (item.co2 < minCo2) {
      minCo2 = item.co2
    }
    if (item.co2_per_capita < minCo2PerCapita) {
      minCo2PerCapita = item.co2_per_capita
    }
  }

  for (let i = 0; i < data.length; i++) {
    let wins = 0

    if (data[i].coal_co2 === minCoalCo2) {
      wins++
    }
    if (data[i].co2 === minCo2) {
      wins++
    }
    if (data[i].co2_per_capita === minCo2PerCapita) {
      wins++
    }

    if (wins > 0) {
      highscore[data[i].country] = (highscore[data[i].country] || 0) + wins
    }
  }

  // highscore UPP debugging
  // console.log('Updated Highscore:', highscore);

  sessionStorage.setItem('highscore', JSON.stringify(highscore))

  // const highscoreList = document.getElementById('highscore-list')
  // if (highscoreList) {
  //   highscoreList.innerHTML = Object.entries(highscore)
  //     .map(([country, wins]) => `<strong>${country}:</strong> ${wins} wins`)
  //     .join('<br>')
  // }
  // const countries = ['Sweden', 'Denmark', 'Norway'] // Add all possible countries

  // if (highscoreList) {
  //   highscoreList.innerHTML = ''
  //   for (const country of countries) {
  //     const wins = highscore[country] || 0
  //     const entry = document.createElement('div');
  //     entry.textContent = `${country}: ${wins} vinster`;
  //     highscoreList.appendChild(entry);
  //   }
  // }
  const highscoreTableBody = document.querySelector('#highscore-list tbody')
  if (highscoreTableBody) {
    const countries = ['Sweden', 'Denmark', 'Norway']

    highscoreTableBody.innerHTML = ''
    for (const country of countries) {
      const wins = highscore[country] || 0
      const row = document.createElement('tr')
      row.innerHTML = `
        <td>${country}</td>
        <td>${wins}</td>
      `
      highscoreTableBody.appendChild(row)
    }
  }
}

/**
 *
 * Funktion som rengör highscore från sessionStorage.
 */
function clearHighscore () {
  // sessionStorage.clear()
  const highscoreTableBody = document.querySelector('#highscore-list tbody')
  if (highscoreTableBody) {
    highscoreTableBody.innerHTML = ''
  }
}
/**
 * Funktion som rengör sessionStorage.
 */
function clearSessionStorage () {
  sessionStorage.clear()
}
export { updateHighscore, clearHighscore, clearSessionStorage }
