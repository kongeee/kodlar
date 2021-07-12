using System;

namespace OOP2 {
    class Program {

        //Bu derste inheritance yapisini ogrenecegiz
        static void Main(string[] args) {
            //Furkan Ekici (gercek musteri)
            GercekMusteri musteri1 = new GercekMusteri();
            musteri1.Id = 1;
            musteri1.MusteriNo = "12345";
            musteri1.TcNo = "12345678910";
            musteri1.Ad = "Furkan";
            musteri1.Soyad = "Ekici";


            //X Sirketi(tuzel musteri)
            TuzelMusteri musteri2 = new TuzelMusteri();
            musteri2.Id = 2;
            musteri2.MusteriNo = "98741";
            musteri2.VergiNo = "123456654";
            musteri2.SirketAdi = "X Şirketi";


            //Base sinif, kendinden turetilen siniflarin adresini(referansini) tutabilir
            Musteri musteri3 = new GercekMusteri();
            Musteri musteri4 = new TuzelMusteri();

            //Musteri ekleme
            MusteriManager musteriManager = new MusteriManager();
            musteriManager.Ekle(musteri1);
            musteriManager.Ekle(musteri2);
            //musteri3 ve musteri4 de ayni sekilde Ekle ye gonderilebilir.
        }
    }
}
