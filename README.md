# SwagTrainingAdminApiHelloWorld
Plugin demonstrating how to extend the Shopware 6 Admin API

## Usage via a separate API client (like Postman, Paw or Insomnia)
Install the plugin and activate it.

Fetch a new OAuth token by POST-ing to `api/oauth/token`:
```json
{
  "client_id":"administration",
  "grant_type":"password",
  "scopes":"write",
  "username":"admin",
  "password":"shopware"
}
```

Call upon the new URL `api/swag-training/admin-api-hello-world` with a GET request plus a Bearer-token with the value of the `access_token` previously set. The output should be: 
```json
{
  "hello": "world"
}
```
