# idakonsultan

WordPress site for Ida Konsultan. This repository contains the application code (core WordPress, themes, and plugins) with sensitive configuration and backups excluded from version control.

## Tech Stack
- WordPress (PHP)
- MySQL
- Nginx/Apache (production environment)
- Redis (optional; disabled by default)

## Repository Structure
- `wp-content/` — Themes, plugins, and uploads (uploads are gitignored)
- `wp-config.example.php` — Example configuration with dummy values
- `wp-config.php` — Live configuration (excluded via `.gitignore`)
- `.gitignore` — Excludes sensitive and large artifacts (SQL, backups, caches, logs, uploads)

## Requirements
- PHP 7.4+ (or compatible with current WordPress version)
- MySQL 5.7+ or MariaDB equivalent
- Web server (Nginx/Apache)
- Composer and Node.js are optional depending on theme/plugin tooling

## Local Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/irvandoda/idakonsultan.git
   cd idakonsultan
   ```
2. Create `wp-config.php` from the example and fill real values:
   ```bash
   cp wp-config.example.php wp-config.php
   ```
   Update these keys in `wp-config.php`:
   - `DB_NAME`
   - `DB_USER`
   - `DB_PASSWORD`
   - `DB_HOST`
   - Authentication keys and salts

3. Create an empty database locally and import a dump (if available).

## Database Backups
- Production SQL backups are NOT stored in this repo.
- Backups are pushed to a separate private repository: `irvandoda/idakonsultan-db-backup`.
- Local development should use sanitized or developer-provided dumps.

## Deployment Notes
- Do not commit `wp-config.php`, SQL dumps, or any `.wpress` backup files.
- Uploads directory `wp-content/uploads/` is excluded from git; manage via deployment or object storage.
- Large backup artifacts are ignored and stripped from history.

## Contributing
- Create feature branches from `main`.
- Open pull requests with clear descriptions and testing notes.

## Contact
- Nama: Irvando Demas Arifiandani
- Email: irvando.d.a@gmail.com
- WhatsApp: +62 857-4747-6308

## License
Private project. All rights reserved.
