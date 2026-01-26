# Bilingual Website Structure - Documentation

This project provides a complete bilingual website setup (English/Serbian) with clean URLs, PHP templating, and professional SEO implementation for Apache/Hostinger.

## 📁 File Structure

```
/
├── .htaccess                  # Clean URLs & security
├── index.php                  # English homepage
├── contact.php                # English contact page
├── includes/
│   ├── head.php              # SEO meta tags & hreflang logic
│   ├── header.php            # Navigation & language switcher
│   └── footer.php            # Footer content
├── forms/
│   └── handler.php           # Bilingual form processing
├── sr/                       # Serbian language directory
│   ├── index.php            # Serbian homepage
│   └── kontakt.php          # Serbian contact page
└── Assets/
    ├── css/
    ├── js/
    └── images/
```

## 🚀 Features

### 1. Clean URLs
- ✅ `/contact` instead of `/contact.php`
- ✅ `/sr/kontakt` instead of `/sr/kontakt.php`
- ✅ Automatic .php extension removal
- ✅ Security: blocks direct access to `/includes/` and `/forms/`

### 2. Professional SEO
- ✅ Proper `hreflang` tags for bilingual content
- ✅ Self-referencing canonical URLs
- ✅ Dynamic Open Graph and Twitter Card meta tags
- ✅ Language-specific HTML lang attributes

### 3. Smart Language Switching
- ✅ SEO-friendly `<a>` tag switcher
- ✅ Automatic URL mapping between languages
- ✅ Maintains context when switching (e.g., /contact ↔ /sr/kontakt)
- ✅ Includes `aria-label` for accessibility

### 4. Bilingual Forms
- ✅ Single form handler for both languages
- ✅ Language-specific validation messages
- ✅ Spam protection with honeypot
- ✅ Session-based flash messages
- ✅ Form data persistence on errors

## 📋 Setup Instructions

### Step 1: Update Configuration

1. **Update Base URL** in `includes/head.php`:
```php
$base_url = 'https://yourwebsite.com'; // Change to your actual domain
```

2. **Update Email** in `forms/handler.php`:
```php
$to = 'your-email@yourwebsite.com'; // Change to your email
```

3. **Update Company Info** in `includes/footer.php`:
- Company name
- Address
- Phone number
- Social media links

### Step 2: Upload to Hostinger

Upload all files to your public_html directory:
```
public_html/
├── .htaccess
├── index.php
├── contact.php
├── includes/
├── forms/
├── sr/
└── Assets/
```

### Step 3: Test URL Mapping

Add more pages to the URL mapping in **both** `includes/head.php` and `includes/header.php`:

```php
$url_map = [
    'home' => [
        'en' => '/',
        'sr' => '/sr/'
    ],
    'contact' => [
        'en' => '/contact',
        'sr' => '/sr/kontakt'
    ],
    'about' => [
        'en' => '/about',
        'sr' => '/sr/o-nama'
    ],
    // Add more pages here
];
```

## 📄 Creating New Pages

### English Page Example (`about.php`)

```php
<?php
$page_title = 'About Us - BnB LAW';
$page_desc = 'Learn more about our law firm and our team of experienced attorneys.';
$current_lang = 'en';
$current_page = 'about'; // Must match URL mapping

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Your page content here -->
<section class="page-content">
    <div class="container">
        <h1>About Us</h1>
        <p>Your content...</p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
```

### Serbian Page Example (`sr/o-nama.php`)

```php
<?php
$page_title = 'O Nama - BnB LAW';
$page_desc = 'Saznajte više o našoj advokatskoj kancelariji i našem timu iskusnih advokata.';
$current_lang = 'sr';
$current_page = 'about'; // Same identifier as English version

include '../includes/head.php';
include '../includes/header.php';
?>

<!-- Your page content here -->
<section class="page-content">
    <div class="container">
        <h1>O Nama</h1>
        <p>Vaš sadržaj...</p>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
```

## 🔧 .htaccess Explained

```apache
# Remove .php extension from URLs
RewriteEngine On
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^(.*)$ $1.php [L]

# Security: Block access to includes/
RewriteRule ^includes/ - [F,L]

# Security: Block access to forms/
RewriteRule ^forms/ - [F,L]
```

## 🌐 How SEO Works

### Canonical Tags
Each page has a self-referencing canonical URL:
```html
<link rel="canonical" href="https://yourwebsite.com/contact">
```

### Hreflang Tags
Google understands language alternatives:
```html
<link rel="alternate" hreflang="en" href="https://yourwebsite.com/contact">
<link rel="alternate" hreflang="sr" href="https://yourwebsite.com/sr/kontakt">
<link rel="alternate" hreflang="x-default" href="https://yourwebsite.com/contact">
```

### Language Switcher
SEO-friendly link that search engines can follow:
```html
<a href="/sr/kontakt" hreflang="sr" aria-label="Switch to Serbian">SR</a>
```

## 📧 Form Implementation

### In Your Contact Form
Always include these two fields:

```html
<!-- Language identifier -->
<input type="hidden" name="lang" value="en">

<!-- Spam protection (hidden from users) -->
<input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
```

### Form Processing
The handler automatically:
1. Detects the language from the `lang` field
2. Validates inputs
3. Returns language-specific error messages
4. Sends email notifications
5. Redirects back with success/error messages

## 🎨 Navigation

The header automatically generates navigation based on language:
- English: Home, About Us, Contact, etc.
- Serbian: Početna, O Nama, Kontakt, etc.

Active page highlighting is automatic based on current URI.

## ✅ Testing Checklist

- [ ] Visit `/` and `/sr/` - both should work
- [ ] Visit `/contact` and `/sr/kontakt` - no .php in URL
- [ ] Click language switcher - should go to correct equivalent page
- [ ] View page source - check for proper hreflang tags
- [ ] Try to access `/includes/head.php` - should be blocked (403)
- [ ] Submit contact form in both languages - check messages
- [ ] Test with Google Search Console for international targeting

## 🔍 Google Search Console Setup

1. Add both language versions:
   - `https://yourwebsite.com`
   - `https://yourwebsite.com/sr/`

2. Submit sitemap with hreflang annotations

3. Monitor "International Targeting" reports

## 🛠️ Maintenance

### Adding New Pages
1. Create PHP file (e.g., `services.php` and `sr/usluge.php`)
2. Add to URL mapping in `includes/head.php` and `includes/header.php`
3. Update navigation arrays in `includes/header.php`
4. Set `$current_page` variable in both language versions

### Updating Common Elements
- Header/Navigation: Edit `includes/header.php`
- Footer: Edit `includes/footer.php`
- Meta tags: Edit `includes/head.php`
- Forms: Edit `forms/handler.php`

## 📱 Mobile Responsive

The structure supports Bootstrap 5 classes by default. Ensure your CSS includes:
- Mobile menu toggle
- Responsive navigation
- Form styling
- Language switcher button

## 🔒 Security Features

- Direct access blocked to `/includes/` and `/forms/`
- Hidden files (.htaccess, .git) blocked
- HTML entity escaping on all outputs
- Email validation and sanitization
- Honeypot spam protection
- Session-based message handling

## 🌟 Benefits

1. **Professional URLs**: No ugly .php extensions
2. **Smart SEO**: Google clearly understands language relationships
3. **Maintainability**: Edit header/footer once, updates everywhere
4. **User Experience**: Seamless language switching
5. **Security**: Protected directories and sanitized inputs
6. **Performance**: Browser caching and gzip compression enabled

## 📞 Support

For questions or issues:
1. Check Apache error logs on Hostinger
2. Test .htaccess rules individually
3. Verify file permissions (644 for files, 755 for directories)
4. Ensure PHP is enabled on your hosting

## 📝 Notes

- The `.htaccess` file must be in the root directory
- PHP files must have `.php` extension (accessed without it via rewrite rules)
- Update `$base_url` before going live
- Test all forms before launch
- Keep URL mappings synchronized across files

---

**Version**: 1.0  
**Last Updated**: January 2026  
**Compatible**: Apache 2.4+, PHP 7.4+
