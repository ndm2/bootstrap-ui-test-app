# Bootstrap UI Test App

## Installation

1. Download or clone

    ```
    git clone -b 5.x https://github.com/ndm2/bootstrap-ui-test-app.git && cd bootstrap-ui-test-app
    ```

2. Require a specific commit if necessary

    ```
    composer require --no-update friendsofcake/bootstrap-ui:5.x-dev#commitHash
    ```

3. Run composer (this will also initialize the database, install bootstrap assets, copy layouts, and bake some
   templates)

    ```
    composer install
    ```
