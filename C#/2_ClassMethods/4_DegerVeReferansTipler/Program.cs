using System;

namespace _4_DegerVeReferansTipler {
    class Program {
        static void Main(string[] args) {
            /*
             Değer Tip    : int, decimal, float, double, bool, string
             Referans Tip : array, class, interface
             */


            int sayi1 = 10;
            int sayi2 = 22;
            sayi1 = sayi2;
            sayi2 = 47;
            Console.WriteLine(sayi1);//22 -> sadece değerlerle işlem yapılıyor ondan dolayı sayi1, sayi2 değişince değişmez(değer tip)

            int[] arr1 = new int[] { 1, 2, 3 };
            int[] arr2 = new int[] { 14, 25, 33 };
            arr1 = arr2;
            arr2[0] = 999;
            Console.WriteLine(arr1[0]);//999 -> referansıyla ile işlem yapılıyor onun için arr1'de değişir(referans tip)

            string a = "Ekici1";
            string b = "Furkan";
            a = b;
            b = "Zartzort";
            Console.WriteLine(a);

        }
    }
}
