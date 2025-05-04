  // Dark Mode Toggle
  const toggleBtn = document.getElementById('darkModeToggle');
  toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    document.querySelectorAll('.card').forEach(card => card.classList.toggle('dark-mode'));
  });


