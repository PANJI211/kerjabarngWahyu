import './bootstrap';
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 10) {
        navbar.classList.add('bg-white', 'shadow-md');
        navbar.classList.remove('bg-transparent');

        // Ubah warna link jadi hitam saat ada background
        document.querySelectorAll('.nav-link').forEach(link => {
          link.classList.remove('text-white');
          link.classList.add('text-gray-700');
        });
      } else {
        navbar.classList.remove('bg-white', 'shadow-md');
        navbar.classList.add('bg-transparent');

        // Kembalikan warna link ke putih
        document.querySelectorAll('.nav-link').forEach(link => {
          link.classList.remove('text-gray-700');
          link.classList.add('text-white');
        });
      }
    });
