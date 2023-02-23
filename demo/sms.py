import requests

url = "https://api.sandbox.africastalking.com/version1/messaging"

headers = {'ApiKey' : '14f006050cfa13a7d33f79e390139cdf5450d77d83cd762972b4a880fe3ea21f',
            'Content-Type' : 'application/x-www-form-urlencoded',
            'Accept' : 'application/json'}

def sendmessage(phone_number, message="Hello Koech"):
    data = {
        'username': 'sandbox',
        'from': '3232',
        'message': message,
        'to': f"{ phone_number }"
        }
    req = requests.post(url = url, headers=headers, data=data)
    req = req.json()
    return req

     
