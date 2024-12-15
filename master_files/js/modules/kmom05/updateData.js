/**
 * Uppdatera datatabellen med den hämtade datan och markera vinnare baserat på de lägsta värdena i varje kolumn.
 * @module kmom05/updateData
 * @param {Array} data - Den hämtade datan.
 * @param {number} selectedYear - Det valda året för datan.
 */
function updateData (data, selectedYear) {
  const dataTableBody = document.querySelector('#data-table tbody')

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
  // console.log('updateData_minCoalCo2:', minCoalCo2)
  // console.log('updateData_minCo2:', minCo2)
  // console.log('updateData_minCo2PerCapita:', minCo2PerCapita)

  dataTableBody.innerHTML = ''

  for (let i = 0; i < data.length; i++) {
    const item = data[i]

    const isCo2Winner = item.co2 === minCo2
    const isCo2PerCapitaWinner = item.co2_per_capita === minCo2PerCapita
    const isCoalCo2Winner = item.coal_co2 === minCoalCo2

    const row = document.createElement('tr')
    row.innerHTML = `
      <td>${item.country}</td>
      <td>${selectedYear}</td>
      <td class="${isCo2Winner ? 'winner' : ''}">${item.co2}</td>
      <td class="${isCo2PerCapitaWinner ? 'winner' : ''}">${item.co2_per_capita}</td>
      <td class="${isCoalCo2Winner ? 'winner' : ''}">${item.coal_co2}</td>
      <td>${item.population}</td>
    `
    dataTableBody.appendChild(row)
  }
}

export { updateData }
