/**
 * En funktion som flyttar valda boxar och ser till att de stannar inom viewport.
 * Pil-tangenten: 'up-ner-höger-vänster'.
 * @function
 * @memberof module:kmom04
 * @param {HTMLElement} element - Den box element som ska flyttas.
 * @param {HTMLElement} dx -xxxxxxxxxxxxxxxxxxxxxxxxxxxx.
 * @param {HTMLElement} dy -xxxxxxxxxxxxxxxxxxxxxxxxxxxx.
 */
function moveElement (element, dx, dy) {
  const currentLeft = parseInt(element.style.left) || 0
  const currentTop = parseInt(element.style.top) || 0

  const newLeft = Math.max(0, currentLeft + dx) // Prevent going out of bounds
  const newTop = Math.max(0, currentTop + dy)

  const maxWidth = window.innerWidth - element.offsetWidth
  const maxHeight = window.innerHeight - element.offsetHeight

  element.style.left = `${Math.min(newLeft, maxWidth)}px`
  element.style.top = `${Math.min(newTop, maxHeight)}px`
}

export { moveElement }
