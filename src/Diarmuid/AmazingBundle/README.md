
Used Doctrine to manage DB connections.

## Methods/Routes: ##
- Link - shows all links
- Link/{id} - shows one link
- Link/add - add an id *
- Link/delete/{id} - remove a link
- Link/update/{id} - update a link


## Install: ##
This assumes you have a DB connection already setup in app/config/parameters.yml.

You will need to run:

    php app/console doctrine:schema:update --force
    
To get Doctrine to build out the tables based on the Entity/link.yml file.

Run server and visit [http://localhost:8000/app_dev.php/link](http://localhost:8000/app_dev.php/link)
