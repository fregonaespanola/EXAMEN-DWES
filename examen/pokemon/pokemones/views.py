from typing import Any
from django.db.models.query import QuerySet
from django.shortcuts import render
from django.views import generic
from httplib2 import Response
from .models import Pokemon
from django.contrib.auth.mixins import LoginRequiredMixin
from rest_framework.authentication import SessionAuthentication, BasicAuthentication, TokenAuthentication
from rest_framework.permissions import IsAuthenticated
from rest_framework.decorators import api_view
from rest_framework import viewsets, status
from rest_framework import generics
# Create your views here.
class Listado(generic.ListView):
    template_name = "pokemones/listado.html"
    model = Pokemon
    paginate_by = 4

class Detalle(LoginRequiredMixin, generic.DetailView):
    template_name = "pokemones/detalle.html"
    model = Pokemon
    authentication_classes = [SessionAuthentication, BasicAuthentication, TokenAuthentication]
    permission_classes = [IsAuthenticated]

from rest_framework import viewsets

from .serializers import PokemonListSerializer, PokemonSerializer, UserSerializer

class PokemonViewSet(viewsets.ModelViewSet):
    """
    API endpoint that allows users to be viewed or edited.
    """
    queryset = Pokemon.objects.all()
    serializer_class = PokemonSerializer
    authentication_classes = [SessionAuthentication, BasicAuthentication, TokenAuthentication]
    permission_classes = [IsAuthenticated]

class PokemonListView(generics.ListAPIView):
    """
    API endpoint that allows users to be viewed or edited.
    """
    queryset = Pokemon.objects.all()
    serializer_class = PokemonListSerializer
    authentication_classes = [SessionAuthentication, BasicAuthentication, TokenAuthentication]
    permission_classes = [IsAuthenticated]

@api_view(['POST'])
def register_user(request):
    if request.method == 'POST':
        serializer = UserSerializer(data=request.data)
        if serializer.is_valid():
            serializer.save()
            return Response(serializer.data, status=status.HTTP_201_CREATED)
        return Response(serializer.errors, status=status.HTTP_400_BAD_REQUEST)
