//* animateBox.js *//

/**
 * Byttar boxens färg till tangent 'r'.
 * @param {HTMLElement} box - Den box element som ska byta färg.
 */
function changeColor (box) {
  const colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet']

  const currentColor = box.style.backgroundColor || 'red'
  const currentIndex = colors.indexOf(currentColor)
  const nextColor = colors[(currentIndex + 1) % colors.length]
  box.style.backgroundColor = nextColor

  console.log(`Färg ändrad till: ${nextColor}`)
}

/**
 * Duplicerar alla valda boxar och ser till att de stannar inom viewport. Tangent 't'.
 * @param {HTMLElement} element - Den box element som ska dublicaeras färg.
 */
function dublicateSelected (element) {
  const selectedElements = document.querySelectorAll('.selected')
  for (let i = 0; i < selectedElements.length; i++) {
    const element = selectedElements[i]
    const clone = element.cloneNode(true)

    const maxWidth = window.innerWidth - clone.offsetWidth
    const maxHeight = window.innerHeight - clone.offsetHeight

    clone.style.left = `${Math.random() * maxWidth}px`
    clone.style.top = `${Math.random() * maxHeight}px`

    clone.addEventListener('click', () => {
      clone.classList.toggle('selected')
    })
    document.body.appendChild(clone)

    console.log('Box duplicerad och placerad slumpmässigt på skärmen.')
  }
}

/**
 * Ändrar storlek berönde på använderinput av vald tangent till alla valda boxar. Tangent: 'q' och 'w'.
 * @param {HTMLElement} element - Den box element som ska ändra storkel färg.
 * @param {HTMLElement} changeSize - Den box element som ska ändra storkel färg.
 */
function resizeBox (element, changeSize) {
  const selectedElements = document.querySelectorAll('.selected')
  const currentWidth = parseInt(window.getComputedStyle(element).width)
  const currentHeight = parseInt(window.getComputedStyle(element).height)
  for (let i = 0; i < selectedElements.length; i++) {
    const newWidth = currentWidth + changeSize
    const newHeight = currentHeight + changeSize
    const deltaX = (newWidth - currentWidth) / 2
    const deltaY = (newHeight - currentHeight) / 2

    element.style.width = `${newWidth}px`
    element.style.height = `${newHeight}px`
    element.style.left = `${parseInt(element.style.left) - deltaX}px`
    element.style.top = `${parseInt(element.style.top) - deltaY}px`
  }
}
/**
 * Välja alla valda box elementen. Tnagent: "i".
 */
function selectAllBoxes () {
  const allElements = document.querySelectorAll('.box')
  allElements.forEach(element => {
    element.classList.add('selected')
    console.log('Element markerat:', element)
  })
}

/**
 * Gör alla valda element till icke valda.  Tnagent: "u".
 */
function deselectAllBoxes () {
  const selectedElements = document.querySelectorAll('.selected')
  selectedElements.forEach(element => {
    element.classList.remove('selected')
    console.log('Element avmarkerat:', element)
  })
}

/**
 * Raderar alla valda box elementen. Tnagent: "y".
 */
function deleteSelectedBox () {
  const selectedElements = document.querySelectorAll('.selected')
  selectedElements.forEach(element => {
    element.remove()
    console.log('Valt element raderat:', element)
  })
}

export {
  changeColor,
  dublicateSelected,
  resizeBox,
  selectAllBoxes,
  deleteSelectedBox,
  deselectAllBoxes
}
