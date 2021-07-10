using System;
using System.Collections.Generic;
using System.Text;

namespace _3_ClassMethods {
    class Product {

        //snippet : prop yazıp (property anlamına gelir) 2 kere tab yapınca bir özellik oluşturur(ürün fiyatı, ismi gibi)

        public int Id { get; set; }
        public string Ad { get; set; }
        public double Fiyat { get; set; }
        public string Aciklama { get; set; }
        public int StokAdedi { get; set; }
    }
}
