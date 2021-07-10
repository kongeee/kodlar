using System;
using System.Collections.Generic;
using System.Text;

namespace _3_ClassMethods {
    class SepetManager {

        public void Ekle(Product urun) {
            Console.WriteLine("Sepete Eklendi : " + urun.Ad);
        }
    }
}
