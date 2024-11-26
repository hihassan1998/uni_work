import { changeColor, dublicateSelected } from './animateBox.js'
/**
 * Tillhandhåller keyboard events för att manipulera boxen.
 * @param {KeyboardEvent} event - Den tangentbordknapps event objekt.
 * @param {HTMLElement} box - Den box element som ska manipuleras.
 */
function handleKeyEvents (event, box) {
  const key = event.key

  switch (key) {
    case 'e': // Toggle shape between square and circle
      box.classList.toggle('circle')
      break
      // klart för denna val
    case 'r':
      changeColor(box)
      break
      // klart hittls för dessa val

    case 'q':
    //   resizeBox(box, 10)
      break

    case 'w':
    //   resizeBox(box, -10)
      break

    case 't':
      dublicateSelected(box)
      break // Behöver fixa viewport fitting problem!!!

    default:
      break
  }
}

export {
  handleKeyEvents
}
