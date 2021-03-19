
"""
Kategorik veriler üzerinde yapılan tahmine sınıflandırma denir.
Sayısal veriler üzerinde yapılan yahmine tahmin denir.

Basit Doğrusal Regresyon
------------------------

y = ax+ b ->doğrunun formülü (y->bağımlı, x->bağımsız değişken, a->eğim, b-> kaydırma miktarı)

burada yapmak istediğimiz şey veri setindeki verileri en iyi modelleyen doğrunun formülünü bulmak.
gerçek veriler ile arasında en az hata payı olan doğru formülünü bulmak istediğimiz doğrudur. 
"""

import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler

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







