"""
Bu derste verileri aynı değer aralığına çekmeye çalışacağız.
Örneğin: boy 125-193 aralığında kilo ise 30-105 aralığında bunları aynı sayısal değere çekmeyi öğreneceğiz.
Çünkü boy kilo ve yaşı(aynı zamanda ülkeyi))kullanarak cinsiyet tahmin etmek istiyoruz ve bunların sayısal değerlenini ortak bir aralığa çekerek
hangi etkenin daha çok bunu etkilediğini görebiliriz veya hepsinin aynı etkiye sahip olmasını sağlayabiliriz. 
"""

import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn import preprocessing
from sklearn.impute import SimpleImputer
from sklearn.model_selection import train_test_split  
from sklearn.preprocessing import StandardScaler


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

sonuc = pd.DataFrame(data=ulke, index=range(22), columns= ['fr','tr','us'])

sonuc2 = pd.DataFrame(data=yas, index=range(22), columns=['boy','kilo','yas'])


cinsiyet = veriler.iloc[:,-1].values

sonuc3 = pd.DataFrame(data=cinsiyet, index=range(22), columns=['cinsiyet'])


s = pd.concat([sonuc,sonuc2],axis=1)

en_son_DataFrame = pd.concat([s,sonuc3], axis=1) 

#********************************************************************************************Data birleştirme sonu


x_train, x_test, y_train, y_test = train_test_split(s, sonuc3,test_size=0.33, random_state=0)

#********************************************************************************************Eğitim ve test verisi sonu


#Verileri aynı değer aralığna çekmek için StandartScaler classından bir obje oluşturuyoruz
sc = StandardScaler()


#Sonra girdiler için train ve test verilerini dönüştürüyoz bunu yaparken sklearn kütüphanesindeki fit_trasform işlemi kullanılır.
X_train = sc.fit_transform(x_train)
X_test = sc.fit_transform(x_test)


#*******************************************************************************************Ölçekleme sonu










