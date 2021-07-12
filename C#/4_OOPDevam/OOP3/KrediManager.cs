using System;
using System.Collections.Generic;
using System.Text;

namespace OOP3 {
    //Bu bir interface, tum alt siniflar Hesaplama isini ayri ayri ele alir onun icin Hesaplayi overload ederler
    //interface isimleri I harfi ile baslar boylece onun interface oldugu daha kolay anlasilir
    interface IKrediManager {
        public void Hesapla();
        public void IsimDonder();
    }
}
