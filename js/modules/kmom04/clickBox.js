/**
 * En module till kmom04 med funktioner som hanterar mus-tryck på elemeten 'box'.
 * @module kmom04/clickBox
 */
/**
 * Bytar till 'selected' class på box element.
 * @function
 * @param {HTMLElement} box - Den box element som ska byta class.
 */
function handleClickSelect (box) {
  box.classList.toggle('selected')
}

/**
 * Minimerar och tarbor boxen på double-click.
 * @param {HTMLElement} box - Den box element som ska tas bort.
 */
function handleDoubleClick (box) {
  box.classList.add('animateSize')
  box.style.width = '2px'
  box.style.height = '2px'
  box.classList.remove('selected') // för att dem inte kan kopieras

  window.setTimeout(() => {
    box.remove()
  }, 2000)
}

export {
  handleClickSelect,
  handleDoubleClick
}
