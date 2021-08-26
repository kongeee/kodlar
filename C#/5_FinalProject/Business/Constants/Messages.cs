using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.Constants {

    //Projedeki mesajları tek tek elle yazmamak için buraya yazıyoruz. Eğer bir mesajı değiştirmek
    //istersek her yerde değiştirmek yerine yalnızca burda değiştiriyoruz
    public static class Messages {
        public static string ProductAdded = "Ürün eklendi";
        public static string ProductNameInvalid = "Ürün ismi hatalı!";
        public static string MaintenanceTime = "Güncelleme yapılıyor daha sonra tekrar deneyin";
        public static string ProductsListed = "Ürünler Listelendi";
    }
}
