import pyrebase

firebaseConfig={
    'apiKey': "AIzaSyC15s4sqJRE6b2Ubftyobsyg484uav8sn0",
    'authDomain': "cosc4353-15ed1.firebaseapp.com",
    'projectId': "cosc4353-15ed1",
    'storageBucket': "cosc4353-15ed1.appspot.com",
    'messagingSenderId': "1060321762153",
    'appId': "1:1060321762153:web:baf8d87233d08a7f01bbf8"
  }

# initializing the database
firebase = pyrebase.initialize_app(firebaseConfig)

# connecting to the database
db = firebase.database()
auth = firebase.auth()
#storage = firebase.storage()

email = input("enter your ") 
