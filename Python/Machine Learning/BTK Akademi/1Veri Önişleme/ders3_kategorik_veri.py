# -*- coding: utf-8 -*-
"""
                                                        VERİ
                                                        / \
                                                       /   \  
                                                      /     \
                                               KATEGORİK     SAYISAL
                                                ->Nominal    ->Oransal(Ratio)
                                                ->Ordinal    ->Aralık(Interval)
                                                
                                                
Kategorik veriler: Sayılsal olmayan verilerdir. Bu veri setinde gördüğümüz ülke ve cinsiyet 
değerleri kategorik veridir.
    
    ->Nominal : Sıralanamayan ve ölçülemeyen veriler.(Örnek : Cep telefonu markası, araba markası,yaşanan ülke)
    
    ->Ordinal : Arasında büyüktür küçüktür ilişkisi olan ama ölçülemeyen veriler.(Örneğin plaka numaraları
                arasında bir sıralama yapılabilir ama bu sıra plakalar arasında bir ölçüm belirtmez
                yani 34->istanbul 01->adana, istanbul adanın 34 katıdır denemez.)


Sayısal Veriler: Bu veri setinde görülen boy, kilo ve yaş verileri sayısal verilerdir.
    
    ->Oransal(Ratio):  Aralık verilerinin aksine birbirleriyle orantılanabilen verilerdir.(Örneğin yaş) 
    
    ->Aralık(Interval): Belirli bir aralıkta bulunan değerlerdir. Bir değerin zaman içinde artıp azalması mümkün
                        fakat çarpmanın bir anlamı yok.(Örneğin sıcaklık değeri. Oda 23 derece, odanın sıcaklığı
                        giderek azalıyor dersek bunlar anlamlı şeyler. Fakat oda sıcaklığının 10 katı nedir gibi bir
                        soru saçmadır.)
                        

*Burada bu veri tipleri arasında geçiş yapmayı(kategorikten -> sayısala) öğreneceğiz.
(Örneğin ülke ve cinseiye bilgisini sayısal verilere dönüştüreceğiz.)
"""

import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn import preprocessing

veriler = pd.read_csv('veriler.csv')
print(veriler[['ulke']])

#Tüm satırları ve ülke sütununu al.
ulke = veriler.iloc[:,0:1].values


#Burada ulke verilerini sayılsal bir değere dönüştürmek için encoder kullanıyoruz.(Label Encoder)
#Bu encode ülkelere 0,1,2 diye etiket verir
le = preprocessing.LabelEncoder()


#Geçen derste fit ve transform işlerini ayrı yapmıştık burada birlikte de yapabiliriz.
ulke[:,0] = le.fit_transform(veriler.iloc[:,0:1])
print(ulke)


#Yine bir encoder yardımıyla veriler sayısal değere dönüştürülür.(One Hot Encoder)
ohe = preprocessing.OneHotEncoder()

#Label encoder ile encode ettiğimiz ülke sütununu kullanıyoruz burada
#buradaki yapı 0 ve birlerden oluşacak (Bir nevi yukarıdaki 0,1,2 yi binary'e çevirdik)
ulke = ohe.fit_transform(ulke).toarray()
print(ulke)

#1 0 0 olan satır Fransa
#0 1 0 olan satır Türkiye
#0 0 1 olan satır US



