using System;
using System.Collections.Generic;
using System.Text;

namespace OOP3 {
    //Burada kredi basvuru islemleri yapilacak
    class BasvuruManager {

        //Burada method injection yapilmaktadir
        public void BasvuruYap(IKrediManager krediManager, List<ILoggerService> loggerServices) {//birden fazla loglama turu kullanmak isteyebiliriz
            //Başvuran kişinin bilgilerinin değerlendirildiği kodlar
            //...
            //Krediyi hesapla(hangi kredimanageri gonderirsek onun hesapla metodu calisir)
            krediManager.Hesapla();
            foreach (var logger in loggerServices) {
                logger.Log();
            }
        }

        //Burada birden fazla krediyi ayni anda hesaplayarak aralarinda karsilastirma yapabiliriz
        public void KrediBilgilendirmesiYap(List<IKrediManager> krediler) {//liste kullanarak birden fazla krediyi tutariz
            foreach(var kredi in krediler) {
                kredi.Hesapla();
            }
        }
    }
}
