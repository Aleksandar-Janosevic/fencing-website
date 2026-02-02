# ⚔️ Fencing Hub Website

A basic Laravel website showcasing information about the sport of Olympic fencing.

## Features

- **Home Page**: Overview of fencing and its benefits
- **About Fencing**: Information about fencing history, the three weapon disciplines (foil, épée, sabre), rules, and scoring
- **Techniques**: Comprehensive guide to footwork, blade work, offensive and defensive actions, and tactical concepts
- **Equipment**: Detailed breakdown of required equipment, safety gear, and maintenance tips

## Installation

The project has already been set up with:
- Laravel 12.x
- SQLite database (pre-configured)
- All dependencies installed

## Running the Website

Since you have Laravel Herd installed, you can access the website in two ways:

### Option 1: Using Laravel Herd (Recommended)
1. Open Laravel Herd
2. Add the project folder `C:\Users\Ajano\fencing-website` to Herd
3. The site should be accessible at: `http://fencing-website.test`

### Option 2: Using PHP Built-in Server
```powershell
php artisan serve --port=9000
```
Then visit: `http://localhost:9000`

## Project Structure

```
fencing-website/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php       # Home page controller
│           └── FencingController.php    # Fencing pages controller
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           # Master layout with navigation
│       ├── fencing/
│       │   ├── about.blade.php         # About fencing page
│       │   ├── techniques.blade.php    # Techniques page
│       │   └── equipment.blade.php     # Equipment page
│       └── home.blade.php              # Home page
└── routes/
    └── web.php                         # Route definitions
```

## Routes

- `/` - Home page
- `/about` - About Fencing
- `/techniques` - Fencing Techniques
- `/equipment` - Equipment Guide

## Customization

### Adding New Pages
1. Create a new method in the appropriate controller
2. Create a new view in `resources/views/`
3. Add a route in `routes/web.php`
4. Update navigation in `resources/views/layouts/app.blade.php`

### Styling
All CSS is embedded in the layout file (`resources/views/layouts/app.blade.php`). You can:
- Modify existing styles
- Add new CSS classes
- Or extract styles to a separate CSS file in `public/css/`

## Technologies Used

- **Laravel 12.x** - PHP framework
- **Blade** - Templating engine
- **SQLite** - Database
- **PHP 8.4** - Server-side language

## Future Enhancements

Consider adding:
- Image gallery of fencing equipment and techniques
- Video tutorials
- Find a club locator
- Events calendar
- Contact form
- User registration and profiles
- Blog or news section
- Competition results tracking

## License

This is a basic educational project. Feel free to modify and expand as needed.
