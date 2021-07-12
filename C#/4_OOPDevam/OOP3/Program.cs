using System;
using System.Collections.Generic;

namespace OOP3 {
    class Program {
        static void Main(string[] args) {
            //Bu derste abstarct siniflari (interface) ogrenecegiz
            Console.WriteLine("------------------Kredi İsimleri-----------------");
            //Burada kredilerin oldugu butonlar simule edilmistir
            IKrediManager ihtiyacKrediManager, tasitKrediManager, konutKrediManager;

            ihtiyacKrediManager = new IhtiyacKrediManager();
            ihtiyacKrediManager.IsimDonder();

            tasitKrediManager = new TasitKrediManager();
            tasitKrediManager.IsimDonder();

            konutKrediManager = new KonutKrediManager();
            konutKrediManager.IsimDonder();

            Console.WriteLine("-------------------Kredi Başvurusu------------------");
            //Burada ise kredi basvuru operasyonu simule edilmistir(Basvuru yap butonuna tiklaninca calisacak kisim)
            BasvuruManager basvuruManager = new BasvuruManager();
            basvuruManager.BasvuruYap(tasitKrediManager,
                new List<ILoggerService> { new DatabaseLoggerService(), new SmsLoggerService() });//buraya hangi krediyi ve logger i istersek verebiliriz

            Console.WriteLine("----------------Kredi Ön Bilgilendirme---------------------");
            //Musteri n tane kredi hakkinda bilgi almak isterse
            List<IKrediManager> krediler = new List<IKrediManager>() { ihtiyacKrediManager, konutKrediManager };
            basvuruManager.KrediBilgilendirmesiYap(krediler);



        }
    }
}
