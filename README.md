# GeneradorCarpetas

GeneradorCarpetas es un programa pensado para generar arboles de carpetas de cambio hechos en git

## Ejemplificación

Se tienen los siguientes cambios de git y se desea rescatar dichos cambios respetando el arbol de carpetas
```php
modified:   src/main/java/com/udea/bartodd/BartoddApplication.java
modified:   src/main/java/com/udea/bartodd/controlador/barberia/AdministradorController.java
modified:   src/main/java/com/udea/bartodd/controlador/cliente/ClienteController.java
modified:   src/main/java/com/udea/bartodd/negocio/cliente/ClienteLogic.java
modified:   src/main/java/com/udea/bartodd/negocio/dto/ClienteDto.java
modified:   src/main/java/com/udea/bartodd/negocio/dto/PersonaDto.java
```

El programa se encargará de crear el arbol de carpetas del codigo anterior y copiar los archivos en donde correspondan. 

## Contribuyendo
Los Pull requests son bienvenidos. Para cambios importantes, abra primero un problema para discutir qué le gustaría cambiar.

Asegúrese de actualizar las pruebas según corresponda.

## Licencia
--
