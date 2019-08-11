
word = input("input strings : ")

count = 0
for c in word:
    if c.isalpha():
        count += 1
    else:
        pass

print("lenght alpha string", count)