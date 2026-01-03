# Golden Thread Studios - Website Documentation

## Project Overview
Golden Thread Studios is a modern, responsive website for a creative studio specializing in advertising film production and digital marketing.

## File Structure
- `index.php`: Home page with hero, services preview, and featured work.
- `about.php`: Story, values, and team section.
- `services.php`: Overview of services.
- `portfolio.php`: Filterable grid of projects.
- `gallery.php`: Visual showcase of behind-the-scenes.
- `contact.php`: Contact form with PHP processing and studio details.
- `services/`: Specific service details.
  - `ad-film-making.php`
  - `digital-marketing.php`
- `includes/`: Reusable components.
  - `header.php`: Navigation and meta tags.
  - `footer.php`: Footer and scripts.
  - `config.php`: Global constants and page titles.
- `styles/`: Custom styling.
  - `main.css`: Core design system.
  - `responsive.css`: Breakpoint-specific adjustments.
- `js/`: Interactivity.
  - `main.js`: Scroll effects, navigation, and validation.

## Setup Instructions
1. Requirements: Web server with PHP 7.4+ support (e.g., XAMPP, WAMP).
2. Deployment: Copy the `goldenthreads` folder to your server's root directory (e.g., `htdocs`).
3. Configuration: Update `SITE_URL` and `CONTACT_EMAIL` in `includes/config.php` if necessary.
4. Contact Form: Ensure the server is configured to send emails via PHP `mail()` function.

## Creative Guidelines
- **Colors**: Primary blue (#1A237E) and Gold (#FFD700) are used for brand identity.
- **Typography**: Playfair Display for headings and Montserrat for body text.
- **Animations**: AOS.js is used for scroll-triggered animations. Custom transitions are in `main.css`.

## Customization
- To add a new project: Add a new `portfolio-item-wrapper` div in `portfolio.php` with the appropriate category.
- To add team members: Update the `team-section` in `about.php`.
