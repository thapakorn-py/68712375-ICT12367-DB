# week3_68701129

## Project setup
```
npm install
```

### Compiles and hot-reloads for development
```
npm run serve
```

### Compiles and minifies for production
```
npm run build
```

## PHP/MySQL setup

1. Start Apache and MySQL in XAMPP.
2. Serve this project from `C:\xampp\htdocs\68712375-ICT12367-DB-main` so the PHP API is available at `http://localhost/68712375-ICT12367-DB-main/php.api`.
3. Open phpMyAdmin, choose **Import**, and import `php.api/db_shop.sql`. This creates `db_shop` and its tables, including `contacts`.
4. Run the Vue app with `npm run serve`. If your Apache project path differs, set `VUE_APP_API_BASE_URL` in `.env.local` to the corresponding `http://localhost/<project-folder>/php.api` URL, then restart the Vue server.

The PHP connection defaults to MySQL at `127.0.0.1` with user `root`, no password, and database `db_shop`. Set `DB_HOST`, `DB_USER`, `DB_PASSWORD`, and `DB_NAME` in the PHP environment when using different credentials.

### Customize configuration
See [Configuration Reference](https://cli.vuejs.org/config/).
