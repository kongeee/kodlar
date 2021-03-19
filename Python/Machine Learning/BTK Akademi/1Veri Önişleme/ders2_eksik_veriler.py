"""
Bu derste eksik olan değerleri(missing value) ortalama kullanarak gidermeyi öğrendik.
"""

import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

#eksik verileri düzenlemek için kullandığımız kütüphanane
#scientific kit learn (impute = atfetmek, üstüne yıkmak)
from sklearn.impute import SimpleImputer


#İki kişinin yaşı silinmiş veya kaybolmuş 
eksikVeri = pd.read_csv('eksik_veriler.csv')
#Bunları yazdırırkken boş olan yerlerde NaN (Not a Number) yazar
print(eksikVeri)


#NaN olan değerlerin yerine ortalama(mean) getir (missing value yerine sıfır da verebilirdik bu kez sıfırları
#ortalama ile değiştirirdi.)
imputer = SimpleImputer(missing_values=np.nan, strategy='mean')


#iloc = integer location , [:,1:4]->tüm satırları al , 1-4 sütunları al
yas = eksikVeri.iloc[:,1:4].values


#fit fonksiyonu eğitmek için kullanılıyor
#yas ' ın 1-4 arası sütunlarını öğren ve eksik verilere ortalamayı koy
imputer = imputer.fit(yas[:,1:4])


#Öğrenme işi bittikten sonra bu değerleri dönüştürmesini ve yas değişkenine aktarmasını istiyoruz
yas[:,1:4] = imputer.transform(yas[:,1:4])

print(yas) #NaN değerlein yerinde ortalamaların olduğunu görebiliriz
