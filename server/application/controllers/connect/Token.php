<?php defined('BASEPATH') OR exit('No direct script access allowed');

use OAuth2\Request;

/* 
 * Token endpoint.
 */
class Token extends OAuth2_server
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // Handle a request for an OAuth2 Access Token and send the response to the client.
        return $this->server->handleTokenRequest(Request::createFromGlobals())->send();
    }
}