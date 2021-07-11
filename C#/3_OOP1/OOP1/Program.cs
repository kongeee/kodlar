using System;

namespace OOP1 {
    class Program {
        static void Main(string[] args) {

            Product product1 = new Product();
            product1.Id = 1;
            product1.CategoryId = 2; //Ornagin mobilya kategorisinin id degeri 2 olsun
            product1.ProductName = "Masa";
            product1.UnitPrice = 599.99;
            product1.UnitsInStock = 10; //stokta 10 tane var

            //Bir baska obje olusturma yontemi(normal paranter degiz suslu parantez kullandik)
            Product product2 = new Product {Id=2, CategoryId=3, ProductName="Bilgisayar", UnitPrice=3999, UnitsInStock=5 };

            //Product manager
            ProductManager productManager = new ProductManager();
            productManager.Add();
        }
    }
}
