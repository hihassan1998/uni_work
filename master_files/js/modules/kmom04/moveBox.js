/**
 * Module som flyttar valda boxar och ser till att de stannar inom viewport.
 * Pil-tangenten: 'up-ner-höger-vänster'.
 * @module kmom04/moveBox
 */

/**
 * Flyttar valda boxar och ser till att de stannar inom viewport.
 * Pil-tangenten: 'up-ner-höger-vänster'.
 * @param {HTMLElement} element - Den box element som ska flyttas.
 * @param {HTMLElement} dx -Förändring vid x-axis.
 * @param {HTMLElement} dy -Förändring vis y-axis.
 */
function moveElement (element, dx, dy) {
  const selectedElements = document.querySelectorAll('.selected')

  for (let i = 0; i < selectedElements.length; i++) {
    const element = selectedElements[i]
    const currentLeft = parseInt(element.style.left) || 0
    const currentTop = parseInt(element.style.top) || 0

    const newLeft = Math.max(0, currentLeft + dx)
    const newTop = Math.max(0, currentTop + dy)

    const { maxWidth, maxHeight } = getMaxDimensions(element)

    element.style.left = `${Math.min(newLeft, maxWidth)}px`
    element.style.top = `${Math.min(newTop, maxHeight)}px`
  }
}
/**
 * Beräknar max-width och max-height för att hålla ett element inom viewporten.
 * @param {HTMLElement} element - Elementet som ska positioneras.
 * @returns {object} - Objekten med maxWidth och maxHeight.
 */
function getMaxDimensions (element) {
  const elementWidth = element.offsetWidth
  const elementHeight = element.offsetHeight

  const maxWidth = window.innerWidth - elementWidth
  const maxHeight = window.innerHeight - elementHeight

  return { maxWidth, maxHeight }
}

export { moveElement, getMaxDimensions }
