#import my_args_handler
k = []
v = []
def double_return(dict):

    for key, value in dict.items():
        k.append(key)
        v.append(value)

    return (k, v)

print (double_return({"a": "john", "b": 26789,  "lionel": 26789}))


