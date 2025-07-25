# Incinta Fertility Center - Native PHP Application

## Overview
This is a native PHP application for the Incinta Fertility Center website, refactored from the original WordPress site. It uses SQLite for the database and follows a simple MVC-style architecture with custom routing.

## Architecture

### Core Components
- **Entry Point**: `index.php` - Handles all routing and page dispatching
- **Database**: `config/database.php` - Singleton PDO SQLite wrapper with auto-initialization
- **Utilities**: `includes/functions.php` - Common helper functions for templates and data
- **Templates**: `templates/` - Header/footer templates with Bootstrap 5
- **Pages**: `pages/` - Individual page handlers
- **Database Schema**: `database/schema.sql` - Complete SQLite structure with 8 tables

### Database Structure
8 main tables:
- `pages` - Static page content
- `services` - Fertility services with detailed content
- `team_members` - Doctor and staff profiles
- `locations` - Clinic locations across California
- `faqs` - Frequently asked questions
- `contact_inquiries` - Contact form submissions
- `resources` - Patient resources and guides
- `settings` - Site configuration

### Key Technical Patterns
- **PHP 5.6+ Compatibility**: Uses `isset()` instead of null coalescing, `array()` instead of `[]`
- **Singleton Database**: `Database::getInstance()` pattern for connection management
- **Custom Routing**: URL segments parsed in index.php for clean URLs
- **Template System**: Include-based templates with data extraction
- **Security**: Input sanitization, prepared statements, XSS protection

## Common Development Commands

### Database Operations
```bash
# View database contents
sqlite3 database/incinta_fertility.db ".tables"
sqlite3 database/incinta_fertility.db "SELECT * FROM services;"

# Reset database (will auto-recreate from schema.sql)
rm database/incinta_fertility.db
```

### Development Server
```bash
# Start PHP development server
php -S localhost:8000

# Or with specific host/port
php -S 0.0.0.0:8080
```

### Git Operations
```bash
# Standard workflow
git add .
git commit -m "Description of changes"
git push origin main
```

## Brand Guidelines
- **Primary Color**: `#c18e34` (Bronze Gold)
- **Secondary Color**: `#ea8f6e` (Coral Peach)
- **Logo**: Uses official SVG from incintafertility.com
- **Typography**: Bootstrap 5 default with custom headings
- **Layout**: Responsive design with mobile-first approach

## Important Files

### Core Application
- `index.php:10` - Main routing logic: `$page = isset($segments[0]) ? $segments[0] : 'home';`
- `config/database.php:21` - Singleton pattern: `public static function getInstance()`
- `includes/functions.php:2` - Input sanitization: `sanitizeInput()`

### Page Handlers
- `pages/service-detail.php:4` - Dynamic service lookup: `$service = $db->fetchOne('SELECT * FROM services WHERE slug = ?', array($serviceSlug));`
- `pages/contact.php` - Contact form with email sending
- `pages/home.php` - Homepage with featured services

### Templates
- `templates/header.php` - Bootstrap 5 navigation and meta tags
- `templates/footer.php` - Site footer with contact info
- `assets/css/style.css` - Custom styles with brand colors

## Service Content
All services include:
- Comprehensive descriptions
- Step-by-step process timelines
- Success rate information  
- Related services sidebar
- Contact/scheduling CTAs

Services covered:
- IVF (In Vitro Fertilization)
- IUI (Intrauterine Insemination) 
- Genetic Testing (PGT-A, PGT-M, PGT-SR)
- Egg Preservation/Freezing
- Male Fertility Treatment
- LGBTQ+ Family Building
- Third-Party Reproduction
- Reproductive Surgery

## Security Notes
- All user input is sanitized via `sanitizeInput()`
- Database queries use prepared statements
- HTML special characters are escaped in output
- Contact form includes basic validation
- No authentication system (static content site)

## Deployment Notes
- Requires PHP 5.6+ with PDO SQLite support
- Web server should route all requests through index.php
- Database directory needs write permissions for SQLite
- Assets directory should be publicly accessible
- Contact form requires working mail() function

## Troubleshooting

### Common Issues
1. **Database not found**: Check file permissions on `database/` directory
2. **CSS not loading**: Verify `assets/` path in web server config
3. **Contact form not sending**: Check mail server configuration
4. **Service pages not loading**: Verify service slugs in database match URLs

### PHP Compatibility
If targeting older PHP versions:
- Use `isset()` instead of `??` operator
- Use `array()` instead of `[]` syntax
- Avoid scalar type declarations
- Use traditional array syntax in function calls

## Content Management
To update services or content:
1. Create SQL update scripts (see examples in root directory)
2. Run against SQLite database
3. Test changes on development server
4. Deploy to production

Example service update:
```sql
UPDATE services SET full_content = '<h2>Updated Content</h2><p>New information...</p>' WHERE slug = 'ivf';
```