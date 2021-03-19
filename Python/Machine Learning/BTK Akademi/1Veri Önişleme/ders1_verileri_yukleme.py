"""
Bu derste .csv(comma seperated value)->(virgülle ayrılmış değerler) uzantılı bir dosyadan verileri çekmeyi öğrendik.
"""

#Gerekli kütüphaneler yüklendi
import pandas as pd               #verileri düzgün bir şekilde tutmak için
import numpy as np                #büyük sayılar ve hesaplama işlemleri için kullanıyoruz
import matplotlib.pyplot as plt   #çizim yapmak için(veri görselleştirme tablo grafik vs.)


#Verileri yüklemek için:
#Buraya bir path de girebiliriz d:\\Kodlar\Python\...\veriler.csv gibi
veriler = pd.read_csv('veriler.csv')


#İstediğimiz satırı (veya satırları alabiliriz)
#İki tane köşeli parantez kullanılmasının nedeni bu sütunların list of list olmasından kaynaklı
boy = veriler[['boy']]

boy_ve_yas = veriler[['boy','yas']]
print(boy_ve_yas)





