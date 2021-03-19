;LEA REG(16 BIT) (load effective address)



LEA BX, isim    ;isim degiskeninin adresini BX registerine aktar((DS)0 + BX yapilarak isim degiskeninin)
                ;adresi bulunuyor. Bu nedenle DS = 0100h ise ve degiskenin adresi 1017h ise BX registerinde
                ;17h degeri tutulur.

LEA DX, [1234h] ;1234h bir adrestir(koseli parantez icinde oldugu icin). Onun icin 1234h degeri DX registerine
                ;aktarilir

isim DB "Furkan"