# Dokumentacja API / API Documentation

## 📋 Przegląd / Overview

**MAGIC SALON** obecnie **nie posiada publicznego API**. Ten dokument służy jako przewodnik na przyszłość, gdy API zostanie zaimplementowane, oraz dokumentuje istniejące integracje zewnętrzne.

**MAGIC SALON** currently **does not have a public API**. This document serves as a future guide when an API is implemented, and documents existing external integrations.

---

## 🚫 Stan Obecny / Current State

### Brak API / No API

Projekt nie implementuje REST API ani GraphQL endpoint. Wszystkie dane są:
The project doesn't implement REST API or GraphQL endpoints. All data is:

- **Statyczne** w plikach PHP / **Static** in PHP files
- **Hardcoded** w komponentach / **Hardcoded** in components
- **Pobierane** z zewnętrznych serwisów / **Fetched** from external services

### Istniejące Integracje / Existing Integrations

```
┌─────────────────────────────────────┐
│  External Services Used             │
│  ├── Booksy API (booking)           │
│  ├── Google Analytics (tracking)    │
│  ├── Facebook Pixel (tracking)      │
│  ├── Google Tag Manager             │
│  └── WhatsApp Business API          │
└─────────────────────────────────────┘
```

---

## 🔌 Istniejące Integracje / Existing Integrations

### 1. **Booksy API**

**Provider:** Booksy
**Purpose:** Online appointment booking
**Type:** Widget Integration (iframe)

#### Endpoints Used

```
Production URL: https://booksy.magicsalon.pl
```

#### Implementation

```html
<!-- CTA Button -->
<a href="https://booksy.magicsalon.pl" target="_blank">
    Zarezerwuj wizytę
</a>

<!-- Widget (footer.php) -->
<div class="booksy-ctc-chatbox" id="booksyChatboxWidget">
    <!-- Booksy widget content -->
</div>
```

#### JavaScript

```javascript
// booksy-widget.js
function toggleBooksyChatbox() {
    const chatbox = document.getElementById('booksyChatboxWidget');
    chatbox.style.display = chatbox.style.display === 'none' ? 'block' : 'none';
}

// Track clicks
function trackBooksyClick(event) {
    if (typeof gtag !== 'undefined') {
        gtag('event', 'click', {
            'event_category': 'Booksy',
            'event_label': 'Footer Widget',
            'value': 1
        });
    }
}
```

#### Configuration

```php
// config.php or helpers.php
$booksy_config = [
    'url' => 'https://booksy.magicsalon.pl',
    'salon_id' => 'magic-salon',
    'enabled' => true
];
```

---

### 2. **Google Analytics (GA4)**

**Provider:** Google
**Purpose:** Web analytics and tracking
**Type:** JavaScript SDK

#### Configuration

```javascript
// Measurement ID: G-ZFZ2DQZQC6

// Implementation (head.php)
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFZ2DQZQC6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-ZFZ2DQZQC6', {
    'anonymize_ip': true,
    'cookie_flags': 'SameSite=None;Secure'
  });
</script>
```

#### Event Tracking

```javascript
// Custom event tracking
gtag('event', 'event_name', {
    'event_category': 'Category',
    'event_label': 'Label',
    'value': 1
});

// Example: Booking button click
gtag('event', 'click', {
    'event_category': 'Booksy',
    'event_label': 'Header CTA',
    'value': 1
});
```

#### Privacy Compliance

- ✅ IP anonymization enabled
- ✅ Cookie consent integration
- ✅ GDPR compliant settings

---

### 3. **Facebook Pixel**

**Provider:** Meta (Facebook)
**Purpose:** Conversion tracking and advertising
**Type:** JavaScript SDK

#### Configuration

```javascript
// Pixel IDs:
// - 23924298163858020
// - 24229370236712758

// Implementation (head.php)
!function(f,b,e,v,n,t,s) {
    if(f.fbq)return;n=f.fbq=function(){
        n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)
    };
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)
}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '23924298163858020');
fbq('track', 'PageView');
```

#### Event Tracking

```javascript
// Standard events
fbq('track', 'PageView');
fbq('track', 'ViewContent');
fbq('track', 'Lead');
fbq('track', 'Contact');

// Custom events
fbq('trackCustom', 'BookingInitiated', {
    page: 'zarezerwuj-wizyte'
});
```

---

### 4. **Google Tag Manager**

**Provider:** Google
**Purpose:** Tag management system
**Type:** JavaScript SDK

#### Configuration

```javascript
// Container ID: GTM-K76PV6PD

// Implementation (head.php)
(function(w,d,s,l,i){
    w[l]=w[l]||[];
    w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
    var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),
        dl=l!='dataLayer'?'&l='+l:'';
    j.async=true;
    j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
    f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K76PV6PD');
```

#### Data Layer

```javascript
// Push events to dataLayer
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
    'event': 'custom_event',
    'category': 'Category',
    'action': 'Action',
    'label': 'Label'
});
```

---

### 5. **WhatsApp Business API**

**Provider:** WhatsApp (Meta)
**Purpose:** Customer communication
**Type:** URL Scheme

#### Configuration

```javascript
// Business number: +48883481581

// Click-to-chat URL
const whatsappUrl = 'https://wa.me/48883481581';

// With pre-filled message
const whatsappUrlWithMessage = 'https://wa.me/48883481581?text=Witam,%20mam%20pytanie%20dotyczące%20usług%20salonu';
```

#### Implementation

```html
<!-- Widget button (footer.php) -->
<div class="custom-ctc-button" onclick="toggleCtcChatbox()">
    <div class="custom-ctc-icon">
        <img src="images/svg/WhatsApp.svg" alt="WhatsApp">
    </div>
</div>

<!-- Chatbox -->
<div class="custom-ctc-chatbox" id="customCtcChatbox">
    <!-- Content -->
    <div class="ctc_g_sentbutton">
        <div onclick="window.open('https://wa.me/48883481581', '_blank')">
            <p>Napisz do nas na WhatsApp</p>
        </div>
    </div>
</div>
```

---

## 🔮 Przyszłe API / Future API

### Planowana Architektura / Planned Architecture

Jeśli projekt będzie wymagał API, rekomendowana architektura:
If the project requires an API, recommended architecture:

```
┌─────────────────────────────────────┐
│  REST API Architecture              │
│  ├── Authentication (JWT/OAuth2)    │
│  ├── Rate Limiting                  │
│  ├── Versioning (/api/v1/)          │
│  ├── JSON Responses                 │
│  └── CORS Configuration             │
└─────────────────────────────────────┘
```

### Potencjalne Endpointy / Potential Endpoints

#### 1. **Services API**

```http
GET /api/v1/services
Response: List of all services

GET /api/v1/services/{id}
Response: Service details

GET /api/v1/services/categories
Response: Service categories
```

#### 2. **Booking API** (if implementing internally)

```http
POST /api/v1/bookings
Body: {
    "service_id": 123,
    "date": "2025-12-01",
    "time": "14:00",
    "customer": {...}
}

GET /api/v1/bookings/{id}
Response: Booking details

PATCH /api/v1/bookings/{id}
Body: { "status": "confirmed" }

DELETE /api/v1/bookings/{id}
Response: Cancellation confirmation
```

#### 3. **Contact API**

```http
POST /api/v1/contact
Body: {
    "name": "Jan Kowalski",
    "email": "jan@example.com",
    "phone": "+48123456789",
    "message": "Pytanie o zabiegi"
}
Response: Success/Error message
```

#### 4. **Reviews API**

```http
GET /api/v1/reviews
Response: List of reviews

POST /api/v1/reviews
Body: {
    "customer_name": "Anna Nowak",
    "rating": 5,
    "comment": "Świetny salon!"
}

GET /api/v1/reviews/stats
Response: Rating statistics
```

#### 5. **Gallery API**

```http
GET /api/v1/gallery
Response: Gallery images

GET /api/v1/gallery/{category}
Response: Images by category
```

---

## 🔐 Bezpieczeństwo API / API Security

### Rekomendowane Praktyki / Recommended Practices

```php
// 1. Authentication
// JWT Token example
$token = generateJWT([
    'user_id' => $userId,
    'exp' => time() + 3600
]);

// 2. Rate Limiting
// Limit requests per IP
$limiter = new RateLimiter(100, 3600); // 100 requests per hour
if (!$limiter->check($_SERVER['REMOTE_ADDR'])) {
    http_response_code(429);
    exit(json_encode(['error' => 'Too many requests']));
}

// 3. Input Validation
$data = json_decode(file_get_contents('php://input'), true);
$name = filter_var($data['name'], FILTER_SANITIZE_STRING);
$email = filter_var($data['email'], FILTER_VALIDATE_EMAIL);

// 4. CORS Headers
header('Access-Control-Allow-Origin: https://magicsalon.pl');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

// 5. Error Handling
try {
    // API logic
} catch (Exception $e) {
    http_response_code(500);
    exit(json_encode([
        'error' => 'Internal server error',
        'message' => APP_ENV === 'development' ? $e->getMessage() : ''
    ]));
}
```

---

## 📊 Response Formats

### Success Response

```json
{
    "success": true,
    "data": {
        "id": 123,
        "name": "Example Service",
        "price": "150 PLN",
        "duration": "60 min"
    },
    "meta": {
        "timestamp": "2025-11-24T12:00:00Z",
        "version": "1.0"
    }
}
```

### Error Response

```json
{
    "success": false,
    "error": {
        "code": "VALIDATION_ERROR",
        "message": "Invalid email format",
        "field": "email"
    },
    "meta": {
        "timestamp": "2025-11-24T12:00:00Z",
        "version": "1.0"
    }
}
```

### Pagination

```json
{
    "success": true,
    "data": [
        {...},
        {...}
    ],
    "pagination": {
        "current_page": 1,
        "per_page": 20,
        "total_pages": 5,
        "total_items": 100
    }
}
```

---

## 🧪 Testing API (Future)

### cURL Examples

```bash
# GET request
curl -X GET https://magicsalon.pl/api/v1/services \
     -H "Content-Type: application/json"

# POST request
curl -X POST https://magicsalon.pl/api/v1/contact \
     -H "Content-Type: application/json" \
     -d '{
       "name": "Jan Kowalski",
       "email": "jan@example.com",
       "message": "Test message"
     }'

# With authentication
curl -X GET https://magicsalon.pl/api/v1/bookings \
     -H "Content-Type: application/json" \
     -H "Authorization: Bearer YOUR_JWT_TOKEN"
```

### Postman Collection

```json
{
    "info": {
        "name": "MAGIC SALON API",
        "schema": "https://schema.getpostman.com/json/collection/v2.1.0/"
    },
    "item": [
        {
            "name": "Get Services",
            "request": {
                "method": "GET",
                "header": [],
                "url": {
                    "raw": "{{baseUrl}}/api/v1/services",
                    "host": ["{{baseUrl}}"],
                    "path": ["api", "v1", "services"]
                }
            }
        }
    ]
}
```

---

## 📚 Zasoby / Resources

### Dokumentacja Zewnętrznych API / External API Documentation

- **Booksy API**: https://api.booksy.com/docs (requires partner access)
- **Google Analytics**: https://developers.google.com/analytics
- **Facebook Pixel**: https://developers.facebook.com/docs/meta-pixel
- **Google Tag Manager**: https://developers.google.com/tag-platform/tag-manager
- **WhatsApp Business**: https://developers.facebook.com/docs/whatsapp

### Narzędzia / Tools

- **Postman**: API testing tool
- **Insomnia**: Alternative API client
- **Swagger/OpenAPI**: API documentation standard
- **curl**: Command-line HTTP client

---

## 💡 Przykład Implementacji / Implementation Example

### Prosty API Endpoint (Proof of Concept)

```php
<?php
// api/v1/services.php

require_once __DIR__ . '/../../dist/config.php';

// Set JSON headers
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

// Mock data (in future, from database)
$services = [
    [
        'id' => 1,
        'name' => 'Depilacja laserowa',
        'category' => 'Epilacja',
        'price' => '150 PLN',
        'duration' => '60 min'
    ],
    [
        'id' => 2,
        'name' => 'Lifting rzęs',
        'category' => 'Stylizacja rzęs',
        'price' => '120 PLN',
        'duration' => '45 min'
    ]
];

// Output
echo json_encode([
    'success' => true,
    'data' => $services,
    'meta' => [
        'timestamp' => date('c'),
        'count' => count($services)
    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
```

---

## 🚀 Wdrożenie API / API Deployment

### Konfiguracja .htaccess (Apache)

```apache
# API routing
RewriteEngine On
RewriteRule ^api/v1/services$ api/v1/services.php [L]
RewriteRule ^api/v1/contact$ api/v1/contact.php [L]

# API authentication
<FilesMatch "^(bookings|admin)\.php$">
    Require valid-user
</FilesMatch>
```

### Nginx Configuration

```nginx
# API location
location /api/ {
    try_files $uri $uri/ /api/router.php?$args;
}

# CORS headers
add_header 'Access-Control-Allow-Origin' 'https://magicsalon.pl';
add_header 'Access-Control-Allow-Methods' 'GET, POST, PUT, DELETE, OPTIONS';
```

---

## 📞 Kontakt / Contact

**Pytania dotyczące API:**
Questions about API:

- 📧 Email: biuro@magicsalon.pl
- 📚 Docs: [ARCHITECTURE.md](ARCHITECTURE.md)
- 💬 Support: [SUPPORT.md](SUPPORT.md)

---

**Ostatnia aktualizacja / Last updated:** 2025-11-24
**Status:** Documentation for future implementation
**Wersja / Version:** 1.0.0
