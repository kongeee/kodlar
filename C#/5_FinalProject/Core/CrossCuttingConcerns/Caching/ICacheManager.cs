using System;
using System.Collections.Generic;
using System.Text;

namespace Core.CrossCuttingConcerns.Caching {

    /*
     Bir datayı cache e ekleyerek tekrar o data için istekte bulunulduğunda DB ye gitmek yerine cache den alabiliriz.
     (Değişen ve silinen datalar cache den çıkarılmalıdır)
     */
    public interface ICacheManager {

        T Get<T>(string key);//Cacheden bir veriyi getirir(generic method)
        object Get(string key);
        void Add(string key, object value, int duration);//Cache e veri ekler
        bool IsAdd(string key);//Veri cache de var mı?
        void Remove(string key);//Veriyi cache den çıkarır
        void RemoveByPattern(string pattern);//verilen regex e uyan metodların verilerini cacheden kaldırır(örn metodda 'Category' geçiyorsa bunu cache koyma diyebiliriz)

    }
}
