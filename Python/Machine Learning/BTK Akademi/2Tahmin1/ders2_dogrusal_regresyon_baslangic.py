"""
Burada basit linear regresyonu nasıl kodlayacağımızı gördük
"""

import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.linear_model import LinearRegression  #LINEAR REGRESSIONU KULLANMAK ICIN SKLEARN DEN CLASS I CAGIR

satis_data = pd.read_csv("satislar.csv") #verileri al


#satırları böl

aylar = satis_data[['Aylar']]
satislar = satis_data[['Satislar']]
genel_satislar = satis_data.iloc[:,:1].values


#train ve test datalarına ayır(aylara göre satışı bulmaya çalışıyoruz.)

x_train, x_test, y_train, y_test = train_test_split(aylar,satislar, test_size=0.33, random_state=0)

#scale et(ölçekle)(standartlaştır)

sc= StandardScaler()

X_train=sc.fit_transform(x_train)
X_test = sc.fit_transform(x_test)

#***************************************************************************************************Veri önişleme sonu

#Aylara göre satis tahmini yapacağiz bu değerleri de standdartlaştır.(Burası da veri ön işleme kısmında sayılır)
Y_train = sc.fit_transform(y_train)
Y_test = sc.fit_transform(y_test)
#**********************


#regresyon kısmı
#X_tainden Y_traini öğrenci ve bir doğrusal regresyon modeli çıkardı
lr = LinearRegression()
lr.fit(X_train,Y_train)    #fit -> modeli inşa etmeye çalışır


#test verisini predict(tahmin) ediyoruz (aşağıdaki tahminin sonucu Y_test ile karşılaştırılabilir)
tahmin = lr.predict(X_test)
#Gerçek değerler Y_Test içinde iken tahmin verileri tahmin değişkeninden tutulur sırayla
#karşıalştırarark her adımdaki hata payları bulunabilir.

#Örneğin Y_test ilk verisi = -1.66598 iken tahmin ilk verisi = -1.33324 tür.

#Görüldüğü gibi tahmin veri setindeki değerler Scale edildiği için pek anlamlı değil en bunu düzgünce görmek için 

lr2 = LinearRegression()
lr2.fit(x_train,y_train)

tahmin2 = lr2.predict(x_test) #burada tahmin2 ile y_test karşılaştırılmalıdır.
                              #tahmin2ilk = 20126 , y_testilk= 18865





