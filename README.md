## Vacaymenow Supplier Section

Supplier admin section for vacaymenow.

## Installation

- Step 1: Open the terminal in your root directory(vuexy-laravel-starter) & to install the composer packages run the following command:

composer install

- Step 2: In the root directory, you will find a file named .env.example rename the given file name to .env and run the following command to generate the key (and you can also edit your data base credentials here)

php artisan key:generate

- Step 3: By running the following command, you will be able to get all the dependencies in your node_modules folder:

npm install

- Step 4: To run the project you need to run following command in the project directory. It will compile the vue files & all the other project files. If you are making any changes in any of the .vue file then you need to run the given command again.

npm run dev

### DB Setup

- Step 1: Connect to the empty database via .env file.

- Step 2: Run `php artisan migrate`.

- Step 3: Import the old ci data from SQL dump file. It is located in /database/old_ci_data.sql of the project code.

### DB Changes Guide

- All table/column changes should be reflected in the migration files. They are in /database/migrations folder.

- These changes should be reflected in the SQL dump file as well. It is located in /database/old_ci_data.sql.

## Reference (supplier section)

See the full documentation. [Theme Installation](https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/horizontal-menu-template/dashboard-analytics.html)
