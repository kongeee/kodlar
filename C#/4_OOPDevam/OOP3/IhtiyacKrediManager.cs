using System;
using System.Collections.Generic;
using System.Text;

namespace OOP3 {
    class IhtiyacKrediManager : IKrediManager {
        public void Hesapla() {
            Console.WriteLine("İhtiyaç kredisi hesaplandı");
        }

        public void IsimDonder() {
            Console.WriteLine("İhtiyaç Kredisi");
        }
    }
}
