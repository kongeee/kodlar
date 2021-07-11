using System;
using System.Collections.Generic;

namespace Collections {
    class Program {
        static void Main(string[] args) {
            //Collectionslar sayesinde dinamik arrayler yapabiliriz.(normal arrayelr statiktir, veri eklenemez sonradan)

            //Collection olamadan
            string[] arr1 = new string[] { "Furkan", "Büşra" };
            //arr1[2] = "Eren"; -> yeni eleman ekelemk için bunu yazarsak hata verir. Dizi boyutu statiktir.


            //Collection olunca
            List<string> isimler = new List<string> { "Furkan", "Büşra" };
            isimler.Add("Eren");
            foreach (var isim in isimler) {
                Console.WriteLine(isim);

            }

        }
    }
}
