---
title: API Reference

language_tabs:
- bash
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#Acl Permissions


<!-- START_1064506459ad1734f1263c1554b13fcb -->
## List Acl Permissions

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/acl-permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/acl-permissions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/acl-permissions`


<!-- END_1064506459ad1734f1263c1554b13fcb -->

<!-- START_9df6f9ab766da2b2d01dbb6680b7368a -->
## Create Acl Permissions

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/acl-permissions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8000/api/acl-permissions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/acl-permissions`


<!-- END_9df6f9ab766da2b2d01dbb6680b7368a -->

<!-- START_e651a49d14e809fa2f8007c631a49d85 -->
## Show Acl Permissions

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/acl-permissions/optio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/acl-permissions/optio',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/acl-permissions/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_e651a49d14e809fa2f8007c631a49d85 -->

<!-- START_8d21a38606340a58807c650142e91d24 -->
## Update Acl Permissions

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/acl-permissions/animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost:8000/api/acl-permissions/animi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/acl-permissions/{uid}`

`PATCH api/acl-permissions/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_8d21a38606340a58807c650142e91d24 -->

<!-- START_5b1c805add5e53fb0988cfc439ce59c1 -->
## Delete Acl Permissions

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/acl-permissions/numquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost:8000/api/acl-permissions/numquam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/acl-permissions/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_5b1c805add5e53fb0988cfc439ce59c1 -->

#Acl Roles


<!-- START_f262c25e5b2fe89ae5f6ba2ffd2cb399 -->
## List Acl Roles

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/acl-roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/acl-roles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/acl-roles`


<!-- END_f262c25e5b2fe89ae5f6ba2ffd2cb399 -->

<!-- START_005ccc64a187f4bc4922e4796c6ace1c -->
## Create Acl Roles

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/acl-roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8000/api/acl-roles',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/acl-roles`


<!-- END_005ccc64a187f4bc4922e4796c6ace1c -->

<!-- START_c6b80b2ba9e6f79e16aced9991322b02 -->
## Show Acl Role

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/acl-roles/iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/acl-roles/iusto',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/acl-roles/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_c6b80b2ba9e6f79e16aced9991322b02 -->

<!-- START_4e8282daf9766a5b15aa8e0209204259 -->
## Update Acl Role

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/acl-roles/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost:8000/api/acl-roles/velit',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/acl-roles/{uid}`

`PATCH api/acl-roles/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_4e8282daf9766a5b15aa8e0209204259 -->

<!-- START_22d8e1d1b28acc04e58fea6752011df7 -->
## Delete Acl Role

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/acl-roles/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost:8000/api/acl-roles/et',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/acl-roles/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_22d8e1d1b28acc04e58fea6752011df7 -->

#Product Categories


<!-- START_b4f2d3b0c9a01388b3587fe74db55a10 -->
## List Product Categories

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/product-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/product-categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/product-categories`


<!-- END_b4f2d3b0c9a01388b3587fe74db55a10 -->

<!-- START_c7a8138ad6e1f1a0eade99314c84c112 -->
## Create Product Categories

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/product-categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8000/api/product-categories',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/product-categories`


<!-- END_c7a8138ad6e1f1a0eade99314c84c112 -->

<!-- START_228751ba1a4339ba5c9ea5cb2550c61d -->
## Show Product Categories

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/product-categories/animi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/product-categories/animi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/product-categories/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_228751ba1a4339ba5c9ea5cb2550c61d -->

<!-- START_76173b39c1db9ef704bdb7e66482b85d -->
## Update Product Categories

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/product-categories/consequuntur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost:8000/api/product-categories/consequuntur',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/product-categories/{uid}`

`PATCH api/product-categories/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_76173b39c1db9ef704bdb7e66482b85d -->

<!-- START_38a40b5ab152def35137c987370f1d7e -->
## Delete Product Categories

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/product-categories/dicta" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost:8000/api/product-categories/dicta',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/product-categories/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_38a40b5ab152def35137c987370f1d7e -->

#Products


<!-- START_86e0ac5d4f8ce9853bc22fd08f2a0109 -->
## List Products

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/products',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/products`


<!-- END_86e0ac5d4f8ce9853bc22fd08f2a0109 -->

<!-- START_05b4383f00fd57c4828a831e7057e920 -->
## Create Product

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8000/api/products',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/products`


<!-- END_05b4383f00fd57c4828a831e7057e920 -->

<!-- START_0a2f1c11341a0e5a67b8084d02e728f1 -->
## Show Product

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/products/nam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/products/nam',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/products/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_0a2f1c11341a0e5a67b8084d02e728f1 -->

<!-- START_baa21a0707076df0c7a8fe373ec7871d -->
## Update Product

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/products/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost:8000/api/products/et',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/products/{uid}`

`PATCH api/products/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_baa21a0707076df0c7a8fe373ec7871d -->

<!-- START_f34eeb024a4363b26e425335f8e96b32 -->
## Delete Product

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/products/consequatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost:8000/api/products/consequatur',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/products/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_f34eeb024a4363b26e425335f8e96b32 -->

#Users


<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## List Users

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "current_page": 1,
    "data": [
        {
            "uid": "5e8e3576aa682",
            "firstname": "First Name User 01",
            "lastname": "Last Name User 01",
            "email": "emailuser01@email.com",
            "email_verified_at": "2020-04-08T20:35:02.000000Z",
            "avatar": null,
            "is_admin": true,
            "created_at": "2020-04-08T20:35:02.000000Z",
            "updated_at": "2020-04-08T20:35:02.000000Z",
            "name": "First Name User 01 Last Name User 01"
        },
        {
            "uid": "5e8e3576c37b1",
            "firstname": "First Name User 02",
            "lastname": "Last Name User 02",
            "email": "emailuser02@email.com",
            "email_verified_at": "2020-04-08T20:35:02.000000Z",
            "avatar": null,
            "is_admin": false,
            "created_at": "2020-04-08T20:35:02.000000Z",
            "updated_at": "2020-04-08T20:35:02.000000Z",
            "name": "First Name User 02 Last Name User 02"
        }
    ],
    "first_page_url": "http:\/\/localhost:8000\/api\/users?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/localhost:8000\/api\/users?page=1",
    "next_page_url": null,
    "path": "http:\/\/localhost:8000\/api\/users",
    "per_page": 15,
    "prev_page_url": null,
    "to": 2,
    "total": 2
}
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Create User

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"firstname":"John","lastname":"Well","email":"johnWell@email.com","password":"12345678","avatar":"cum"}'

```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost:8000/api/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'firstname' => 'John',
            'lastname' => 'Well',
            'email' => 'johnWell@email.com',
            'password' => '12345678',
            'avatar' => 'cum',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "uid": "5e8e369a46940",
    "firstname": "John",
    "lastname": "Well",
    "name": "Júlia Corrêa",
    "email": "johnWell@email.com",
    "avatar": "storage\/avatars\/ygrUPz830GFj2L1qsZ69dNWuAxvvtPhZjs7JrbbR.jpeg",
    "updated_at": "2020-04-08T20:39:54.000000Z",
    "created_at": "2020-04-08T20:39:54.000000Z"
}
```
> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "firstname": [
            "The firstname field is required."
        ]
    }
}
```

### HTTP Request
`POST api/users`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `firstname` | string |  required  | The first name of the user.
        `lastname` | string |  optional  | The last name of the user.
        `email` | string |  required  | The email of the user to access.
        `password` | string |  required  | The password of the user to access.
        `avatar` | image |  optional  | 
    
<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_69515c02cd7aac1111d48d326128ad0c -->
## Show User

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/users/in" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost:8000/api/users/in',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (404):

```json
{
    "message": "User not found"
}
```
> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/users/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_69515c02cd7aac1111d48d326128ad0c -->

<!-- START_c1ba6e6a5611107f30a261ec8ffa0768 -->
## Update User

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/users/minima" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost:8000/api/users/minima',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/users/{uid}`

`PATCH api/users/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_c1ba6e6a5611107f30a261ec8ffa0768 -->

<!-- START_ba24dad23f6f8fc49f3a537a0eec32f6 -->
## Delete User

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/users/aspernatur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost:8000/api/users/aspernatur',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/users/{uid}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `uid` |  required  | string

<!-- END_ba24dad23f6f8fc49f3a537a0eec32f6 -->


