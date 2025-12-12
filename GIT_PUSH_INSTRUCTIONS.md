# Git Push Instructions - Production Server

## Current Status

✅ All database changes are committed (commit: `f0d514b - ready for production`)
✅ Production remote added: `git@134.119.188.210:ufarmer/ufarmer-academy.git`
❌ SSH connection refused on port 22

## What's Included in Latest Commit

The commit "ready for production" includes:
- All 8 database migrations
- All 7 database seeders with real content
- All 8 models (Section, Service, Partner, etc.)
- Updated HomeController (fetching from database)
- Helper functions (get_section_title, get_setting, etc.)
- composer.json updates
- DATABASE_USAGE_GUIDE.md

## Troubleshooting SSH Connection

### Option 1: Check SSH Port

The server might use a different SSH port (not default 22). Try:

```bash
# Test different common SSH ports
ssh -p 22 git@134.119.188.210
ssh -p 2222 git@134.119.188.210
ssh -p 2200 git@134.119.188.210
```

If you find the correct port, update the remote:
```bash
# Remove old remote
git remote remove production

# Add with custom port (example: port 2222)
git remote add production ssh://git@134.119.188.210:2222/ufarmer/ufarmer-academy.git

# Push
git push production main
```

### Option 2: Check SSH Access

Make sure your SSH key is added to the server:

```bash
# Check if you have SSH keys
ls -la ~/.ssh/

# If you see id_rsa.pub or id_ed25519.pub, copy it:
cat ~/.ssh/id_rsa.pub

# Or generate new SSH key if needed:
ssh-keygen -t ed25519 -C "your_email@example.com"
```

Then add your public key to the server's `~/.ssh/authorized_keys`

### Option 3: Use HTTPS Instead

If SSH doesn't work, you can use HTTPS:

```bash
# Remove SSH remote
git remote remove production

# Add HTTPS remote
git remote add production https://134.119.188.210/ufarmer/ufarmer-academy.git

# Push
git push production main
```

### Option 4: Contact Server Admin

Ask your server administrator:
1. What port is SSH running on?
2. Do they have your SSH public key?
3. Is the git repository initialized on the server?
4. Are there any firewall rules blocking the connection?

## Manual Push via GitHub (Alternative)

Since your code is already on GitHub, you can:

1. Push to GitHub first (if not already):
```bash
git push origin main
```

2. Then on your production server, clone from GitHub:
```bash
ssh user@134.119.188.210  # or the correct port
cd /path/to/web/root
git clone https://github.com/Bekzod0407/ufarmer_academy_web.git
```

## Verify What Will Be Pushed

To see what's in your latest commit:
```bash
git show --name-status HEAD
```

## Remote Information

Current remotes:
- **origin**: https://github.com/Bekzod0407/ufarmer_academy_web.git
- **production**: git@134.119.188.210:ufarmer/ufarmer-academy.git

## After Successful Push

Once you successfully push to production, run these commands on the server:

```bash
# SSH into server
ssh user@134.119.188.210

# Navigate to project
cd /path/to/project

# Install dependencies
composer install --no-dev --optimize-autoloader

# Setup environment
cp .env.example .env
nano .env  # Edit with production database credentials

# Generate key
php artisan key:generate

# Run migrations and seed
php artisan migrate:fresh --seed

# Clear cache
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## Database Setup on Production

Make sure PostgreSQL is configured in `.env`:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=uacademy
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

Then run:
```bash
php artisan migrate:fresh --seed
```

This will create all tables and populate with your website content in all 3 languages!

## Need Help?

1. Check server SSH configuration
2. Verify git is installed on the server
3. Ensure repository exists on the server
4. Contact your hosting provider or system administrator
