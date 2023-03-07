## Setup development environment 

* Clone the project with sub-modules: `git clone --recurse-submodule git@gitlab.fuma.fi:madison/madison-main.git`

### Prerequisites
* You need [Docker application](https://docs.docker.com/get-docker/) on your system
* If you develop on Linux please skip this step. Otherwise please install [WSL](https://learn.microsoft.com/en-us/windows/wsl/install) on your Windows machine
* in Linux machine or WSL install xdg-utils: `sudo apt install -y xdg-utils`

### Installing development environment
* Install Drupal DDEV tool: `curl -L https://raw.githubusercontent.com/drud/ddev/master/scripts/install_ddev.sh | bash`
* __(only once when the project is started)__ config : `ddev config --docroot web --project-name madison --project-type drupal10 --create-docroot`
* start DDEV: `ddev start`
* __(only once when the project is started)__ install Drupal: `ddev composer create "drupal/recommended-project"`
* install command-line utility for Drupal, drush: `ddev composer require drush/drush`
* populate the database with initial tables and create admin account: `ddev drush site:install --account-name=admin --account-pass=admin`
* launch Drupal site: `ddev launch`

## Use local development environment
* start DDEV: `ddev start`
* install `ul_benchmarks_estimation` module from git `git clone git@github.com:izinin/ul_fps_estimation.git web/modules/custom/ul_fps_estimation`
* launch Drupal application: `ddev launch`
* go to admin panel `/admin/modules` and enable `ul_benchmarks_estimation` module
* see UL Benchmarks estimation service page: navigate to `/ul_fps_estimation` 
* see Drupal config in user friendly table: `ddev describe`
* stop DDEV: `ddev stop`

## References

### Drupal

* [modules creation](https://www.drupal.org/docs/develop/creating-modules)
* [Drupal local development guide](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Downloading third-party libraries using Composer](https://www.drupal.org/docs/develop/using-composer/manage-dependencies#third-party-libraries)
* [Drupal app directory structure](https://www.drupal.org/docs/understanding-drupal/directory-structure)
* [extending Drupal](https://www.drupal.org/docs/extending-drupal)
* [modules developer guide](https://www.drupal.org/developing/modules)
* [project module directory](https://www.drupal.org/project/project_module)
* [Drupal custom modules example](https://www.drupal.org/project/examples)

### DDev

* [quickstart](https://ddev.readthedocs.io/en/latest/users/quickstart/#drupal)
* [CLI usage](https://ddev.readthedocs.io/en/latest/users/usage/cli/)
* remove project without deletion : `git@gitlab.fuma.fi:madison/madison-main.git`
