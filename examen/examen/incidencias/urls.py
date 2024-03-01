from django.urls import path
from .views import ListadoLineasView, NuevaIncidenciaView
from . import views

app_name = "incidencias"
urlpatterns = [
    path("", views.index, name="index"),
    path('listado/', ListadoLineasView.as_view(), name='listado'),
    path('nueva_incidencia/<int:estacion_id>/', NuevaIncidenciaView.as_view(), name='nueva_incidencia'),
]