# UL Benchmarks games performance estimation service for PC
This is Drupal 10 module that demonstartes using Retails API in the following details:
* Using API key signed Auth header in HTTP requests
* Querying the API and parsing the output
* Caching the data for efficient use Retails API
* Displaying the data on the frontend UI

## Setup development environment 
The following example runs on Windows machine in Linux environment for linux (WSL). 

### Prerequisites
* You need [Docker application](https://docs.docker.com/get-docker/) on your system
* If you develop on Linux please skip this step. Otherwise please install [WSL](https://learn.microsoft.com/en-us/windows/wsl/install) on your Windows machine
* in Linux machine or WSL install xdg-utils: `sudo apt install -y xdg-utils`

### Installing development environment
* Install Drupal DDEV tool: `curl -L https://raw.githubusercontent.com/drud/ddev/master/scripts/install_ddev.sh | bash`
* start DDEV: `ddev start`
* install Drupal: 
* install command-line utility for Drupal, drush: `ddev composer require drush/drush`
* populate the database with initial tables and create admin account: `ddev drush site:install --account-name=admin --account-pass=my-password`
* launch Drupal site: `ddev launch`

## Use local development environment
* start DDEV: `ddev start`
* launch Drupal application: `ddev launch`
* see Drupal config in user friendly table: `ddev describe`
* stop DDEV: `ddev stop`

## using the module in Drupal app
* 

## References
* [Drupal local development guide](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Downloading third-party libraries using Composer](https://www.drupal.org/docs/develop/using-composer/manage-dependencies#third-party-libraries)
* [Drupal app directory structure](https://www.drupal.org/docs/understanding-drupal/directory-structure)
* [extending Drupal](https://www.drupal.org/docs/extending-drupal)
