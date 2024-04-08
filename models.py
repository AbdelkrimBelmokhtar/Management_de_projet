from django.db import models

# Create your models here.
class Categorie(models.Model):
    nom = models.CharField(max_length = 200)
    date_ajout = models.DateTimeField(auto_now=True)

    class Meta :
        ordering = ['-date_ajout']

class Produit(models.Model):
    titre = models.CharField(max_length = 200)
    prix = models.FloatField()
    description = models.TextFieldField()
    Categorie =models.ForeignKey(Categorie,related_name='categorie',on_delete=models.CASCADE)
    image = models.CharField(max_length=5000)
    date_ajout = models.DateTimeField(auto_now=True)

    class Meta :
        ordering = ['-date_ajout']


