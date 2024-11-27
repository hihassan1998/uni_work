/**
 * En module till kmom04 med event hanterare som hanterar animation via tangentbordknapps-tryck, för elemeten 'box' .
 * @module kmom04/animateKey
 */
import { changeShape, changeColor, duplicateSelected, resizeBox, deleteSelectedBox, deselectAllBoxes, selectAllBoxes, dublicateBox1 } from './animateBox.js'
import { moveElement } from './moveBox.js'
/**
 * Tillhandhåller keyboard events för att manipulera boxen.
 * @param {KeyboardEvent} event - De tangentbordknapps händelsen.
 * @param {HTMLElement} box - Den box element som ska manipuleras.
 */
function handleKeyEvents (event, box) {
  const key = event.key
  const step = 10

  switch (key) {
    // 3. Keyboardevents:
    // 3.1 Tangenten e
    case 'e':
      changeShape()
      break
    // 3.2 Tangenterna q, w
    case 'q':
      resizeBox(10)
      break
    case 'w':
      resizeBox(-10)
      break
    // 3.3 Tangenterna r
    case 'r':
      changeColor(box)
      break
    // 3.4 Tangenten t
    case 't':
      duplicateSelected()
      break
      // {Behöver fixa viewport fitting problem!!!}
    // 3.5 Tangenten y
    case 'y':
      deleteSelectedBox()
      break
      // 3.6 Tangenten u
    case 'u':
      deselectAllBoxes()
      break
      // 3.7 Tangenten i

    case 'i':
      selectAllBoxes()
      break
      // 3.8 Tangenten p

    case 'p':
      dublicateBox1()
      break

    // 3.9 Piltangenterna
    // Här börjar val för piltangenten
    case 'ArrowLeft':
      moveElement(box, -step, 0)
      break
    case 'ArrowRight':
      moveElement(box, step, 0)
      break
    case 'ArrowUp':
      moveElement(box, 0, -step)
      break
    case 'ArrowDown':
      moveElement(box, 0, step)
      break
      // Här avslutar val för piltangenten

    default:
      break
  }
}

export {
  handleKeyEvents
}
