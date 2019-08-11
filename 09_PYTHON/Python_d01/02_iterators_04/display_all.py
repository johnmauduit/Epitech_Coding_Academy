# ke = []
# k = []
# i,j = []
def display_all(list):
    print([ (i, j.__class__) for i, j in enumerate(list) ])
    print([ (i, j) for i, j in enumerate(list) ])
    print([ (i) for i in enumerate(list) ])


display_all([10, "john", 3.4, "julien", 5])

#"[" + str(ke) + "]" + " -> " + "[" + k + "]" + ": " + "[" + v + "]"