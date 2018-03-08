#-*- coding: UTF-8 -*-
#！/bin/env python

import random

l = list()
m = (1,2,3,4,5,6,7,8,9)
n = (1,2,3,4,5,6,7,8,9)
for i in m:
    for p in n:
        if p >= i:
            l.append("%s x %s = " % (i, p))

lib  = list()
for a in range(1700):
    lib.append(random.choice(l))

for arithmetic in lib:
    print(arithmetic)