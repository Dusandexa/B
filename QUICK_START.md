# Quick Start Guide

## 🚀 Getting Started in 3 Steps

### 1️⃣ Configure Your Site (5 minutes)

Edit [config.php](config.php#L11-L13):
```php
define('SITE_URL', 'https://yourwebsite.com');        // Your domain
define('CONTACT_EMAIL', 'info@yourwebsite.com');      // Your email
define('CONTACT_PHONE', '+381 XX XXX XXXX');          // Your phone
```

### 2️⃣ Upload to Hostinger

Upload these files to `public_html/`:
- ✅ .htaccess
- ✅ config.php
- ✅ index.php
- ✅ contact.php
- ✅ includes/ folder
- ✅ forms/ folder
- ✅ sr/ folder
- ✅ Assets/ folder

### 3️⃣ Test Your Site

Visit these URLs (all should work without .php):
- `yourwebsite.com/` → English homepage
- `yourwebsite.com/contact` → English contact
- `yourwebsite.com/sr/` → Serbian homepage
- `yourwebsite.com/sr/kontakt` → Serbian contact

---

## 📄 Adding a New Page

### Step 1: Create the URL Mapping

Edit [config.php](config.php#L57) and add:
```php
'services' => [
    'en' => '/services',
    'sr' => '/sr/usluge'
],
```

### Step 2: Add to Navigation

Edit [config.php](config.php#L83) and add:
```php
// English
['url' => '/services', 'text' => 'Services', 'page' => 'services'],

// Serbian (line 93)
['url' => '/sr/usluge', 'text' => 'Usluge', 'page' => 'services'],
```

### Step 3: Create PHP Files

**English** (`services.php`):
```php
<?php
$page_title = 'Our Services - BnB LAW';
$page_desc = 'Professional legal services description';
$current_lang = 'en';
$current_page = 'services';

include 'includes/head.php';
include 'includes/header.php';
?>

<h1>Our Services</h1>
<p>Your content here...</p>

<?php include 'includes/footer.php'; ?>
```

**Serbian** (`sr/usluge.php`):
```php
<?php
$page_title = 'Naše Usluge - BnB LAW';
$page_desc = 'Opis pravnih usluga';
$current_lang = 'sr';
$current_page = 'services';

include '../includes/head.php';
include '../includes/header.php';
?>

<h1>Naše Usluge</h1>
<p>Vaš sadržaj ovde...</p>

<?php include '../includes/footer.php'; ?>
```

### Step 4: Test
- Visit `/services` and `/sr/usluge`
- Click language switcher
- Check page source for hreflang tags

---

## 🔧 Common Tasks

### Update Header/Footer
- **Header**: Edit [includes/header.php](includes/header.php)
- **Footer**: Edit [includes/footer.php](includes/footer.php)
- Changes apply to ALL pages automatically

### Update Company Info
Edit [config.php](config.php):
- Lines 11-13: URLs and names
- Lines 18-21: Contact details
- Lines 26-29: Social media links

### Form Email Destination
Edit [forms/handler.php](forms/handler.php#L82):
```php
$to = 'your-email@yourwebsite.com';
```

---

## 🌐 How URLs Work

### Clean URLs via .htaccess
```
/contact        → contact.php (hidden)
/sr/kontakt     → sr/kontakt.php (hidden)
```

### Language Switcher
When on `/contact`, clicking "SR" takes you to `/sr/kontakt`  
When on `/sr/kontakt`, clicking "EN" takes you to `/contact`

### SEO Magic
Google sees:
```html
<link rel="alternate" hreflang="en" href="https://site.com/contact">
<link rel="alternate" hreflang="sr" href="https://site.com/sr/kontakt">
```

This tells Google: "These are the same page in different languages"

---

## ✅ Pre-Launch Checklist

- [ ] Updated `SITE_URL` in config.php
- [ ] Updated `CONTACT_EMAIL` in config.php
- [ ] Updated company info in config.php
- [ ] Tested all navigation links
- [ ] Tested language switcher on each page
- [ ] Tested contact form in both languages
- [ ] Checked page source for proper hreflang tags
- [ ] Verified clean URLs work (no .php)
- [ ] Tested on mobile devices
- [ ] Checked that /includes/ returns 403 Forbidden
- [ ] Set up Google Search Console
- [ ] Submitted sitemap

---

## 🐛 Troubleshooting

### Clean URLs Not Working
1. Check if `.htaccess` is uploaded
2. Verify Apache mod_rewrite is enabled (ask Hostinger support)
3. Check file permissions: 644 for .htaccess

### Language Switcher Goes to Wrong Page
1. Verify `$current_page` matches in both language versions
2. Check URL mapping in config.php
3. Ensure page identifier is consistent

### Form Not Sending Emails
1. Check PHP mail() is enabled on Hostinger
2. Verify email address in forms/handler.php
3. Check spam folder
4. Consider using SMTP instead of mail()

### 403 Forbidden on Regular Pages
1. Check .htaccess syntax
2. Verify RewriteRule conditions
3. Check file permissions: 644 for PHP files

---

## 📞 Support Resources

- **Hostinger Help**: Check Apache/PHP configuration
- **File Permissions**: 644 for files, 755 for folders
- **Error Logs**: Check via cPanel or Hostinger dashboard
- **Test Mode**: Comment out RewriteRules one by one to isolate issues

---

## 🎯 Next Steps

1. Convert remaining HTML pages to PHP
2. Add more language pairs if needed
3. Set up analytics (Google Analytics)
4. Create XML sitemap with hreflang
5. Add structured data (JSON-LD)
6. Implement caching strategy
7. Set up SSL certificate (if not already)

---

**Need help?** Check the full [README.md](README.md) for detailed documentation.
