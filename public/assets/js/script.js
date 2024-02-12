const slider = document.querySelector('.overflow-x-auto');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let scrollPosition = 0;

  prevBtn.addEventListener('click', () => {
    scrollPosition -= 200;
    slider.scrollTo({
      top: 0,
      left: scrollPosition,
      behavior: 'smooth'
    });
  });

  nextBtn.addEventListener('click', () => {
    scrollPosition += 200;
    slider.scrollTo({
      top: 0,
      left: scrollPosition,
      behavior: 'smooth'
    });
  });