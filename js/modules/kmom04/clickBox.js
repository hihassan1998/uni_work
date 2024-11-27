/**
 * En module till kmom04 med funktioner som hanterar mustryck på elemten 'box'.
 * @memberof module:kmom04
 */
/**
 * Bytar till 'selected' class på box element.
 * @param {HTMLElement} box - Den box element som ska byta class.
 */
function handleClickSelect (box) {
  box.classList.toggle('selected')
}

/**
 * Minimerar och tarbort boxen på double-click.
 * @param {HTMLElement} box - Den box element som ska tas bort.
 */
function handleDoubleClick (box) {
  box.style.width = '2px'
  box.style.height = '2px'
  setTimeout(() => box.remove(), 2000)
}

export {
  handleClickSelect,
  handleDoubleClick
}
