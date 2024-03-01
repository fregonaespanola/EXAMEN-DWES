from django.contrib import admin

from .models import Linea, Estacion, Incidencia


class EstacionInline(admin.TabularInline):
    model = Estacion
    extra = 1


class LineaAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {"fields": ["nombre"]}),
        ("Color", {"fields": ["color"]}),
        ("Distancia", {"fields": ["distancia"]}),
    ]
    inlines = [EstacionInline]
    list_display = ["nombre", "color"]


class IncidenciasAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {"fields": ["texto"]}),
        ("fecha", {"fields": ["fecha"]}),
        ("estacion", {"fields": ["estacion"]})
    ]
    list_display = ["texto", "fecha"]
    search_fields = ["fecha"]
    date_hierarchy = 'fecha'

admin.site.register(Linea, LineaAdmin)

admin.site.register(Incidencia, IncidenciasAdmin)

#python manage.py shell
# Importar los modelos
# from incidencias.models import Linea, Estacion, Incidencia
# Importar la clase datetime de la biblioteca datetime
# from datetime import datetime

# Crear una instancia de Linea
# linea = Linea.objects.create(nombre="Nombre de la línea", color="Color de la línea", distancia=100)

# Crear una instancia de Estacion asociada a la Linea creada anteriormente
# estacion = Estacion.objects.create(nombre="Nombre de la estación", linea=linea)

# Crear una instancia de Incidencia asociada a la Estacion creada anteriormente
# incidencia = Incidencia.objects.create(texto="Texto de la incidencia", fecha=datetime.now(), estacion=estacion)
