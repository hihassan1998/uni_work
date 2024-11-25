/**
 * Modul för att visa form i ording med text inhämtat från arrayer från info.js.
 * @module kmom03
 */

import { colors, persons, years } from './modules/kmom03/info.js'
import { reset } from './modules/kmom03/reset.js'

const button = document.getElementById('addShapeBtn')
const container = document.querySelector('.shapesContainer')
const resetBtn = document.getElementById('resetBtn')
let currentIndex = 0

// En eventlyssnare för att adera form när add shape knapp trycks
button.addEventListener('click', () => {
  if (currentIndex < colors.length) {
    // Skapar form
    const shape = document.createElement('div')
    shape.className = 'shape'
    shape.style.backgroundColor = colors[currentIndex]
    // Spara nuvarnade index som forms index för at senare lägga till info baserad på denna index
    shape.index = currentIndex

    // Ram toggle lyssnare
    shape.addEventListener('mouseover', () => {
      shape.style.border = '3px solid black'
    })
    shape.addEventListener('mouseout', () => {
      shape.style.border = 'none'
    })

    // En eventlyssnare för att visa info inuti forme
    shape.addEventListener('click', () => {
      // VArje form ska får information enligt sitt egen indx
      const index = shape.index
      if (!shape.querySelector('.info')) {
        // Skapar en info div för att placera in information i formen
        const info = document.createElement('div')
        info.className = 'info'
        info.innerHTML = `
          <p><strong>${persons[index]}</strong></p>
          <p>${years[index]}</p>
          <img src="img/logo.png" alt="Logo">
        `
        shape.appendChild(info)
      }
    })

    container.appendChild(shape)

    if (currentIndex === 0) {
      resetBtn.style.display = 'inline-block'
    }
    // Inkrmenterar currentIndex för att räkna vilken form visas näst i ording åp add shape knappen
    currentIndex++

    // console.log(currentIndex)
    if (currentIndex < colors.length) {
      button.textContent = `Skapa Form ${currentIndex + 1}`
    } else {
      button.style.visibility = 'hidden' // Gömma knapp efter alla form
    }
  }
})

// en eventlyssnare som återställer form containern när återstållningsknapp trycks
resetBtn.addEventListener('click', () => {
  currentIndex = reset(container, button, resetBtn, currentIndex)
})
