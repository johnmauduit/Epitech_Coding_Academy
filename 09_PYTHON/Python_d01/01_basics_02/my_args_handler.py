#import my_args_handler

def my_args_handler(*args):

    separator = ", "
    print(separator.join(args))

my_args_handler("a", "b", "c", "poke", "jour", "nuit")