from django.contrib import admin

# Register your models here.
from demo.models import Identity, Eid

class IdentityAdmin(admin.ModelAdmin):
    list_display = ('name','id_number', 'mobile_number', 'work_institution', 'county','constituency','ward')

admin.site.register(Identity, IdentityAdmin)

admin.site.register(Eid)