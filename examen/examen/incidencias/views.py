from datetime import datetime
from django.shortcuts import render
from django.urls import reverse_lazy
from django.http import HttpResponse
from django.views import generic
from .models import Linea, Estacion, Incidencia


def index(request):
    return HttpResponse("Hello, world. You're at the incidencias index.")

class ListadoLineasView(generic.ListView):
    model = Estacion
    template_name = 'estacion_list.html'
    context_object_name = 'estaciones'


def enviado_view(request):
    # Renderizar la plantilla con el mensaje de éxito
    mensaje_exito = "La incidencia ha sido enviada."
    return render(request, 'enviado.html', {'mensaje_exito': mensaje_exito})

class NuevaIncidenciaView(generic.CreateView):
    model = Incidencia
    fields = ['texto']
    template_name = 'nueva_incidencia.html'
    success_url = reverse_lazy('enviado')
    
    def form_valid(self, form):
        estacion_id = self.kwargs['estacion_id']
        form.instance.fecha = datetime.now()
        estacion = Estacion.objects.get(pk=estacion_id)
        form.instance.estacion = estacion
        return super().form_valid(form)
