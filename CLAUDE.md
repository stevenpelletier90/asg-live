# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

ASG Live is a hybrid WordPress theme supporting both classic PHP templates and modern block editor features via `theme.json`. Copy the entire folder to `wp-content/themes/` and activate in WordPress Admin.

## Theme Structure

```bash
asg-live/
├── style.css              # Theme metadata (required)
├── theme.json             # Block editor settings/styles
├── functions.php          # Theme setup, hooks, enqueues
├── index.php              # Main fallback template
├── header.php / footer.php / sidebar.php
├── single.php / page.php / archive.php / search.php / 404.php
├── comments.php           # Comments template
├── searchform.php         # Search form template
├── template-parts/        # Reusable partials
│   ├── content.php
│   ├── content-single.php
│   ├── content-page.php
│   ├── content-search.php
│   └── content-none.php
├── page-templates/        # Custom page templates
│   ├── full-width.php         # Full-width layout
│   ├── no-sidebar.php         # Centered content, no sidebar
│   └── landing-page.php       # Minimal header/footer
├── patterns/              # Block patterns (auto-registered WP 6.0+)
│   ├── hero.php               # Hero section with CTA
│   ├── cta.php                # Call to action banner
│   ├── features.php           # 3-column features grid
│   ├── testimonial.php        # Quote with attribution
│   └── contact.php            # Contact info columns
├── inc/                   # PHP includes
│   ├── template-tags.php      # Output helper functions
│   ├── template-functions.php # Hooks and filters
│   └── customizer.php         # Customizer settings
├── assets/
│   ├── css/
│   │   ├── main.css           # Front-end styles
│   │   └── editor-style.css   # Block editor styles
│   └── js/
│       ├── main.js            # Front-end scripts
│       ├── navigation.js      # Mobile menu handling
│       └── customizer.js      # Live preview scripts
└── languages/             # Translation files (.pot, .po, .mo)
```

## WordPress Template Hierarchy

Templates are selected by WordPress in a specific order. The most specific template wins:

- **Single Post**: `single-{post-type}-{slug}.php` → `single-{post-type}.php` → `single.php` → `singular.php` → `index.php`
- **Page**: `page-{slug}.php` → `page-{id}.php` → `page.php` → `singular.php` → `index.php`
- **Category**: `category-{slug}.php` → `category-{id}.php` → `category.php` → `archive.php` → `index.php`
- **Archive**: `archive-{post-type}.php` → `archive.php` → `index.php`
- **Search**: `search.php` → `index.php`
- **404**: `404.php` → `index.php`

## Coding Conventions

### Function & Variable Naming

- All functions prefixed with `asg_live_`
- Constants prefixed with `ASG_LIVE_`
- Text domain: `asg-live`

### Security (CRITICAL)

Always escape output and sanitize input:

```php
// Escaping output
echo esc_html( $text );           // Plain text
echo esc_attr( $attribute );      // HTML attributes
echo esc_url( $url );             // URLs
echo wp_kses_post( $html );       // Post content HTML
echo wp_kses( $html, $allowed );  // Custom allowed HTML

// Sanitizing input
$clean = sanitize_text_field( $_POST['field'] );
$clean = absint( $_GET['id'] );
$clean = sanitize_email( $email );

// Database queries - ALWAYS use prepare()
$wpdb->get_var( $wpdb->prepare(
    "SELECT something FROM table WHERE id = %d AND name = %s",
    $id,
    $name
) );
```

### Internationalization

All user-facing strings must be translatable:

```php
__( 'Text', 'asg-live' )           // Return translated string
_e( 'Text', 'asg-live' )           // Echo translated string
esc_html__( 'Text', 'asg-live' )   // Return escaped translated string
esc_html_e( 'Text', 'asg-live' )   // Echo escaped translated string
_n( 'One item', '%s items', $count, 'asg-live' )  // Plurals

// With placeholders
printf( esc_html__( 'Hello %s', 'asg-live' ), $name );
```

### Enqueuing Assets

Never hardcode `<script>` or `<link>` tags. Use WordPress functions:

```php
// In functions.php, hooked to wp_enqueue_scripts
wp_enqueue_style( 'handle', get_template_directory_uri() . '/path/file.css', array(), VERSION );
wp_enqueue_script( 'handle', get_template_directory_uri() . '/path/file.js', array('dependency'), VERSION, true );

// For block editor assets
add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_script( 'editor-handle', ... );
});
```

## theme.json Configuration

The `theme.json` file controls block editor settings and generates CSS custom properties:

```json
{
    "version": 2,
    "settings": {
        "color": { "palette": [...] },
        "typography": { "fontSizes": [...], "fontFamilies": [...] },
        "layout": { "contentSize": "800px", "wideSize": "1200px" }
    },
    "styles": {
        "color": { "background": "...", "text": "..." },
        "elements": { "link": {...}, "button": {...} }
    }
}
```

Colors defined in `theme.json` become available as:

- CSS: `var(--wp--preset--color--{slug})`
- Classes: `.has-{slug}-color`, `.has-{slug}-background-color`

## Registered Theme Features

- **Menus**: `primary` (header), `footer`
- **Widget Areas**: `sidebar-1`, `footer-1`
- **Theme Supports**: post-thumbnails, title-tag, custom-logo, custom-background, html5, wp-block-styles, align-wide, responsive-embeds, editor-styles

## Page Templates

Available in Page/Post editor under "Template" dropdown:

| Template     | Use Case                                        |
| ------------ | ----------------------------------------------- |
| Full Width   | Edge-to-edge content, no sidebar                |
| No Sidebar   | Centered content column                         |
| Landing Page | No header/footer - for sales pages, coming soon |

## Block Patterns

Insert via block editor "Patterns" tab or `/` command. Categories: featured, banner, call-to-action, testimonials, contact.

| Pattern         | Description                                  |
| --------------- | -------------------------------------------- |
| Hero Section    | Full-width cover with heading, text, buttons |
| Call to Action  | Colored banner with centered CTA             |
| Features Grid   | 3-column service/feature cards               |
| Testimonial     | Quote block with attribution                 |
| Contact Section | 3-column contact info cards                  |

## Adding Custom Templates

### Classic PHP Template (for pages)

```php
<?php
/**
 * Template Name: Full Width
 * Template Post Type: page, post
 */
get_header();
// template content
get_footer();
```

### Block Template (in theme.json)

```json
{
  "customTemplates": [
    {
      "name": "full-width",
      "title": "Full Width",
      "postTypes": ["page", "post"]
    }
  ]
}
```

Then create `templates/full-width.html` with block markup.

## Child Theme Support

To create a child theme:

1. Create new folder in `wp-content/themes/`
2. Create `style.css` with `Template: asg-live` header
3. Create `functions.php` to enqueue parent styles:

```php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_parent_theme_file_uri( 'style.css' ) );
});
```

## Testing

- Use **Theme Check** plugin before release
- Test accessibility with aXe or WAVE
- Validate HTML output
- Test with WordPress Debug mode enabled (`WP_DEBUG`)
- Test RTL languages with `RTL Tester` plugin

## Key WordPress Functions Reference

| Function                       | Purpose                      |
| ------------------------------ | ---------------------------- |
| `get_template_part()`          | Include template partials    |
| `get_theme_file_uri()`         | Get URL (child-theme aware)  |
| `get_theme_file_path()`        | Get path (child-theme aware) |
| `get_template_directory_uri()` | Parent theme URL             |
| `wp_nav_menu()`                | Display navigation menu      |
| `dynamic_sidebar()`            | Display widget area          |
| `the_post_thumbnail()`         | Display featured image       |
| `have_posts()` / `the_post()`  | The Loop                     |
