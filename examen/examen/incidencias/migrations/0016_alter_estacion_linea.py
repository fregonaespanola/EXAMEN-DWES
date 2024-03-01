# Generated by Django 5.0.2 on 2024-02-29 21:09

import django.db.models.deletion
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('incidencias', '0015_alter_incidencia_fecha'),
    ]

    operations = [
        migrations.AlterField(
            model_name='estacion',
            name='linea',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='estaciones', to='incidencias.linea'),
        ),
    ]