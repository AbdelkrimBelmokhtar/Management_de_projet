from django.db import models

class product(models.Model):
    
    name = models.CharField(max_length=10)
    image = models.ImageField(upload_to='images')
    
    def __str__(self) -> str:
        return self.name