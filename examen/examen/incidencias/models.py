import datetime
from django.db import models

class Linea(models.Model):
    nombre = models.CharField(max_length=200)
    color = models.CharField(max_length=30)
    distancia = models.IntegerField(default=0)

    def __str__(self):
        return self.nombre
    
class Estacion(models.Model):
    nombre = models.CharField(max_length=200)
    linea = models.ForeignKey(Linea, on_delete=models.CASCADE)

    def __str__(self):
        return self.nombre
    

class Incidencia(models.Model):
    texto = models.CharField(max_length=200)
    fecha = models.DateTimeField("date published")
    estacion = models.ForeignKey(Estacion, on_delete=models.CASCADE)

    def __str__(self):
        return f"Nombre de la estación({self.estacion}) {self.texto}"

