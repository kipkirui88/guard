from django.shortcuts import render
import os
import random
import africastalking
from demo.models import Eid, Identity
from django.views.decorators.csrf import csrf_exempt
from django.http import HttpResponse
import demo.sms as sms

# Create your views here.
def get_eid():
    count = 0
    response = "CON Search Type Choices \n"
    for index, eid in get_eid_object():
        count += 1
        response += f"{count}. {eid} \n"
    return response 
def get_eid_object(index=None):
    eid = Eid.objects.values_list('id', 'name')
    if index is None:
        return eid
    else:
        if 0 < index <= len(eid):
            return eid[index -1]
        else:
            return None   
        
@csrf_exempt
def ussd_callback(request):
    if request.method == 'POST':
        session_id = request.POST.get('sessionId')
        service_code = request.POST.get('serviceCode')
        phone_number = request.POST.get('phoneNumber')
        text = request.POST.get('text')
        response = ""

        if text == "":
            response += "CON Welcometo ecp:\n Select Service.\n" 
            response += "1. Visit our web cloud app \n"
            response += "2. e-ID \n"
            response += "3. Contact Directory \n"
            response += "5. Security,Crime & Justice \n"
            response += "6. Finacial Service \n"
            response += "7. Social Service \n"
            response += "8. Customized Service \n"
            response += "9. Contact Center \n"
            response += "10. Unsubscribe \n"
            response += "11. Quit \n"
      
        elif text == "1":
            response = "END Visit our web cloud app \n With this link you can access our web cloud app. \n https://ecp.machinitechnologies.co.ke/"
            sms.sendmessage(phone_number, f"Thank you for visiting our web cloud app")
           
        elif text == '2':
            response = "CON Search Type Choices\n"
            response += "1. Person \n"
            response += "2. Motor Vehicle \n"
            response += "3. Voice Data \n"
            response += "4. Facial Recognition  \n"
            response += "5. Fingeprint \n"
            response += "6. Footprint \n"    

        elif text == "2*1":
            response = "CON Person \n"
            response += "Enter National ID: \n"
                    
        elif text[:4] == "2*1*":
                user_id = text[4:]
                eIDs=Identity.objects.filter(id_number=user_id)
                for IDs in eIDs:
                    response = "END Details: \n"
                    response += "Name: " + IDs.name + "\n"
                    response += "ID: " + IDs.id_number + "\n"
                    response += "Mobile Number: " + IDs.mobile_number + "\n"
                    response += "Work Institution: " + IDs.work_institution + "\n"
                    response += "County: " + IDs.county + "\n"
                    response += "Constituency: " + IDs.constituency + "\n"
                    response += "Ward: " + IDs.ward + "\n"
                    sms.sendmessage(phone_number, f"Your ID is {IDs.id_number}. Your mobile number is {IDs.mobile_number}. Your work institution is {IDs.work_institution}. Your county is {IDs.county}.")
                    # alert = sms.send(message, recipients)
                    # print(alert)

        return HttpResponse(response)