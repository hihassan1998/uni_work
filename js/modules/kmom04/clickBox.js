/**
 * Toggles the 'selected' class on the box element.
 * @param {HTMLElement} box - The box element to toggle.
 */
function toggleSelected (box) {
  box.classList.toggle('selected')
}

/**
 * Shrinks and removes the box on double-click.
 * @param {HTMLElement} box - The box element to remove.
 */
function handleDoubleClick (box) {
  box.style.width = '2px'
  box.style.height = '2px'
  setTimeout(() => box.remove(), 2000)
}

export {
  toggleSelected,
  handleDoubleClick
}
