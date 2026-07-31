# ProspectPanda CRM Website

A modern, professional website for ProspectPanda - a Customer Relationship Management (CRM) software platform. Built with PHP, featuring a sleek dark/light theme toggle and fully responsive design.

## 🎉 What's Included

This website includes 5 fully functional pages:

1. **Homepage** (`index.php`) - Eye-catching hero section, key features, customer testimonials
2. **About Us** (`about.php`) - Company story, values, and statistics
3. **Features** (`features.php`) - Comprehensive list of 12 CRM features
4. **Pricing** (`pricing.php`) - 3 pricing tiers (Starter, Growing, Retainer) with FAQ
5. **Contact** (`contact.php`) - Contact form, info cards, and embedded map

## ✨ Key Features

- **Dark/Light Theme Toggle** - Seamless theme switching with localStorage persistence
- **Responsive Design** - Works perfectly on desktop, tablet, and mobile devices
- **Modern UI** - Clean, professional design with smooth animations
- **Reusable Components** - Modular PHP partials for easy maintenance
- **SEO Ready** - Proper meta tags and semantic HTML structure
- **Fast Loading** - Optimized assets and efficient code

## 📁 Project Structure

```
ProspectPanda/
├── assets/                  # All design assets (CSS, JS, images, fonts)
│   ├── css/
│   │   ├── main.min.css    # Main template styles
│   │   └── custom.css      # ProspectPanda custom styles
│   ├── js/
│   │   ├── main.js         # Main template scripts
│   │   └── theme-toggle.js # Dark/light theme functionality
│   └── images/             # Images and graphics
├── partials/               # Reusable PHP components
│   ├── head.php           # HTML head section
│   ├── header.php         # Navigation header
│   ├── footer.php         # Footer section
│   ├── page-header.php    # Page title banner
│   ├── preloader.php      # Loading animation
│   ├── cursor.php         # Custom cursor
│   ├── scroll-up.php      # Back to top button
│   └── script.php         # Script includes
├── index.php              # Homepage
├── about.php              # About Us page
├── features.php           # Features page
├── pricing.php            # Pricing page
├── contact.php            # Contact page
├── PROJECT_STATUS.md      # Development progress tracker
└── README.md              # This file
```

## 🚀 Setup Instructions

### Requirements

- **Web Server**: Apache, Nginx, or any PHP-compatible server
- **PHP**: Version 7.0 or higher
- **Browser**: Modern browser (Chrome, Firefox, Safari, Edge)

### Local Development Setup

#### Option 1: Using XAMPP (Windows)

1. **Install XAMPP**
   - Download from: https://www.apachefriends.org/
   - Install and launch XAMPP Control Panel
   - Start Apache

2. **Copy Project Files**
   ```
   Copy the ProspectPanda folder to:
   C:\xampp\htdocs\ProspectPanda
   ```

3. **Access Website**
   - Open browser and go to: `http://localhost/ProspectPanda/`

#### Option 2: Using PHP Built-in Server

1. **Open Terminal/Command Prompt**
   ```bash
   cd C:\Users\Administrator\Documents\MEGA\ProspectPanda
   ```

2. **Start PHP Server**
   ```bash
   php -S localhost:8000
   ```

3. **Access Website**
   - Open browser and go to: `http://localhost:8000/`

#### Option 3: Using WAMP (Windows)

1. **Install WAMP**
   - Download from: https://www.wampserver.com/
   - Install and launch WAMP
   - Wait for icon to turn green

2. **Copy Project Files**
   ```
   Copy the ProspectPanda folder to:
   C:\wamp64\www\ProspectPanda
   ```

3. **Access Website**
   - Open browser and go to: `http://localhost/ProspectPanda/`

## 🎨 Theme Toggle

The website features a sophisticated dark/light theme toggle:

- **Toggle Button**: Located in the top navigation bar
- **Icons**: Sun icon (☀️) for dark mode, Moon icon (🌙) for light mode
- **Persistence**: Theme preference saved in browser localStorage
- **Smooth Transitions**: Elegant animations between themes

### How It Works

1. Click the theme toggle button in the header
2. Theme switches instantly with smooth animations
3. Preference saved automatically
4. Loads your saved theme on next visit

## 📝 Customization Guide

### Changing Colors

Edit `assets/css/custom.css`:

```css
/* Change primary brand color */
--primary-color-1: #7B52F4; /* Change this hex code */
```

### Updating Contact Information

Edit `partials/footer.php` and `contact.php`:

```php
<!-- Email -->
hello@prospectpanda.com

<!-- Phone -->
+1 (888) 555-PANDA

<!-- Address -->
123 CRM Street, Suite 100
San Francisco, CA 94102
```

### Modifying Navigation Menu

Edit `partials/header.php`:

```php
<li class="navbar__item nav-fade">
    <a href="your-page.php">Your Page</a>
</li>
```

### Adding a New Page

1. **Create New PHP File**
   ```php
   <?php
   $title='Your Page - ProspectPanda CRM';
   $Title='Home';
   $Title2='Your Page';
   $img='assets/images/banner/page-header.png';
   ?>
   <?php include './partials/head.php'?>

   <body>
       <?php include './partials/preloader.php'?>
       <?php include './partials/cursor.php'?>
       <?php include './partials/header.php'?>

       <div id="smooth-wrapper">
           <div id="smooth-content">
               <main>
                   <?php include './partials/page-header.php'?>

                   <!-- Your content here -->

               </main>
               <?php include './partials/footer.php'?>
           </div>
       </div>

       <?php include './partials/scroll-up.php'?>
       <?php include './partials/script.php'?>
   </body>
   </html>
   ```

2. **Add to Navigation** (in `partials/header.php`)

3. **Add to Footer** (in `partials/footer.php`)

## 📱 Responsive Breakpoints

The website is fully responsive with the following breakpoints:

- **Mobile**: < 576px
- **Tablet**: 576px - 768px
- **Desktop**: 768px - 1200px
- **Large Desktop**: > 1200px

## 🔧 Troubleshooting

### Theme Toggle Not Working

1. Check browser console for JavaScript errors
2. Ensure `theme-toggle.js` is loaded:
   ```
   View Page Source → Look for: assets/js/theme-toggle.js
   ```
3. Clear browser cache and localStorage

### Images Not Loading

1. Verify the `assets/` folder exists
2. Check file paths are correct (case-sensitive on Linux)
3. Ensure web server has read permissions

### PHP Errors

1. Check PHP version: `php -v` (must be 7.0+)
2. Enable error reporting in `php.ini`:
   ```ini
   display_errors = On
   error_reporting = E_ALL
   ```
3. Check Apache/server error logs

### Styling Issues

1. Clear browser cache (Ctrl+F5 or Cmd+Shift+R)
2. Check `custom.css` is loaded after `main.min.css`
3. Verify CSS file paths in `partials/head.php`

## 📚 Technologies Used

- **PHP** - Server-side scripting
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with custom properties
- **JavaScript (ES6+)** - Interactive features
- **Bootstrap 5** - Grid system and utilities
- **Font Awesome** - Icon library
- **GSAP** - Animation library
- **Slick** - Carousel/slider

## 🎯 Pages Overview

### Homepage
- Hero section with CTA
- CRM value proposition
- 4 key features showcase
- Customer testimonials slider
- Trusted partners section

### About Us
- Company story and mission
- Core values (4 pillars)
- By-the-numbers statistics
- Call-to-action section

### Features
- 12 detailed CRM features
- Advanced capabilities section
- Benefits and use cases
- Free trial CTA

### Pricing
- 3 pricing tiers with comparison
- Feature lists for each plan
- FAQ section (6 common questions)
- Annual billing discount note

### Contact
- 3 contact method cards
- Comprehensive contact form
- Embedded Google Maps
- Quick trial CTA

## 📬 Support & Documentation

### Need Help?

- Check this README first
- Review `PROJECT_STATUS.md` for development history
- Search for similar issues online

### Want to Extend?

- Follow the "Adding a New Page" guide above
- Keep the same structure for consistency
- Test on multiple browsers and devices

## 🎨 Design Credits

Website template: Xpovio by pixel-plus
Customization: ProspectPanda Team
Theme Toggle: Custom implementation

## 📄 License

This project uses a premium template. Ensure you have proper licensing before deploying to production.

## ✅ Completed Features

- ✅ Full website structure (5 pages)
- ✅ Dark/Light theme toggle
- ✅ Responsive design
- ✅ Custom CRM content
- ✅ Contact form
- ✅ Pricing tables
- ✅ Feature showcase
- ✅ Testimonials
- ✅ Reusable components

## 🚦 Next Steps (Optional Enhancements)

- [ ] Connect contact form to backend/email service
- [ ] Add form validation and AJAX submission
- [ ] Implement blog section
- [ ] Add customer login portal
- [ ] Integrate with actual CRM backend
- [ ] Add analytics (Google Analytics)
- [ ] Implement cookie consent banner
- [ ] Add multi-language support
- [ ] Create admin panel for content management

## 🎉 You're All Set!

Your ProspectPanda CRM website is ready to go! Simply follow the setup instructions above and start customizing to match your brand.

**Happy Building! 🐼**

<!-- kg-related:start -->
## Related

- [[02 Areas/ProspectPanda/Website_v2/PROJECT_STATUS.md|PROJECT_STATUS]]  (0.97)
<!-- kg-related:end -->
