/**
 * Modul för att visa form i ording med text inhämtat från arrayer från info.js.
 * @module kmom03
 */

import { centerBox, handleResize } from './modules/kmom04/boxPossition.js'
import { handleClickSelect, handleDoubleClick } from './modules/kmom04/clickBox.js'
import { handleKeyEvents } from './modules/kmom04/animateKey.js'
import { moveElement } from './modules/kmom04/moveBox.js'

document.addEventListener('DOMContentLoaded', () => {
  const box = document.getElementById('box1')

  centerBox(box)

  window.addEventListener('resize', () => handleResize(box))

  box.addEventListener('click', () => handleClickSelect(box))

  box.addEventListener('dblclick', () => handleDoubleClick(box))

  document.addEventListener('keydown', (event) => handleKeyEvents(event, box))

  Element.addEventListener('move', () => moveElement(box))
})
