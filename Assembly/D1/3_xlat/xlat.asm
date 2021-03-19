;XLAT (translate)
          
MOV AL, 003h
MOV BX, 002h
XLAT        ;AL+BX+(DS)0 yaparak bir fiziksel adres elde edilir. Bu fiziksel adrese gidilir ve oradaki deger
            ;AL registerine aktarilir.
