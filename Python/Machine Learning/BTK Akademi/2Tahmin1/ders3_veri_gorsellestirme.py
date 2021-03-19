"""
Burada matplotlib ile görselleştirmeyi göreceğiz
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


lr = LinearRegression()
lr.fit(X_train,Y_train)    #fit -> modeli inşa etmeye çalışır


tahmin = lr.predict(X_test)


lr2 = LinearRegression()
lr2.fit(x_train,y_train)

tahmin2 = lr2.predict(x_test) 

#*******************************************************************************************linear regresyon ile tahmin sonu

#verilerin saçma sapan görünmemesi için idenx sırasına sokuyoruz
x_train = x_train.sort_index()
y_train = y_train.sort_index()

plt.plot(x_train, y_train) #eğitim verilerini gösterir

plt.plot(x_test, lr2.predict(x_test)) # lineer regresyon çigisi tahmin (ayları ve tamin fiyatları)

plt.title("Aylara göre Satışlar Tablosu") #graif başlığı
plt.xlabel("Aylar")   #x ekseni ismi
plt.ylabel("Fiyatlar") #y ekseni ismi






