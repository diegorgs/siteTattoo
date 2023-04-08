window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const scrollY = window.scrollY;
    const lastScrollY = window.lastScrollY || 0;
    const direction = scrollY > lastScrollY ? 'down' : 'up';
    
    if (direction === 'down') {
      navbar.classList.add('navbar-hidden');
    } else {
      navbar.classList.remove('navbar-hidden');
    }
    
    window.lastScrollY = scrollY;
  });