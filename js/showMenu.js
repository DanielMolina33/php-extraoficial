const menuOptions = document.getElementById('menuOptions');
const menuOptionsToggle = document.getElementById('menuOptionsToggle');

menuOptionsToggle.addEventListener('click', () => {
  const mainContent = document.getElementById('mainContent');
  mainContent.classList.toggle('container-offset-right');
  mainContent.classList.toggle('container-offset-left');
});
