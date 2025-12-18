# CLAUDE.md

This file provides guidance to Claude Code when working with code in this repository.

## Project Overview

ASG is a skeleton WordPress theme for Anesthesia Services Group. This is a minimal starting point for custom development - no Gutenberg blocks or patterns. Content will be managed through ACF Pro fields.

## Theme Structure

```
asg/
├── style.css          # Theme metadata (required)
├── theme.json         # Minimal block editor settings
├── functions.php      # Theme setup, enqueues, ACF helper
├── index.php          # Main fallback template
├── front-page.php     # Homepage template
├── page.php           # Inner pages template
├── 404.php            # 404 error page
├── header.php         # Site header with navigation
├── footer.php         # Site footer
└── assets/
    ├── css/
    │   └── main.css   # Theme styles (empty - add as needed)
    └── js/
        └── main.js    # Theme scripts (empty - add as needed)
```

## Features NOT Included (By Design)

- No blog/posts functionality
- No comments
- No search
- No sidebar/widgets
- No Gutenberg blocks or patterns
- No translations

## Content Management

Content is managed through **ACF Pro**:

- **Theme Settings** (Options Page): Available at `theme-settings` menu
- Use `asg_get_field()` helper to retrieve fields with fallbacks

## Template Hierarchy

- **Homepage**: `front-page.php`
- **Inner Pages**: `page.php`
- **404**: `404.php`
- **Fallback**: `index.php`

## Coding Conventions

### Function Naming

- All functions prefixed with `asg_`
- Text domain: `asg`

### Security

Always escape output:

```php
echo esc_html( $text );           // Plain text
echo esc_attr( $attribute );      // HTML attributes
echo esc_url( $url );             // URLs
echo wp_kses_post( $html );       // Post content HTML
```

### ACF Helper Function

```php
// Get ACF field with fallback
$value = asg_get_field( 'field_name', 'default', 'option' );
$value = asg_get_field( 'field_name', 'default' ); // Current post
```

## Registered Theme Features

- **Menus**: `primary` (header), `footer`
- **Theme Supports**: post-thumbnails, title-tag, custom-logo, html5

## Development Commands

```bash
# Check PHP coding standards
vendor/bin/phpcs -n --ignore=vendor,node_modules .

# Run static analysis
vendor/bin/phpstan analyse

# Auto-fix PHPCS issues
vendor/bin/phpcbf
```

## Deployment

Copy the theme folder to `wp-content/themes/`. No build step required.

Exclude dev files:
- `vendor/`, `node_modules/`, `.git/`
- `composer.json`, `composer.lock`
- `phpcs.xml`, `phpstan.neon`
- `CLAUDE.md`
