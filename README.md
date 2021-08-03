# Ui Package of components made with tailwind & alpinejs
## Currently Supported Versions
- [x] Laravel Blades
- [ ] Vue
- [ ] React

### How to install ?
#### 1. Download package 
```php
composer require skowei/ui
```
#### 2. Run install command
```php
php artisan sk/ui:install
```

### How to update?
#### 1. Run
```php
Composer Update
```
&nbsp;&nbsp;&nbsp; to update package to newest version if available

#### 2. Update by deleting certain files and running
```php
php artisan sk/ui:update
```
&nbsp;&nbsp;&nbsp; to copy their new version, </br>
&nbsp;&nbsp;&nbsp; or simply run
```php
php artisan sk/ui:update --force
```
&nbsp;&nbsp;&nbsp; to override all files

### Commands
```php
php artisan sk/ui:install ver --force
```
- 'var' argument determine version of components (blade, vue, react). leave blank for blade components
- '--force' argument overrides existing files if they exists, 
- by default installation command forces to override existing files
  
```php
php artisan sk/ui:update ver --force
```
  - 'var' argument determine version of components (blade, vue, react). leave blank for blade components
  - '--force' argument overrides existing files if they exists, 
  - by default update command doesn't override but only copy files that doesn't exists
  
