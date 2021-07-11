using System;
using System.Collections.Generic;
using System.Text;

namespace GenericsIntro {
    //Bu bir generic classtir ve buna ozel bir tiple calismak sitedigimizi soyluyoruz(T->type demek, istedigimizi yazabiliriz T yerine)
    class MyList<T> {

        T[] items;
        //constructor -> MyList newlendigi zaman burasi calisir ve items icin yer ayrilir.
        public MyList() {
            items = new T[0];//0 elemanli dizi
        }
        public void Add(T item) {

            T[] tempArray = items; //asagidaki satirda newlersek onceki elemanlar gider. Cunku her new yeni bir yer tahsis eder. Bu degisken ile o adresi tutuyoruz
            items = new T[items.Length + 1];

            //tempte tutulan degerleri ana diziye geri atiyoruz
            for (int i = 0; i < tempArray.Length; i++) {
                items[i] = tempArray[i];
            }
            //simdi de yeni elemani ekleyebiliriz(items in boyutunu kullaniyoruz(bir artmisti yukarda))
            items[items.Length - 1] = item;
        }

        public int Length {
            get { return items.Length; }
        }

        public T[] Items {
            get { return items; }
        }
    }
}
