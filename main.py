import sys
from face_recognition import load_image_file
import json
from utils import face_exists
from face_recon import webcam_detection



# Get arguments
facehash = sys.argv[1]
# Get image of person corresponding to FaceHash
known_face = face_exists(facehash)
known_face = load_image_file(known_face) # Get image face_encoding

# Get json data of user
data_path = "users/data/" + facehash + ".json"
with open(data_path) as json_file:
    data = json.load(json_file)

# print(json.dumps(data, indent=4))
name = data[0]['Name']
surname = data[0]['Surname']
display_name = name + " " + surname

# Start webcam detection
if (webcam_detection(known_face, display_name)):
    print("yes")


