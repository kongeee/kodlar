using System;

namespace GenericsIntro {
    class Program {
        static void Main(string[] args) {
            //Burada kendi List yapimizi olusturuyoruz.
            MyList<string> isimler = new MyList<string>();
            isimler.Add("Eren");
            isimler.Add("Furkan");
            isimler.Add("Busra");

            foreach(var isim in isimler.Items) {
                Console.WriteLine(isim);
            }
            Console.WriteLine("Dizi uzunlugu : " + isimler.Length);
        }
    }
}
