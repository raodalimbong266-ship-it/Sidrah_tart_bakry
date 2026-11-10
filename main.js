document.addEventListener('DOMContentLoaded', () => {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.catalog-grid .product-card');
  filterButtons.forEach(button => button.addEventListener('click', () => {
    filterButtons.forEach(item => item.classList.remove('selected'));
    button.classList.add('selected');
    const filter = button.dataset.filter;
    cards.forEach(card => {
      card.classList.toggle('hidden', filter !== 'all' && card.dataset.category !== filter);
    });
  }));
  const form = document.getElementById('contactForm');
  if (form) form.addEventListener('submit', event => {
    event.preventDefault();
    const name = document.getElementById('nama').value.trim();
    const number = document.getElementById('nomor').value.trim();
    const message = document.getElementById('pesan').value.trim();
    const text = `Halo Sidrah Tart & Bakery, saya ${name}.${number ? ' Nomor WhatsApp saya: ' + number + '.' : ''}\n\n${message}`;
    window.open('https://wa.me/62821234567890?text=' + encodeURIComponent(text), '_blank', 'noopener');
  });
});
