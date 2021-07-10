using System;

namespace _2_ClassIntro {
    class Program {
        static void Main(string[] args) {

            //Obje oluşturma
            Kurs kurs1 = new Kurs();
            kurs1.KursAdi = "Java";
            kurs1.Egitmen = "Engin Demiroğ";
            kurs1.IzlenmeOrani = 84;

            Kurs kurs2 = new Kurs();
            kurs2.KursAdi = "C#";
            kurs2.Egitmen = "Furkan Ekici";
            kurs2.IzlenmeOrani = 47;

            Kurs kurs3 = new Kurs();
            kurs3.KursAdi = "JavaScript";
            kurs3.Egitmen = "Eren Ekici";
            kurs3.IzlenmeOrani = 66;

            //class array
            Kurs[] kurslar = new Kurs[] { kurs1, kurs2, kurs3 };

            foreach(Kurs kurs in kurslar) {//Kurs yerine var da yazabilirdik. -> foreach(var kurs in kurslar)
                Console.WriteLine(kurs.KursAdi + " : " + kurs.Egitmen + "\n" + kurs.IzlenmeOrani + "% izlendi\n");
            }


        }
    }


    //CLASS OLUSTURMA
    class Kurs {
        public string KursAdi { get; set; }
        public string Egitmen { get; set; }

        public int IzlenmeOrani { get; set; }
    }
}
