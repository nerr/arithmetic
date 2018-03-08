#-*- coding: UTF-8 -*-
#！/bin/env python
import random
i = 0
while i < 1700:
    a = random.randint(1, 20)
    b = random.randint(1, 20)
    if (a + b) <= 20:
        if i%2 == 0:
            print('%s + %s = ' % (a, b))
        else:
            if a > b:
                print('%s - %s = ' % (a, b))
            else:
                print('%s - %s = ' % (b, a))
        i+=1