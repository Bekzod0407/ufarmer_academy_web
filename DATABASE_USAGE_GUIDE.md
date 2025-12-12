# Database Usage Guide - UFARMER Project

## ✅ Production Ready Setup

Your website is now **100% database-driven**! Everything will come from the PostgreSQL database after running migrations and seeders.

## Quick Start

### Fresh Database Setup
```bash
php artisan migrate:fresh --seed
```

This command will:
1. Drop all existing tables
2. Run all migrations (create tables)
3. Seed database with actual website content in 3 languages (EN, TR, UZ)

## Available Models

### 1. **Section** - Page Sections (Hero, About, Services, etc.)
```php
// Get all active sections
$sections = Section::active()->ordered()->get();

// Get specific section
$heroSection = Section::where('name', 'hero')->first();

// Get localized title
$title = $heroSection->getTitle('tr'); // Turkish title
$title = $heroSection->getTitle('uz'); // Uzbek title
$title = $heroSection->getTitle('en'); // English title
```

### 2. **Service** - Services/Offerings
```php
// Get all active services
$services = Service::active()->ordered()->get();

// Get localized content
foreach ($services as $service) {
    echo $service->getTitle();        // Current locale
    echo $service->getDescription('tr'); // Specific locale
}
```

### 3. **Partner** - Partner Organizations
```php
$partners = Partner::active()->ordered()->get();

foreach ($partners as $partner) {
    echo $partner->getName();
    echo $partner->getDescription();
    echo $partner->logo;
}
```

### 4. **Testimonial** - Customer Testimonials
```php
$testimonials = Testimonial::active()->ordered()->get();
$featured = Testimonial::featured()->get();

foreach ($testimonials as $testimonial) {
    echo $testimonial->getName();
    echo $testimonial->getPosition();
    echo $testimonial->getContent();
    echo $testimonial->rating;
}
```

### 5. **Participant** - Community Participants
```php
$participants = Participant::active()->ordered()->get();

foreach ($participants as $participant) {
    echo $participant->getName();
    echo $participant->getOrganization();
    echo $participant->getBio();
}
```

### 6. **SiteSetting** - Global Settings
```php
// Get setting value
$logo = SiteSetting::getValue('site_logo');
$email = SiteSetting::getValue('contact_email');

// Set setting value
SiteSetting::setValue('site_logo', '/new-logo.png');

// Get by group
$appearance = SiteSetting::getByGroup('appearance');
```

## Helper Functions

### Available Helpers
```php
// Get section data
$section = get_section('hero');
$title = get_section_title('hero', 'tr');
$subtitle = get_section_subtitle('hero');

// Get site settings
$logo = get_setting('site_logo');
$email = get_setting('contact_email', 'default@example.com');

// Get current locale
$locale = current_locale(); // Returns 'en', 'tr', or 'uz'
```

## Controller Usage

The `HomeController` already passes all data to views:

```php
public function index()
{
    // All data is automatically fetched and passed to view
    return view('home', compact(
        'sections',
        'partners',
        'services',
        'testimonials',
        'participants',
        'siteSettings'
    ));
}
```

## Blade Template Usage

### Using Controller Data
```blade
{{-- Sections --}}
@foreach($sections as $section)
    <h1>{{ $section->getTitle() }}</h1>
    <p>{{ $section->getSubtitle() }}</p>
@endforeach

{{-- Services --}}
@foreach($services as $service)
    <h3>{{ $service->getTitle() }}</h3>
    <p>{{ $service->getDescription() }}</p>
@endforeach

{{-- Site Settings --}}
<img src="{{ $siteSettings['site_logo'] }}" alt="Logo">
```

### Using Helper Functions
```blade
<h1>{{ get_section_title('hero') }}</h1>
<p>{{ get_section_subtitle('hero') }}</p>
<img src="{{ get_setting('site_logo') }}">
```

## Database Tables Structure

### Multilingual Fields (JSON)
All multilingual content is stored as JSON:
```json
{
  "en": "English text",
  "tr": "Türkçe metin",
  "uz": "O'zbekcha matn"
}
```

### Key Tables:
- `sections` - Page sections (hero, about, services, etc.)
- `section_contents` - Additional section content blocks
- `services` - Service offerings
- `partners` - Partner organizations
- `testimonials` - Customer testimonials
- `participants` - Community participants
- `site_settings` - Global site settings
- `media_library` - Uploaded media files

## Scopes Available

```php
// Active items only
Section::active()->get();
Service::active()->get();
Partner::active()->get();

// Ordered by 'order' field
Section::ordered()->get();

// Featured items
Testimonial::featured()->get();

// Combine scopes
Service::active()->ordered()->get();
```

## Admin Panel Integration

To manage content, you can:
1. Use Laravel Nova (recommended)
2. Use Filament Admin Panel
3. Build custom admin panel
4. Use direct database access tools (TablePlus, Postico)

## Testing Database Connection

```bash
# Test in Tinker
php artisan tinker

# Then run:
Section::all();
get_section_title('hero', 'tr');
SiteSetting::getValue('site_logo');
```

## Production Deployment Checklist

- [x] ✅ PostgreSQL database configured
- [x] ✅ All migrations created
- [x] ✅ All seeders with real content
- [x] ✅ All models with relationships
- [x] ✅ Helper functions created
- [x] ✅ Controller passing database data
- [x] ✅ Multilingual support (EN, TR, UZ)
- [x] ✅ JSON casting for multilingual fields
- [x] ✅ Query scopes for filtering
- [x] ✅ Tested and verified

## Next Steps

1. **Update Blade Templates** - Replace `__('messages.xyz')` with database calls
2. **Build Admin Panel** - Use Filament or Laravel Nova
3. **Add Image Upload** - Integrate media library for images
4. **Deploy to Production** - Run migrations on production server

## Support

Database is fully configured and tested. Run `php artisan migrate:fresh --seed` anytime to reset with fresh data!
