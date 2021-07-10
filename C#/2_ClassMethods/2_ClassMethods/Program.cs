using System;

namespace _3_ClassMethods {
    class Program {
        static void Main(string[] args) {
            
            Product urun1 = new Product();
            urun1.Ad = "Elma";
            urun1.Fiyat = 3;
            urun1.Aciklama = "Amasya Elması";

            Product urun2 = new Product();
            urun2.Ad = "Armut";
            urun2.Fiyat = 7;
            urun2.Aciklama = "En iyi armut";

            Product[] urunler = new Product[] { urun1, urun2 };

            //buradaki var urunlerin tipi ile aynı değeri alır (yani var yerine Prodcut gelir)
            foreach (var urun in urunler) {
                
                Console.WriteLine(urun.Ad);
                Console.WriteLine(urun.Fiyat);
                Console.WriteLine(urun.Aciklama);
                Console.WriteLine("----------------");

            }

            //***********************************************************************
            Console.WriteLine("Metodlar :");

            //Instance oluşturduk
            SepetManager sepetManager = new SepetManager();
            sepetManager.Ekle(urun2);


        }
    }
}
