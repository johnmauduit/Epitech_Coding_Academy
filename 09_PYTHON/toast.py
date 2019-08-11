#!/usr/bin/python3

def dictToList(dico):
    return (['%s => (%s, %s)'%(k, v.__class__.__name__, v) for k, v in dico.items()])

print (dictToList({"Etudiez" : 1, "cette" : 2, "ligne" : 3, "blyat" : 4}))
