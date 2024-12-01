import { fetchData } from './modules/kmom05/fetchdata'

document.addEventListener('DOMContentLoaded', () => {
  const yearSelect = document.getElementById('year-select')

  // Populate year options (1900 - 2019)
  for (let year = 1900; year <= 2019; year++) {
    const option = document.createElement('option')
    option.value = year
    option.textContent = year
    yearSelect.appendChild(option)
  }
  // Second part of fetching data starts here
//   const fetchDataButton = document.getElementById('fetch-data')
//   const dataTable = document.getElementById('data-table')
})
