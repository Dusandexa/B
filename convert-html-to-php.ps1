# PHP Conversion Script for all HTML files
# This script will:
# 1. Convert each HTML file to PHP with proper SEO variables
# 2. Update all internal links to clean URLs
# 3. Add language switcher support
# 4. Preserve all original design and content

$files = @(
    @{
        html = "contact.html"
        php = "contact.php"
        title = "Contact Us - BnB LAW"
        desc = "Let's discuss your matter with clarity and discretion. Contact our legal team for professional legal counsel."
        page = "contact"
        sr_url = "/sr/kontakt"
    },
    @{
        html = "legal-fields.html"
        php = "legal-fields.php"
        title = "Legal Fields - BnB LAW"
        desc = "We bring deep legal insight to protect your interests in fast-moving and highly regulated sectors."
        page = "legal-fields"
        sr_url = "/sr/pravne-oblasti"
    },
    @{
        html = "our-team.html"
        php = "our-team.php"
        title = "Our Team - BnB LAW"
        desc = "Meet our team of experienced attorneys dedicated to providing exceptional legal representation."
        page = "team"
        sr_url = "/sr/nas-tim"
    },
    @{
        html = "careers.html"
        php = "careers.php"
        title = "Careers - BnB LAW"
        desc = "Join our team and build a rewarding career in law. Explore current openings and opportunities."
        page = "careers"
        sr_url = "/sr/karijere"
    },
    @{
        html = "jurisdictions.html"
        php = "jurisdictions.php"
        title = "Jurisdictions - BnB LAW"
        desc = "We provide legal services across multiple jurisdictions with deep local expertise."
        page = "jurisdictions"
        sr_url = "/sr/jurisdikcije"
    },
    @{
        html = "News.html"
        php = "news.php"
        title = "News & Insights - BnB LAW"
        desc = "Stay informed with the latest legal news, insights, and updates from our team."
        page = "news"
        sr_url = "/sr/vesti"
    },
    @{
        html = "news-single.html"
        php = "news-single.php"
        title = "Article - BnB LAW"
        desc = "Read our latest legal insights and analysis on important developments in the industry."
        page = "news-single"
        sr_url = "/sr/vest"
    }
)

foreach ($file in $files) {
    Write-Host "Converting $($file.html) to $($file.php)..." -ForegroundColor Green
    
    # Read the HTML file
    $content = Get-Content $file.html -Raw -Encoding UTF8
    
    # Remove DOCTYPE and opening HTML/head tags
    $content = $content -replace '<!DOCTYPE html>[^<]*<html[^>]*>[^<]*<head[^>]*>.*?</head>[^<]*<body[^>]*>', ''
    
    # Remove closing body and html tags
    $content = $content -replace '</body>[^<]*</html>[^<]*$', ''
    
    # Update all internal HTML links to clean URLs
    $content = $content -replace 'href="index\.html"', 'href="/"'
    $content = $content -replace 'href="contact\.html"', 'href="/contact"'
    $content = $content -replace 'href="legal-fields\.html"', 'href="/legal-fields"'
    $content = $content -replace 'href="jurisdictions\.html"', 'href="/jurisdictions"'
    $content = $content -replace 'href="our-team\.html"', 'href="/our-team"'
    $content = $content -replace 'href="careers\.html"', 'href="/careers"'
    $content = $content -replace 'href="News\.html"', 'href="/news"'
    $content = $content -replace 'href="news-single\.html"', 'href="/news-single"'
    
    # Update language switcher flags to English
    $content = $content -replace 'https://flagcdn\.com/w40/rs\.png" alt="Serbian"', 'https://flagcdn.com/w40/gb.png" alt="English"'
    
    # Update language switcher links
    $content = $content -replace '<a href="#" class="lang-option active" data-lang="sr">[^<]*<img src="https://flagcdn\.com/w40/rs\.png"[^>]*>[^<]*Srpski[^<]*</a>[^<]*<a href="#" class="lang-option" data-lang="en">[^<]*<img src="https://flagcdn\.com/w40/gb\.png"[^>]*>[^<]*English[^<]*</a>', 
        '<a href="' + $file.sr_url + '" class="lang-option" data-lang="sr"><img src="https://flagcdn.com/w40/rs.png" alt="Serbian" class="lang-flag" />Srpski</a><a href="/' + $file.page + '" class="lang-option active" data-lang="en"><img src="https://flagcdn.com/w40/gb.png" alt="English" class="lang-flag" />English</a>'
    
    # Create PHP header
    $phpHeader = @"
<?php
``$page_title = '$($file.title)';
``$page_desc = '$($file.desc)';
``$current_lang = 'en';
``$current_page = '$($file.page)';
``$page_image = '/Assets/images/og-$($file.page).jpg';
include 'includes/head.php';
?>

"@
    
    # Combine PHP header with content and closing tags
    $phpContent = $phpHeader + $content + "`n</body>`n</html>"
    
    # Write to PHP file
    $phpContent | Out-File -FilePath $file.php -Encoding UTF8
    
    Write-Host "✓ Created $($file.php)" -ForegroundColor Cyan
}

Write-Host "`n✅ All HTML files converted to PHP successfully!" -ForegroundColor Green
