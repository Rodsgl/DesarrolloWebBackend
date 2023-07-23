# DesarrolloWebBackend

Rodrigo Gutiérrez Lobos | 20.154.104-2 | ICINF

PERROS

-   **POST** http://127.0.0.1:8000/api/perro/guardar
-   **POST** http://127.0.0.1:8000/api/perro/actualizar
-   **POST** http://127.0.0.1:8000/api/perro/eliminar
-   **GET** http://127.0.0.1:8000/api/perro/listar

```json
{
    "nombre": "PerroChiquito",
    "url": "https://images.dog.ceo/breeds/cattledog-australian/IMG_1042.jpg",
    "descripcion": "es un perro chiquito"
}
```

```json
{
    "nombre": "PerroNoTanChiquito",
    "url": "https://images.dog.ceo/breeds/poodle-miniature/n02113712_3203.jpg",
    "descripcion": "tambien es un perro chiquito"
}
```

INTERACCIONES

-   **POST** http://127.0.0.1:8000/api/interaccion/guardar
-   **GET** http://127.0.0.1:8000/api/interaccion/listar

```json
{
    "perro_interesado_id": 1,
    "perro_candidato_id": 2,
    "preferencia": "los perros chiquitos"
}
```
