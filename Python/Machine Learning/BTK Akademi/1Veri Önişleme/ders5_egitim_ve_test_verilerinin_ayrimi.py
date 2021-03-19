"""
Burada elimizdeki verileri belirli bir oranda test ve eğitim verisi olarak ayıracağız
"""

import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn import preprocessing
from sklearn.impute import SimpleImputer
from sklearn.model_selection import train_test_split  #eğitim ve test verilerini ayırmak için bunu kullanıyoruz


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



#x-> bağımsız değişkenler(yani hangi verileri kullanacağız tahmin için), y-> bağımlı değişkenler (yani neyi tahmin edeceğiz)
#Burada ülke boy kilo yaş bilgileri kullanılarak cinsiyet tahmin edilmek isteniyor
#Dolayısıyla x-> ülke,boy,kil,yaş olurken     y->cinsiyet olacak
#Şimdi verileri eğitim ve test oalrak bölelim

x_train, x_test, y_train, y_test = train_test_split(s, sonuc3,test_size=0.33, random_state=0)

#burada s dataframeinden %33(test_size=0.33 bunu ifade eder) kadar veri test için ayrılacak, %67 si eğitim için ayrılacak
#yine cinsiyetin bulunduğu sonuc3 dataframe ini test ve eğitim için ayırıyoruz
#random_state -> bu bir seed dir herkes aynı seed i girerse herkeste aynı bölünme olur
#x train ve y train aynı indexlere sahip olarak bölünürler
#x test ve y test aynı indexlere sahip olarak bölünürler





