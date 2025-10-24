// ===================================
// BOOKSY IFRAME MANAGER
// Magic Salon - Enhanced Functionality
// ===================================

(function() {
  'use strict';
  
  // Hide loader when iframe is loaded
  window.hideLoader = function() {
    const loader = document.getElementById('iframeLoader');
    const iframe = document.getElementById('booksyFrame');
    
    if (loader && iframe) {
      setTimeout(() => {
        loader.classList.add('hidden');
        iframe.classList.add('loaded');
      }, 300);
    }
  };
  
  // Enhanced iframe monitoring
  document.addEventListener('DOMContentLoaded', function() {
    const iframe = document.getElementById('booksyFrame');
    const loader = document.getElementById('iframeLoader');
    
    // Fallback: hide loader after max 5 seconds
    setTimeout(() => {
      if (loader && !loader.classList.contains('hidden')) {
        hideLoader();
      }
    }, 5000);
    
    // Error handling
    if (iframe) {
      iframe.addEventListener('error', function() {
        console.warn('Booksy iframe loading error');
        hideLoader();
      });
    }
    
    // Track user interaction (optional - for analytics)
    const altButton = document.querySelector('.btn-reservation-alt');
    if (altButton) {
      altButton.addEventListener('click', function() {
        // Google Analytics event (if GA is installed)
        if (typeof gtag !== 'undefined') {
          gtag('event', 'booksy_external_open', {
            'event_category': 'Reservation',
            'event_label': 'Alternative Button Click'
          });
        }
      });
    }
    
    // Accessibility enhancement - keyboard navigation
    iframe?.addEventListener('focus', function() {
      this.setAttribute('tabindex', '0');
    });
    
  });
  
  // Performance monitoring
  if ('PerformanceObserver' in window) {
    const observer = new PerformanceObserver((list) => {
      for (const entry of list.getEntries()) {
        if (entry.name.includes('booksy')) {
          console.log('Booksy iframe load time:', entry.duration.toFixed(2) + 'ms');
        }
      }
    });
    
    observer.observe({ entryTypes: ['resource'] });
  }
  
})();