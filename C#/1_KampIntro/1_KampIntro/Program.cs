using System;


namespace _1_KampIntro
{
    class Program
    {
        static void Main(string[] args)
        {

            //DEĞİŞKENLER
            string isim = "Furkan Ekici";
            int yas = 23;
            long buyukSayi = 32154687874;
            double faiz = 2.15;
            bool sistemeGirisYapildiMi = false;
            
            Console.WriteLine(isim);

            //IF-ELSE YAPISI
            if(sistemeGirisYapildiMi == true){

                Console.WriteLine("Sisteme giriş yapıldı");
            }
            else{

                Console.WriteLine("Giriş yap!");
            }


            //DÖNGÜLER

            //array tanımlama
            string[] kurslar = new string[] { "C#", "Java", "NodeJS" };

            Console.WriteLine("\nKurslar :");
            for(int i = 0; i < kurslar.Length; i++) {//FOR
                Console.WriteLine(kurslar[i]+"(FOR)");
            }

            foreach(string kurs in kurslar) {//FOR-EACH
                Console.WriteLine(kurs+"(FOR-EACH)");
            }
            






        }
    }
}
