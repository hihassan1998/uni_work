import { changeColor, dublicateSelected, resizeBox, deleteSelectedBox, deselectAllBoxes, selectAllBoxes } from './animateBox.js'
import { moveElement } from './moveBox.js'
/**
 * Tillhandhåller keyboard events för att manipulera boxen.
 * @param {KeyboardEvent} event - De tangentbordknapps händelsen.
 * @param {HTMLElement} box - Den box element som ska manipuleras.
 */
function handleKeyEvents (event, box) {
  const key = event.key
  const selectedElements = document.querySelectorAll('.selected')
  const step = 10

  switch (key) {
    case 'e':
      selectedElements.forEach(el => el.classList.toggle('circle'))
      console.log('Toggle circle-klass för markerade boxar.')
      // box.classList.toggle('circle')
      break
      // klart för denna val
    case 'r':
      changeColor(box)
      break
    case 'q':
      resizeBox(box, 10)
      break
    case 'w':
      resizeBox(box, -10)
      break
    case 't':
      dublicateSelected(box)
      break // Behöver fixa viewport fitting problem!!!

      // Här börjar val för piltangenten
    case 'ArrowLeft': // Move left
      selectedElements.forEach((element) => moveElement(element, -step, 0))
      break
    case 'ArrowRight': // Move right
      selectedElements.forEach((element) => moveElement(element, step, 0))
      break
    case 'ArrowUp': // Move up
      selectedElements.forEach((element) => moveElement(element, 0, -step))
      break
    case 'ArrowDown': // Move down
      selectedElements.forEach((element) => moveElement(element, 0, step))
      break
      // Här avslutar val för piltangenten

    case 'y':
      deleteSelectedBox()
      break

    case 'u':
      deselectAllBoxes()
      break

    case 'i':
      selectAllBoxes()
      break

    default:
      break
  }
}

export {
  handleKeyEvents
}
