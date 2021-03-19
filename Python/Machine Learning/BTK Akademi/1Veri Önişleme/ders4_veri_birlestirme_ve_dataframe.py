"""
Önceki kodlarda ele alınan eksik verilerin impute edilmesi ve kategorik verilerin encoder ile dönüştürülmesi
konularını burada birleştiriyoruz ve veri setimizi düzenliyoruz.
"""

import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn import preprocessing
from sklearn.impute import SimpleImputer


veriler = pd.read_csv('eksik_veriler.csv')
imputer = SimpleImputer(missing_values=np.nan, strategy='mean')



yas = veriler.iloc[:,1:4].values


imputer = imputer.fit(yas[:,1:4])


yas[:,1:4] = imputer.transform(yas[:,1:4])

#*********************************************************************************************Yaş tahmin sonu

ulke = veriler.iloc[:,0:1].values

le = preprocessing.LabelEncoder()

ulke[:,0] = le.fit_transform(veriler.iloc[:,0:1])


ohe = preprocessing.OneHotEncoder()

ulke = ohe.fit_transform(ulke).toarray()

#********************************************************************************************Ülke encode sonu


#Sonucu tek bir dataframede topluyoruz yani yukarıda düzenlenen verileri birleştiriyoruz.
#Öncelikle orijinal veri kümesinde ilk yer alan ülke bilgisinden başlıyoruz.
sonuc = pd.DataFrame(data=ulke, index=range(22), columns= ['fr','tr','us']) #index 0-22 arasındaki(22 dahil değil) değerleri kapsar.



#yaş dizisinin impute edilmiş halini de birleştiriyoruz (yas arrayinde boy kilo ve yas bulunuyordu)
sonuc2 = pd.DataFrame(data=yas, index=range(22), columns=['boy','kilo','yas'])


#geriye kaldı cinsiyer bunu almak için
cinsiyet = veriler.iloc[:,-1].values

#Bu diziyi dataframe e dönüştürüyoruz.
sonuc3 = pd.DataFrame(data=cinsiyet, index=range(22), columns=['cinsiyet'])




#Tüm verileri (ülke,boy-kilo-yas,cinsiyet) aldık ve dataframelere aktardık. Şimdi bunları birleştirelim!!!!!!!!!!!!!!!
s = pd.concat([sonuc,sonuc2],axis=1)
#Yukarıdaki kodda cancat yaparken bunları aynı indexler bir araya gelecek şekilde yazmaz( print(s) diyerek görebilirsin)
#Bu durumu düzeltmek için   ^ Buraya axis=1 yazılır

#Bu dataframe e cinsiyet dataframe ini de concat edelim
en_son_DataFrame = pd.concat([s,sonuc3], axis=1) 
print(en_son_DataFrame)


