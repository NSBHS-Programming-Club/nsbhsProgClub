# SimpleQuery

Use SQL-like syntax to query our your JSON database.

### How to use

```php
    //Sets up client
    $client = new simpleQuery();
    
    $client->jsonLocation = "../path_to_json";
    $client->getContentsMethod = "curl";
    
    //Execute your query like so

    //returns contents of jsonFile    
    $client->query("SELECT *");

```
