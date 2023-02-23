from django.db import models

# Create your models here.
class Identity(models.Model):
    name = models.CharField(max_length=200, blank=True)
    id_number = models.CharField(max_length=200, unique=True)
    mobile_number = models.CharField(max_length=200, unique=True)
    work_institution = models.CharField(max_length=200, blank=True, null=True, default="None")
    county = models.CharField(max_length=200, unique=False, blank=True)
    constituency = models.CharField(max_length=200, unique=False, blank=True)
    ward = models.CharField(max_length=200, unique=False, blank=True)

    def __str__(self):
        return self.id_number

    class Meta:
        verbose_name_plural = "Personal Profiles"


class Eid(models.Model):
    name = models.CharField(max_length = 200)

    def __str__(self):
        return self.name

    class Meta:
        verbose_name_plural = 'Electronic Identities'
