k = []
v = []
def display_all(dict):
    
    for key, value in dict.items():
        k = str(type(key))
        v = str(value)
        k = k.replace("<class '", "")
        k = k.replace("'>", "")
        print ("[" + k + "]" + ": " + "[" + v + "]")
        
    
display_all({"a": 1, "b": 2, "john": "john", 25: "ah"})