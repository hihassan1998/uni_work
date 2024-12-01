/**
 * En module till kmom04 med funtioner till event-hanterar-module(animateKey.js) som i tur hanterar animation via tangentbordknapps-tryck, för elemeten 'box' .
 * @module kmom05/fetchData
 */

/**
 * Tillhandhåller keyboard events för att manipulera boxen.
 * @param {string} country - Land.
 * @param {number} year - År.
 * @returns {Promise<{country: string, co2: string, population: string, co2_per_capita: string, gdp: string, cumulative_co2: string} | null>}
 *          An object containing country name, CO2 emissions, population (in millions), CO2 per capita, GDP (in millions),
 *          and cumulative CO2, or `null` if no data is found or an error occurs.
 * @throws Will log an error if the fetch request fails or an unexpected error occurs.
 */
async function fetchData (country, year) {
  try {
    const url = `https://raw.githubusercontent.com/dbwebb-se/js-v2/master/example/co2-json/${country.toLowerCase()}.json`
    const response = await fetch(url)
    const data = await response.json()
    const yearData = data.data.find((entry) => entry.year === year)

    if (!yearData) return null

    return {
      country: data.country,
      co2: yearData.co2.toFixed(2),
      population: (yearData.population / 1_000_000).toFixed(2),
      co2_per_capita: yearData.co2_per_capita.toFixed(2),
      gdp: (yearData.gdp / 1_000_000).toLocaleString(),
      cumulative_co2: yearData.cumulative_co2.toFixed(2)
    }
  } catch (error) {
    console.error(`Error fetching data for ${country}:`, error)
    return null
  }
}

export { fetchData }
