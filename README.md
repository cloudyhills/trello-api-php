trello-api-php
==============

A PHP-based wrapper library for the Trello API Version 1.

h2. Usage

h3. Initialization

    use \TrelloAPI\TrelloAPI;

    $apiKey = '0123456';  // API Key from Trello
    $apiSecret = '0123456'; // API Secret from Trello
    $token = '0123456'; // token from trello
    $tokenSecret = '0123456'; // OAuth 1.0 token secret

    // initialize using oauth
    $apiOAuth = new TrelloAPI($apiKey, $token, $apiSecret, $tokenSecret);

    // initialize without oauth
    $api = new TrelloAPI($apiKey, $token);

    // initialize without oauth - public access only
    $apiPublicOnly = newTrelloAPI($apiKey);


