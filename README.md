# DesarrolloWebBackend

Rodrigo Gutiérrez Lobos | 20.154.104-2 | ICINF

PERROS
post http://127.0.0.1:8000/api/perro/guardar
post http://127.0.0.1:8000/api/perro/actualizar
post http://127.0.0.1:8000/api/perro/eliminar
get http://127.0.0.1:8000/api/perro/listar

{
"nombre":"perroGenerico1",
"url":"https://images.dog.ceo/breeds/cattledog-australian/IMG_1042.jpg",
"descripcion":"es un perro chiquito"
}

{
"nombre":"perroGenerico2",
"url":"https://images.dog.ceo/breeds/cattledog-australian/IMG_1042.jpg",
"descripcion":"tambien es un perro chiquito"
}

INTERACCIONES
post http://127.0.0.1:8000/api/interaccion/guardar
get http://127.0.0.1:8000/api/interaccion/listar

{
"perro_interesado_id":1,
"perro_candidato_id":2,
"preferencia":"los perros chiquitos"
}
