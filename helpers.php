<?php

/**
 * helpers.php - Funkcje pomocnicze MAGIC SALON
 * Wersja: 2.1
 */

if (!function_exists('get_current_url')) {
    /**
     * Zwraca pełny URL bieżącej strony
     * @return string
     */
    function get_current_url(): string
    {
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        return $scheme . '://' . $host . $uri;
    }
}

if (!function_exists('escape_html')) {
    /**
     * Escapuje HTML dla bezpieczeństwa
     * @param string $string
     * @return string
     */
    function escape_html(string $string): string
    {
        return htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

if (!function_exists('e')) {
    /**
     * Skrócona wersja escape_html
     * @param mixed $string
     * @return string
     */
    function e($string): string
    {
        return escape_html((string)$string);
    }
}

if (!function_exists('create_slug')) {
    /**
     * Generuje bezpieczny slug z tekstu
     * @param string $text
     * @return string
     */
    function create_slug(string $text): string
    {
        $text = mb_strtolower($text, 'UTF-8');

        // Polskie znaki
        $polishChars = ['ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ź', 'ż', 'Ą', 'Ć', 'Ę', 'Ł', 'Ń', 'Ó', 'Ś', 'Ź', 'Ż'];
        $latinChars = ['a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z', 'a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z'];
        $text = str_replace($polishChars, $latinChars, $text);

        // Usuń znaki specjalne
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
        $text = preg_replace('/[\s-]+/', '-', $text);

        return trim($text, '-');
    }
}

if (!function_exists('format_phone')) {
    /**
     * Formatuje numer telefonu do formatu +48 XXX XXX XXX
     * @param string $phone
     * @return string
     */
    function format_phone(string $phone): string
    {
        $cleaned = preg_replace('/[^0-9]/', '', $phone);

        if (strlen($cleaned) === 11 && substr($cleaned, 0, 2) === '48') {
            $cleaned = substr($cleaned, 2);
        }

        if (strlen($cleaned) === 9) {
            return '+48 ' . substr($cleaned, 0, 3) . ' ' . substr($cleaned, 3, 3) . ' ' . substr($cleaned, 6);
        }

        return $phone;
    }
}

if (!function_exists('is_https')) {
    /**
     * Sprawdza czy strona jest HTTPS
     * @return bool
     */
    function is_https(): bool
    {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (!empty($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443);
    }
}

if (!function_exists('asset')) {
    /**
     * Generuje URL do assetu z cache-busting
     * @param string $path
     * @return string
     */
    function asset(string $path): string
    {
        $path = ltrim($path, '/\\');
        $fullPath = ROOT_PATH . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
        $url = BASE_URL . '/' . str_replace('\\', '/', $path);

        if (file_exists($fullPath)) {
            $mtime = filemtime($fullPath);
            $url .= '?v=' . $mtime;
        }

        return $url;
    }
}

if (!function_exists('truncate')) {
    /**
     * Skraca tekst do określonej długości
     * @param string $text
     * @param int $length
     * @param string $suffix
     * @return string
     */
    function truncate(string $text, int $length = 150, string $suffix = '...'): string
    {
        if (mb_strlen($text) <= $length) {
            return $text;
        }
        return mb_substr($text, 0, $length) . $suffix;
    }
}

if (!function_exists('dd')) {
    /**
     * Debug helper - tylko w trybie development
     * @param mixed $data
     * @param bool $die
     */
    function dd($data, bool $die = true): void
    {
        if (defined('APP_ENV') && APP_ENV === 'production') {
            return;
        }

        echo '<div style="background:#1e1e1e;color:#dcdcdc;padding:1.5rem;border-radius:0.5rem;margin:1rem;font-family:\'Courier New\',monospace;font-size:0.875rem;line-height:1.6;overflow:auto;box-shadow:0 4px 6px rgba(0,0,0,0.1);">';
        echo '<h3 style="color:#D7A54F;margin:0 0 1rem 0;font-size:1rem;">Debug Output:</h3>';
        echo '<pre style="margin:0;white-space:pre-wrap;word-wrap:break-word;">';
        var_dump($data);
        echo '</pre>';
        echo '</div>';

        if ($die) {
            die();
        }
    }
}

if (!function_exists('safe_include')) {
    /**
     * Bezpieczne include z obsługą błędów
     * @param string $filePath
     * @param array $variables
     * @return bool
     */
    function safe_include(string $filePath, array $variables = []): bool
    {
        if (!file_exists($filePath)) {
            if (defined('APP_ENV') && APP_ENV === 'development') {
                echo '<div style="background:#dc3545;color:#fff;padding:1rem;margin:1rem;border-radius:0.5rem;">';
                echo '<strong>Include Error:</strong> File not found: ' . htmlspecialchars($filePath);
                echo '</div>';
            }
            return false;
        }

        extract($variables);
        require $filePath;
        return true;
    }
}