;LES REGISTER(16), MEMORY(32) (laod register and ES)

;LDS'nin yaptigi isin aynisini ES icin yapar

MOV [0200h], 01234h
MOV [0202h], 05577h

;RAM' deki durum:(DS sonuna 0 koy + 200h yap sonra)

;01200h   : 34
;01201h   : 12
;01202h   : 77
;01203h   : 55



LES BX, [0200h]  ;DS sonuna 0 ekle ve 200h ile topla. Cikan adrese git ve oradaki 16 bitlik degeri alip
                 ;belirtilen 16 bitlik registere(BX) aktar. Daha sonra diger devamindaki 16 bitlik kismi al ve
                 ;ES e aktar.
 