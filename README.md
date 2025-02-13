Probar conexión desde Docker

docker exec -it sf7_php bash

Luego dentro del contenedor:

nc -zv sf7_rabbitmq 15672 or
curl -u guest:guest http://sf7_rabbitmq:15672/api/overview

Para procesar los mensajes en la cola, ejecuta:

php bin/console messenger:consume async --limit=10
