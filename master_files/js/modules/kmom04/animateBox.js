/**
 * En module till kmom04 med funtioner till event-hanterar-module(animateKey.js) som i tur hanterar animation via tangentbordknapps-tryck, för elemeten 'box' .
 * @module kmom04/animateBox
 */
import { getMaxDimensions } from './moveBox.js'
const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet']
const colors2 = ['pink', 'cyan', 'lime', 'teal', 'purple', 'magenta', 'brown', 'gray', 'beige', 'peach']

/**
 * Växla formen på alla valda elementen från box till cirkulär.
 */
function changeShape () {
  const selectedElements = document.getElementsByClassName('selected')
  for (let i = 0; i < selectedElements.length; i++) {
    selectedElements[i].classList.toggle('circle')
  }
  console.log('Formen på valda element växlas mellan fyrkantig och cirkulär.')
}

/**
 * Byttar boxens färg till tangent 'r'.
 */
function changeColor () {
  const selectedElements = document.getElementsByClassName('selected')
  // const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet']

  for (let i = 0; i < selectedElements.length; i++) {
    const box = selectedElements[i]
    const currentColor = box.style.backgroundColor || 'red'
    const currentIndex = colors.indexOf(currentColor)
    const nextColor = colors[(currentIndex + 1) % colors.length]
    box.style.backgroundColor = nextColor

    console.log(`Färg ändrad till: ${nextColor}`)
  }
}

/**
 * Duplicerar alla valda boxar och placerar dem slumpmässigt.
 */
function duplicateSelected () {
  const selectedElements = document.querySelectorAll('.selected')
  for (let i = 0; i < selectedElements.length; i++) {
    const box = selectedElements[i]
    makeCopy(box, false) // Pass `true` to randomize color and form or FALSE
  }
}

/**
 * Ändrar storlek på alla valda boxar. Tangent: 'q' och 'w'.
 * @param {HTMLElement} changeSize - Förändringen i storlek (positiv eller negativ).
 */
function resizeBox (changeSize) {
  const selectedElements = document.getElementsByClassName('selected')

  for (let i = 0; i < selectedElements.length; i++) {
    const box = selectedElements[i]

    const currentWidth = parseInt(window.getComputedStyle(box).width)
    const currentHeight = parseInt(window.getComputedStyle(box).height)
    const newWidth = currentWidth + changeSize
    const newHeight = currentHeight + changeSize
    const deltaX = (newWidth - currentWidth) / 2
    const deltaY = (newHeight - currentHeight) / 2

    box.style.width = `${newWidth}px`
    box.style.height = `${newHeight}px`
    box.style.left = `${parseInt(box.style.left) - deltaX}px`
    box.style.top = `${parseInt(box.style.top) - deltaY}px`
  }
}

/**
 * Välja alla valda box elementen. Tnagent: "i".
 */
function selectAllBoxes () {
  const allElements = document.querySelectorAll('.box')
  for (let i = 0; i < allElements.length; i++) {
    const box = allElements[i]
    box.classList.add('selected')
    console.log('Element markerat:', box)
  }
}

/**
 * Gör alla valda element till icke valda.  Tnagent: "u".
 */
function deselectAllBoxes () {
  const selectedElements = document.querySelectorAll('.selected')
  for (let i = 0; i < selectedElements.length; i++) {
    const box = selectedElements[i]
    box.classList.remove('selected')
    console.log('Element avmarkerat:', box)
  }
}

/**
 * Raderar alla valda box elementen. Tnagent: "y".
 */
function deleteSelectedBox () {
  const selectedElements = document.querySelectorAll('.selected')
  for (let i = 0; i < selectedElements.length; i++) {
    const box = selectedElements[i]
    box.remove()
    console.log('Valt element raderat:', box)
  }
}
/**
 * Slumpa färg och form (cirkulär eller fyrkantig) på en box.
 * @param {HTMLElement} element - Elementet som ska randomiseras.
 */
function randomColorAndForm (element) {
  const randomColor = colors[Math.floor(Math.random() * colors.length)]
  element.style.backgroundColor = randomColor

  // Slumpa mellan cirkulär eller fyrkantig form
  if (Math.random() > 0.5) {
    element.classList.add('circle')
  } else {
    element.classList.remove('circle')
  }
}
/**
 * Funktion som ändrar bakgrundsfärgen på body när 'space' trycks.
 * Tangent: "Space".
 */
function changeBackground () {
  document.body.style.backgroundColor = colors2[Math.floor(Math.random() * colors2.length)]
  console.log('Bakgrundsfärg ändrad med "b"-tangenttryck.')
}

/**
 * Hanterar skapandet av en klonad box, placerar den slumpmässigt och lägger till event.
 * @param {HTMLElement} element - Elementet som ska kopieras.
 * @param {boolean} randomizeAll - Om argument är true, slumpa färg och form.
 */
function makeCopy (element, randomizeAll = false) {
  const copy = element.cloneNode(true)
  const dimentionOfBox = 200 // för att säkerställa att boxen stannar inom viewport

  // Slumpa position
  const { maxWidth, maxHeight } = getMaxDimensions(copy)

  copy.style.left = `${Math.random() * (maxWidth - dimentionOfBox)}px`
  copy.style.top = `${Math.random() * (maxHeight - dimentionOfBox)}px`

  // Slumpa färg o form om randomizeAll är sant
  if (randomizeAll) {
    randomColorAndForm(copy)
  }

  copy.addEventListener('click', () => {
    copy.classList.toggle('selected')
  })

  document.body.appendChild(copy)
  // console.log('Box duplicerad och placerad slumpmässigt på skärmen.')
}

/**
 * Skapar en slumpmässig box baserat på id:n #box1.
 */
function dublicateBox1 () {
  const originalBox = document.getElementById('box1')
  makeCopy(originalBox, true)
}

export {
  dublicateBox1,
  changeShape,
  changeColor,
  duplicateSelected,
  resizeBox,
  selectAllBoxes,
  deleteSelectedBox,
  deselectAllBoxes,
  changeBackground
}
