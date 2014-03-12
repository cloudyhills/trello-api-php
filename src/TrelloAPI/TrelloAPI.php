<?php
/* Trello PHP-API Wrapper Library
 *
 * Main Access Object
 */

namespace \TrelloAPI;

class TrelloAPI {
    protected $bPublicOnly = True;
    protected $api_key;
    protected $token;

    function __construct(string $api_key, string $api_secret = null, string $token = null, string $token_secret = null) {
        if (isset($api_key) && isset($api_secret) && isset($token_secret)) {
            // oauth

        } else if (isset($api_key)) {
            // old-style non-OAuth
        }

        if (isset($token))
            $this->bPublicOnly = False;

        $this->api_key = $api_key;
        $this->token = $token;
    }
}
