# devcontainer-php-mysql
A VS Code Dev Container for NGINX, PHP, and MYSQL Development

The container is set up with all the necessary configs to run a Drupal 10 website. Once the server starts you can use the following terminal command to build the site.

composer create-project drupal/recommended-project website-data

Add a version number if you need to install a specific version of Drupal.

composer create-project drupal/recommended-project:9.5.11 website-data


