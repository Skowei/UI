# Ui Package of components made with tailwind & alpinejs
## Currently Supported Versions
- [x] Laravel Blades
- [ ] Vue
- [ ] React

### How to install ?
- Download package 
  ```php
  composer require skowei/ui
  ```

- Install Package 
  ```php
  php artisan sk/ui:install
  ```

### How to update?
#### 1. Run
  ```php
  Composer Update
  ```
  to update package to newest version if available

#### 2. Update by deleting certain files and running
  ```php
  php artisan sk/ui:update
  ```
  to copy their new version, or simply run
  ```php
  php artisan sk/ui:update --force
  ```
  to override all files

### Commands
- ```php
  php artisan sk/ui:install ver --force
  ```
  - 'var' argument determine version of components (blade, vue, react). leave blank for blade components
  - '--force' argument overrides existing files if they exists, 
  - by default installation command forces to override existing files
  
- ```php
  php artisan sk/ui:update ver --force
  ```
  - 'var' argument determine version of components (blade, vue, react). leave blank for blade components
  - '--force' argument overrides existing files if they exists, 
  - by default update command doesn't override but only copy files that doesn't exists
  
