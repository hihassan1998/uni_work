/**
 *  Module för hantering av elementinteraktioner och positionering i viewporten samt övriga krav från kmom04.
 * @namespace kmom04
 * @property {module:kmom04/boxPossition} boxPossition Hanterar positionering av element i viewporten.
 * @property {module:kmom04/clickBox} clickBox   Hanterar interaktioner med element vid klick.
 * @property {module:kmom04/animateKey} animateKey Hanterar animationer som triggas av tangentbordshändelser.
 * @property {module:kmom04/animateBox} animateBox Animerar element för specifika interaktioner.
 * @property {module:kmom04/moveBox} moveBox Flyttar element inom viewporten och ser till att de stannar inom gränserna.
 */

import { centerBox, handleResize } from './modules/kmom04/boxPossition.js'
import { handleClickSelect, handleDoubleClick } from './modules/kmom04/clickBox.js'
import { handleKeyEvents } from './modules/kmom04/animateKey.js'
import { moveElement } from './modules/kmom04/moveBox.js'

document.addEventListener('DOMContentLoaded', () => {
  console.log('4. Gör en egen händelse:\nEventlyssnare till "b" tangentbordsknapp aktiverat. \n tryck "tangent-b för att ändra bakgrundsfärg."')
  const box = document.getElementById('box1')

  centerBox(box)

  window.addEventListener('resize', () => handleResize(box))

  box.addEventListener('click', () => handleClickSelect(box))

  document.addEventListener('dblclick', (event) => {
    if (event.target.classList.contains('box')) {
      handleDoubleClick(event.target)
    }
  })
  document.addEventListener('keydown', (event) => handleKeyEvents(event, box))

  box.addEventListener('move', () => moveElement(box))
})
