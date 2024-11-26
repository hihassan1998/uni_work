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
}

/**
 * Dublicerar boxen. Tangent 't'.
 * @param {HTMLElement} box - Den box element som ska dublicaeras färg.
 */
function dublicateSelected (box) {
  const selectedElements = document.querySelectorAll('.selected')
  for (let i = 0; i < selectedElements.length; i++) {
    const element = selectedElements[i]
    const clone = element.cloneNode(true)

    const maxWidth = window.innerWidth - clone.offsetWidth
    const maxHeight = window.innerHeight - clone.offsetHeight

    clone.style.left = `${Math.random() * maxWidth}px`
    clone.style.top = `${Math.random() * maxHeight}px`
    document.body.appendChild(clone)
  }
}

export {
  changeColor,
  dublicateSelected
}
