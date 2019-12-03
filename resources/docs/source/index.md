---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#1. Pessoas


<!-- START_2f723282d4663f0d1415d3dda855cc3f -->
## Display a listing of the Pessoa.
GET|HEAD /pessoas

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/pessoas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pessoas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "nome": "Itallo",
            "sobrenome": "Silva",
            "nascimento": "1991-03-19 00:00:00",
            "email": "user@mail.com",
            "created_at": "2019-12-03 09:54:09",
            "updated_at": "2019-12-03 09:54:09"
        }
    ],
    "message": "Pessoas retrieved successfully"
}
```

### HTTP Request
`GET api/pessoas`


<!-- END_2f723282d4663f0d1415d3dda855cc3f -->

<!-- START_eba80adef9a0e0712ac372e5d7572270 -->
## Store a newly created Pessoa in storage.
POST /pessoas

> Example request:

```bash
curl -X POST \
    "http://localhost/api/pessoas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pessoas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/pessoas`


<!-- END_eba80adef9a0e0712ac372e5d7572270 -->

<!-- START_8668318f48023f2be6a236d34fce6885 -->
## Display the specified Pessoa.
GET|HEAD /pessoas/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/pessoas/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pessoas/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": {
        "id": 1,
        "nome": "Itallo",
        "sobrenome": "Silva",
        "nascimento": "1991-03-19 00:00:00",
        "email": "user@mail.com",
        "created_at": "2019-12-03 09:54:09",
        "updated_at": "2019-12-03 09:54:09",
        "enderecos": [
            {
                "id": 2,
                "pessoa_id": 1,
                "logradouro": "Av. Maranhão",
                "numero": "35",
                "complemento": null,
                "bairro": "Brasil",
                "cep": "45000-000",
                "cidade": "Vitória da Conquista",
                "uf": "BA",
                "tipo": 1,
                "created_at": "2019-12-03 09:54:25",
                "updated_at": "2019-12-03 10:12:42"
            }
        ],
        "telefones": [
            {
                "id": 1,
                "pessoa_id": 1,
                "numero": "779999-8888",
                "tipo": 1,
                "created_at": "2019-12-03 10:55:52",
                "updated_at": "2019-12-03 10:55:52"
            }
        ]
    },
    "message": "Pessoa retrieved successfully"
}
```

### HTTP Request
`GET api/pessoas/{pessoa}`


<!-- END_8668318f48023f2be6a236d34fce6885 -->

<!-- START_bdf9fc7a300f3ead823c5ed6ec9c9c1b -->
## Update the specified Pessoa in storage.
PUT/PATCH /pessoas/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/pessoas/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pessoas/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/pessoas/{pessoa}`

`PATCH api/pessoas/{pessoa}`


<!-- END_bdf9fc7a300f3ead823c5ed6ec9c9c1b -->

<!-- START_cb374ca8cdd9e0761ed7685fdb4373cd -->
## Remove the specified Pessoa from storage.
DELETE /pessoas/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/pessoas/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pessoas/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/pessoas/{pessoa}`


<!-- END_cb374ca8cdd9e0761ed7685fdb4373cd -->

#2. Endereços


<!-- START_7175ae637e507bd353f406905d672e8c -->
## Display a listing of the Endereco.
GET|HEAD /enderecos

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/enderecos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/enderecos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 2,
            "pessoa_id": 1,
            "logradouro": "Av. Maranhão",
            "numero": "35",
            "complemento": null,
            "bairro": "Brasil",
            "cep": "45000-000",
            "cidade": "Vitória da Conquista",
            "uf": "BA",
            "tipo": 1,
            "created_at": "2019-12-03 09:54:25",
            "updated_at": "2019-12-03 10:12:42"
        }
    ],
    "message": "Enderecos retrieved successfully"
}
```

### HTTP Request
`GET api/enderecos`


<!-- END_7175ae637e507bd353f406905d672e8c -->

<!-- START_8260d45185d508b4629cda61f2b0e19f -->
## Store a newly created Endereco in storage.
POST /enderecos

> Example request:

```bash
curl -X POST \
    "http://localhost/api/enderecos" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/enderecos"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/enderecos`


<!-- END_8260d45185d508b4629cda61f2b0e19f -->

<!-- START_9872caa4cc5091eb104352888ff875bc -->
## Display the specified Endereco.
GET|HEAD /enderecos/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/enderecos/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/enderecos/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Endereco] 1"
}
```

### HTTP Request
`GET api/enderecos/{endereco}`


<!-- END_9872caa4cc5091eb104352888ff875bc -->

<!-- START_288747bcfa3dc491b88b6706e63deff7 -->
## Update the specified Endereco in storage.
PUT/PATCH /enderecos/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/enderecos/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/enderecos/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/enderecos/{endereco}`

`PATCH api/enderecos/{endereco}`


<!-- END_288747bcfa3dc491b88b6706e63deff7 -->

<!-- START_3fae117b5086d563f6aafe3920f242c2 -->
## Remove the specified Endereco from storage.
DELETE /enderecos/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/enderecos/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/enderecos/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/enderecos/{endereco}`


<!-- END_3fae117b5086d563f6aafe3920f242c2 -->

#3. Telefones


<!-- START_c9d499b07d856709009a5365b9030315 -->
## Display a listing of the Telefone.
GET|HEAD /telefones

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/telefones" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/telefones"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": [
        {
            "id": 1,
            "pessoa_id": 1,
            "numero": "779999-8888",
            "tipo": 1,
            "created_at": "2019-12-03 10:55:52",
            "updated_at": "2019-12-03 10:55:52"
        }
    ],
    "message": "Telefones retrieved successfully"
}
```

### HTTP Request
`GET api/telefones`


<!-- END_c9d499b07d856709009a5365b9030315 -->

<!-- START_f76b4301c1e3e345752b6948de2d9066 -->
## Store a newly created Telefone in storage.
POST /telefones

> Example request:

```bash
curl -X POST \
    "http://localhost/api/telefones" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/telefones"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/telefones`


<!-- END_f76b4301c1e3e345752b6948de2d9066 -->

<!-- START_10aed204dc6949933a6248e400549743 -->
## Display the specified Telefone.
GET|HEAD /telefones/{id}

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/telefones/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/telefones/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "success": true,
    "data": {
        "id": 1,
        "pessoa_id": 1,
        "numero": "779999-8888",
        "tipo": 1,
        "created_at": "2019-12-03 10:55:52",
        "updated_at": "2019-12-03 10:55:52"
    },
    "message": "Telefone retrieved successfully"
}
```

### HTTP Request
`GET api/telefones/{telefone}`


<!-- END_10aed204dc6949933a6248e400549743 -->

<!-- START_3eba9d3ad6b03424e6e5678e7884d1f0 -->
## Update the specified Telefone in storage.
PUT/PATCH /telefones/{id}

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/telefones/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/telefones/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/telefones/{telefone}`

`PATCH api/telefones/{telefone}`


<!-- END_3eba9d3ad6b03424e6e5678e7884d1f0 -->

<!-- START_b23c0fdc72eef459470fa61d7c94f6e1 -->
## Remove the specified Telefone from storage.
DELETE /telefones/{id}

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/telefones/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/telefones/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/telefones/{telefone}`


<!-- END_b23c0fdc72eef459470fa61d7c94f6e1 -->


