document.addEventListener('DOMContentLoaded', function() {
    const floatingMenu = document.querySelector('.floating-menu');
    const firstPillButton = document.querySelector('.pill-button');
    
    const hideThreshold = 80;
    
    window.addEventListener('scroll', function() {
      const firstButtonRect = firstPillButton.getBoundingClientRect();
      
      if (firstButtonRect.top < hideThreshold) {
        floatingMenu.classList.add('hidden');
      } else {
        floatingMenu.classList.remove('hidden');
      }
    });
});