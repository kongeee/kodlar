def isPalindrome(number):
    number = str(number)
    revNumber = number[::-1]
    
    if(number == revNumber):
        return True
    return False



for i in range(100,1000):
    for j in range(100,1000):
        if(isPalindrome(i*j)):
            maxPal = i*j


print(maxPal)
    