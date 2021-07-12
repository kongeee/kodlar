using System;
using System.Collections.Generic;
using System.Text;

namespace OOP3 {
    class TasitKrediManager : IKrediManager {
        public void Hesapla() {
            Console.WriteLine("Taşıt kredisi hesaplandı");
        }

        public void IsimDonder() {
            Console.WriteLine("Taşıt Kredisi");
        }
    }
}
