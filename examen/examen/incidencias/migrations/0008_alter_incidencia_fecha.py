# Generated by Django 5.0.2 on 2024-02-29 19:47

import django.utils.timezone
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('incidencias', '0007_alter_incidencia_fecha'),
    ]

    operations = [
        migrations.AlterField(
            model_name='incidencia',
            name='fecha',
            field=models.DateTimeField(default=django.utils.timezone.now),
        ),
    ]
