from .models import Pokemon, Tipo, Ataque
from rest_framework import serializers
from django.contrib.auth.models import User

class TipoSerializer(serializers.ModelSerializer):
    class Meta:
        model = Tipo
        fields = ['nombre', 'color']

class AtaqueSerializer(serializers.ModelSerializer):
    class Meta:
        model = Ataque
        fields = ['nombre']

class PokemonSerializer(serializers.HyperlinkedModelSerializer):
    tipo = TipoSerializer()
    ataques = AtaqueSerializer(many=True)
    class Meta:
        model = Pokemon
        fields = ['nombre', 'descripcion', 'tipo', 'ataques']

class PokemonListSerializer(serializers.ModelSerializer):
    tipo = TipoSerializer()

    class Meta:
        model = Pokemon
        fields = ['id', 'nombre', 'tipo', 'imagen']


class PokemonDetailSerializer(serializers.ModelSerializer):
    tipo = TipoSerializer()
    ataques = AtaqueSerializer(many=True)

    class Meta:
        model = Pokemon
        fields = '__all__'


class UserSerializer(serializers.ModelSerializer):
    password = serializers.CharField(write_only=True)

    class Meta:
        model = User
        fields = ['username', 'password']

    def create(self, validated_data):
        user = User.objects.create_user(**validated_data)
        return user