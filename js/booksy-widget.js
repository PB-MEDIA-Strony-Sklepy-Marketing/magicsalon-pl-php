(function() {
    'use strict';
    
    // Debug mode
    const DEBUG = false;
    
    function log(msg) {
        if (DEBUG) console.log('[Booksy Widget]', msg);
    }
    
    // Toggle chatbox function
    window.toggleBooksyChatbox = function() {
        const chatbox = document.getElementById("booksyChatboxWidget");
        const button = document.querySelector(".booksy-ctc-button");
        
        if (!chatbox) {
            log('Chatbox element not found!');
            return;
        }
        
        const isVisible = chatbox.style.display === "block";
        
        if (isVisible) {
            chatbox.style.display = "none";
            chatbox.setAttribute('aria-hidden', 'true');
            chatbox.classList.remove('booksy-active');
            log('Chatbox closed');
        } else {
            chatbox.style.display = "block";
            chatbox.setAttribute('aria-hidden', 'false');
            chatbox.classList.add('booksy-active');
            log('Chatbox opened');
            
            // Analytics tracking
            if (typeof gtag !== 'undefined') {
                gtag('event', 'chatbox_open', {
                    'event_category': 'Booksy Widget',
                    'event_label': 'Chatbox Opened'
                });
            }
        }
    };

    // Close chatbox when clicking outside
    document.addEventListener('click', function(event) {
        const chatbox = document.getElementById("booksyChatboxWidget");
        const button = document.querySelector(".booksy-ctc-button");
        
        if (!chatbox || !button) return;
        
        if (chatbox.style.display === "block" && 
            !chatbox.contains(event.target) && 
            !button.contains(event.target)) {
            chatbox.style.display = "none";
            chatbox.setAttribute('aria-hidden', 'true');
            chatbox.classList.remove('booksy-active');
            log('Chatbox closed (outside click)');
        }
    });

    // Keyboard accessibility
    const button = document.querySelector('.booksy-ctc-button');
    if (button) {
        button.addEventListener('keypress', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleBooksyChatbox();
            }
        });
    }

    // Track Booksy clicks
    window.trackBooksyClick = function(event) {
        log('Reservation button clicked');
        
        if (typeof gtag !== 'undefined') {
            gtag('event', 'click', {
                'event_category': 'Booksy Widget',
                'event_label': 'Reservation Button Clicked',
                'value': 1
            });
        }
        
        if (typeof fbq !== 'undefined') {
            fbq('track', 'InitiateCheckout', {
                content_name: 'Booksy Reservation',
                content_category: 'Appointment'
            });
        }
    };

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const chatbox = document.getElementById("booksyChatboxWidget");
            if (chatbox && chatbox.style.display === "block") {
                chatbox.style.display = "none";
                chatbox.setAttribute('aria-hidden', 'true');
                chatbox.classList.remove('booksy-active');
                log('Chatbox closed (ESC key)');
            }
        }
    });

    // Prevent scroll on mobile when chatbox open
    function preventBodyScroll() {
        const chatbox = document.getElementById("booksyChatboxWidget");
        if (window.innerWidth <= 768) {
            if (chatbox && chatbox.style.display === "block") {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        }
    }

    // Override toggle to include scroll prevention
    const originalToggle = window.toggleBooksyChatbox;
    window.toggleBooksyChatbox = function() {
        originalToggle();
        preventBodyScroll();
    };
    
    // Force visibility on page load
    window.addEventListener('DOMContentLoaded', function() {
        const button = document.querySelector('.booksy-ctc-button');
        if (button) {
            button.style.display = 'block';
            button.style.visibility = 'visible';
            button.style.opacity = '1';
            log('Widget initialized and visible');
        }
    });
    
    // Fallback check after 1 second
    setTimeout(function() {
        const button = document.querySelector('.booksy-ctc-button');
        if (button) {
            button.style.display = 'block';
            button.style.visibility = 'visible';
            log('Visibility fallback applied');
        }
    }, 1000);
    
})();