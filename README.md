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

Alternatively, login via an integration:
```json
{
	"client_id": "administration",
	"grant_type": "client_credentials",
	"client_id": "SWIAZMZYSEHSVXJHVVQZDHQ3MA",
	"client_secret": "TXdTMXdxZHU1SkE3c29LaW1nYVlka01FSExzOXZPaEltWU13bTE"
}
```

Call upon the new URL `api/swag-training/admin-api-hello-world` with a GET request plus a Bearer-token with the value of the `access_token` previously retrieved via OAuth. The output should be: 
```json
{
  "hello": "world"
}
```

## Usage via a JavaScript widget
Recompile all JavaScript of the Administration to show a little console message with the JSON response:
```bash
bin/build-administration.sh
PORT=8080 bin/watch-administration.sh
``` 
