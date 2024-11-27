/**
 * En funktion som posstionerar valda boxar och ser till att de stannar inom viewport.
 * Pil-tangenten: 'up-ner-höger-vänster'.
 * @function
 * @memberof module:kmom04
 * @param {HTMLElement} box - Den box element som ska flyttas.
 */

/**
 * Centerar boxen i mitten av skärm.
 * @param {HTMLElement} box - Box ellement som ska centereras.
 */
function centerBox (box) {
  const windowWidth = window.innerWidth
  const windowHeight = window.innerHeight
  const boxWidth = box.offsetWidth
  const boxHeight = box.offsetHeight

  const left = (windowWidth - boxWidth) / 2
  const top = (windowHeight - boxHeight) / 2

  box.style.left = `${left}px`
  box.style.top = `${top}px`

  console.log(
    `Centering box: windowWidth=${windowWidth}, windowHeight=${windowHeight}, boxWidth=${boxWidth}, boxHeight=${boxHeight}, left=${left}, top=${top}`
  )
}

/**
 * Flyttar box i miiten av skärmen.
 * @param {HTMLElement} box - Box ellement som ska justeras.
 */
function handleResize (box) {
  centerBox(box)
}

export { handleResize, centerBox }
