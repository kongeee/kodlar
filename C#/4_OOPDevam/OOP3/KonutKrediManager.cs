using System;
using System.Collections.Generic;
using System.Text;

namespace OOP3 {
    class KonutKrediManager : IKrediManager {//konut kredisi de bir kredidir ve icinde kendine ozel hesapla metodu vardir
        public void Hesapla() {
            Console.WriteLine("Konut kredisi hesaplandı");
        }

        public void IsimDonder() {
            Console.WriteLine("Konut Kredisi");
        }
    }
}
