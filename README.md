# UnlockYourSkills Website

## Overview
This is a standalone marketing website for UnlockYourSkills LMS platform. It's completely independent from the main LMS application and can be deployed separately.

## Project Structure

```
UnlockYourSkillsWebsite/
├── index.php              # Main entry point (routing)
├── assets/
│   ├── css/
│   │   └── style.css     # Main stylesheet
│   ├── images/
│   │   ├── favicon.png
│   │   └── UYSlogo copy.png
│   └── js/
│       └── main.js       # JavaScript functionality
├── includes/
│   ├── header.php        # Site header and navigation
│   └── footer.php        # Site footer
├── pages/
│   ├── home.php          # Homepage
│   ├── features.php      # Features page
│   ├── pricing.php       # Pricing page
│   ├── about.php         # About page
│   ├── contact.php       # Contact page
│   ├── demo.php          # Demo request page
│   └── 404.php           # 404 error page
└── screenshots/          # Platform screenshots
```

## Accessing the Website

**Local Development:**
- URL: `http://localhost/UnlockYourSkillsWebsite/`
- Homepage: `http://localhost/UnlockYourSkillsWebsite/index.php`
- Features: `http://localhost/UnlockYourSkillsWebsite/index.php/features`
- Pricing: `http://localhost/UnlockYourSkillsWebsite/index.php/pricing`
- About: `http://localhost/UnlockYourSkillsWebsite/index.php/about`
- Contact: `http://localhost/UnlockYourSkillsWebsite/index.php/contact`
- Demo: `http://localhost/UnlockYourSkillsWebsite/index.php/demo`

## Features

- ✅ Clean URL routing using PATH_INFO
- ✅ Responsive design
- ✅ SEO optimized (meta tags, schema markup)
- ✅ Modern UI with smooth animations
- ✅ Mobile-friendly navigation
- ✅ All assets (CSS, images, JS) self-contained
- ✅ Standalone - no dependencies on main LMS

## Files Included

### Styles
- `assets/css/style.css` - Complete styling for the website

### Images
- `assets/images/favicon.png` - Site favicon
- `assets/images/UYSlogo copy.png` - Logo
- `screenshots/` - Platform screenshots (dashboard, features, etc.)

### JavaScript
- `assets/js/main.js` - Mobile menu, form handling, smooth scrolling

## Customization

To customize the website:
1. Edit `includes/header.php` to modify base URL
2. Edit `includes/footer.php` for footer content
3. Modify individual pages in `pages/` directory
4. Update styles in `assets/css/style.css`
5. Adjust JavaScript in `assets/js/main.js`

## Notes

- This website is completely independent from the main Unlockyourskills application
- Form submissions (demo/contact) currently show a notification message
- To enable actual form submissions, create API endpoints in an `api/` directory
- All paths are relative to `/UnlockYourSkillsWebsite/`

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

