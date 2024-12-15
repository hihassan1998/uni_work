/**
 * Huvudskript för att hantera jämförelse av CO₂-utsläppsdata.
 * - Hämtar och visar CO₂-utsläppsdata för Sverige, Danmark och Norge från 1900 till 2019.
 * - Låter användare välja ett år och visa motsvarande data i en tabell.
 * - Markerar landet med lägst CO₂-utsläpp, CO₂ per capita och kolrelaterade CO₂-utsläpp.
 * - Håller en topplista över länder med flest "vinster" med hjälp av sessionStorage.
 * - Erbjuder funktion för att rensa topplistan.
 * @namespace kmom05
 * @property {module:kmom05/fetchData} fetchData Hämtar data från APIn.
 * @property {module:kmom05/updateData} updateData Updaterar data i tabeler.
 * @property {module:kmom05/highscore} highscore Uppdaterar data sessionStorage.
 */
import { fetchData } from './modules/kmom05/fetchData.js'
import { updateData } from './modules/kmom05/updateData.js'
import { updateHighscore, clearSessionStorage, clearHighscore } from './modules/kmom05/highscore.js'

document.addEventListener('DOMContentLoaded', () => {
  const yearSelect = document.getElementById('year-select')
  const fetchDataButton = document.getElementById('fetch-data')
  const cleanStorageButton = document.getElementById('clear-storage')
  const cleanSessionButton = document.getElementById('clear-session')

  for (let year = 1900; year <= 2019; year++) {
    const option = document.createElement('option')
    option.value = year
    option.textContent = year
    yearSelect.appendChild(option)
  }

  fetchDataButton.addEventListener('click', async () => {
    const selectedYear = parseInt(yearSelect.value)
    if (!selectedYear) {
      alert('Please select a year.')
      return
    }

    const fetchedYear = sessionStorage.getItem('fetchedYear')
    if (fetchedYear && fetchedYear === selectedYear.toString()) {
      alert('Data has already been fetched for this year.')
      return
    }
    const countries = ['sweden', 'denmark', 'norway']

    const data = await fetchData(countries, selectedYear)

    if (data.length === 0) {
      console.log('No data found.')
      return
    }

    updateData(data, selectedYear)
    updateHighscore(data)

    sessionStorage.setItem('fetchedYear', selectedYear.toString())
  })

  cleanStorageButton.addEventListener('click', () => {
    clearHighscore()
    // sessionStorage.removeItem('fetchedYear')
  })
  cleanSessionButton.addEventListener('click', () => {
    clearSessionStorage()
    sessionStorage.removeItem('fetchedYear')
  })
})
