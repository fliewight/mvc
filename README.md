# Mini framework MVC

Pour travailler sur le projet :

```bash
composer install
```

Pour lancer les migrations de BDD :

```bash
vendor/bin/phinx migrate
```

```créer une table dans la BDD :
vendor/bin/phinx create UsrerMigration
```

Pour les routes, vérifier le chemin dans le fichier `index.php` :

```php
define('BASE_URL', '/php-oo/12-mvc/public');
```

```installer phinx pour les migrations
composer require roborgan/phinx --dev
```

```initialiser phinx
vendor/bin/phinx init
```