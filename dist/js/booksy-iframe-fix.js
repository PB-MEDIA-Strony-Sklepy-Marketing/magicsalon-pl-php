/**
 * Booksy Iframe Fix
 * Rozwiązuje problemy z ładowaniem iframe Booksy
 */

(function() {
    'use strict';
    
    // Czekaj na załadowanie DOM
    document.addEventListener('DOMContentLoaded', function() {
        
        // Funkcja do obsługi iframe Booksy
        function initBooksyIframe() {
            const booksyFrame = document.getElementById('booksyFrame');
            const loader = document.getElementById('iframeLoader');
            
            if (!booksyFrame) return;
            
            // Timeout dla loadera - ukryj po 5 sekundach niezależnie od stanu
            let loaderTimeout = setTimeout(function() {
                if (loader) {
                    loader.style.display = 'none';
                }
            }, 5000);
            
            // Obsługa błędów ładowania
            booksyFrame.addEventListener('error', function() {
                console.warn('Booksy iframe loading error - falling back to direct link');
                if (loader) {
                    loader.innerHTML = '<p class="text-center">Ładowanie systemu rezerwacji...</p><p class="text-center"><a href="https://booksy.magicsalon.pl" target="_blank" class="btn btn-primary">Otwórz Booksy w nowej karcie</a></p>';
                }
            });
            
            // Obsługa pomyślnego załadowania
            booksyFrame.addEventListener('load', function() {
                clearTimeout(loaderTimeout);
                if (loader) {
                    loader.style.display = 'none';
                }
                console.log('Booksy iframe loaded successfully');
            });
            
            // Wymuszenie przeładowania iframe jeśli jest pusty
            setTimeout(function() {
                if (booksyFrame.contentWindow.length === 0) {
                    console.log('Reloading Booksy iframe...');
                    booksyFrame.src = booksyFrame.src;
                }
            }, 2000);
        }
        
        // Inicjalizuj
        initBooksyIframe();
        
        // Obsługa widgetów WhatsApp i Booksy
        window.toggleCtcChatbox = function() {
            const chatbox = document.getElementById('customCtcChatbox');
            if (chatbox) {
                const isVisible = chatbox.style.display === 'block';
                chatbox.style.display = isVisible ? 'none' : 'block';
                chatbox.setAttribute('aria-hidden', isVisible ? 'true' : 'false');
            }
        };
        
        window.toggleBooksyChatbox = function() {
            const chatbox = document.getElementById('booksyChatboxWidget');
            if (chatbox) {
                const isVisible = chatbox.style.display === 'block';
                chatbox.style.display = isVisible ? 'none' : 'block';
                chatbox.setAttribute('aria-hidden', isVisible ? 'true' : 'false');
            }
        };
        
        // Zamknij chatboxy po kliknięciu poza nimi
        document.addEventListener('click', function(e) {
            const whatsappButton = document.querySelector('.custom-ctc-button');
            const whatsappChatbox = document.getElementById('customCtcChatbox');
            const booksyButton = document.querySelector('.booksy-ctc-button');
            const booksyChatbox = document.getElementById('booksyChatboxWidget');
            
            if (whatsappChatbox && whatsappButton) {
                if (!whatsappButton.contains(e.target) && !whatsappChatbox.contains(e.target)) {
                    whatsappChatbox.style.display = 'none';
                }
            }
            
            if (booksyChatbox && booksyButton) {
                if (!booksyButton.contains(e.target) && !booksyChatbox.contains(e.target)) {
                    booksyChatbox.style.display = 'none';
                }
            }
        });
        
    });
    
    // Funkcja globalna do ukrywania loadera
    window.hideLoader = function() {
        const loader = document.getElementById('iframeLoader');
        if (loader) {
            loader.style.display = 'none';
        }
    };
    
})();