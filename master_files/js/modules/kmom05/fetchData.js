/**
 * Hämta data för de valda länderna och året.
 * @module kmom05/fetchData
 * @param {Array} countries - Listan med länder att hämta data för.
 * @param {number} year - Året att hämta data för.
 * @returns {Array} - Datan för de valda länderna och året.
 */
async function fetchData (countries, year) {
  const dataResults = []

  for (let i = 0; i < countries.length; i++) {
    const country = countries[i]

    try {
      const url = `https://raw.githubusercontent.com/dbwebb-se/js-v2/master/example/co2-json/${country}.json`
      const response = await fetch(url)
      const data = await response.json()
      const yearData = data.data.find((entry) => entry.year === year)

      if (!yearData) continue

      dataResults.push({
        // selectedYear:selectedYear
        country: data.country,
        co2: yearData.co2,
        co2_per_capita: yearData.co2_per_capita,
        coal_co2: yearData.coal_co2,
        population: yearData.population
        // gdp: (yearData.gdp / 1_000_000).toLocaleString(),
        // cumulative_co2: yearData.cumulative_co2.toFixed(2),
      })
    } catch (error) {
      console.error(`Error fetching data for ${country}:`, error)
    }
  }

  return dataResults
}

export { fetchData }
