from os import path


# Look for corresponding FaceHash image
def face_exists(facehash):
    acceptedExt = [".jpg", ".jpeg", ".png"]
    for ext in acceptedExt:
        file = "users/faces/" + facehash + ext
        if path.isfile(file):
            return file

    print("no_facehash")
