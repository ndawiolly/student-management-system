const toggleBtn = document.querySelector('#toggle-sidebar');
const sidebar = document.querySelector('.sidebar');


toggleBtn.addEventListener('click', e => sidebar.classList.toggle('active'))

