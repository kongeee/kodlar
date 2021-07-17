using System;
using System.Collections.Generic;
using System.Linq;

//Linq ile Arrayleri DB tablosu gibi dusunerek metod seklinde sorgular yazabiliriz

namespace LinqProject {
    class Program {
        static void Main(string[] args) {

            //Bir Veritabanini simule ediyoruz

            //Category List
            List<Category> categories = new List<Category> {
                new Category{ CategoryId=1, CategoryName="Bilgisayar"},
                new Category{ CategoryId=2, CategoryName="Telefon"}

            };

            //Product List
            List<Product> products = new List<Product> { 
                new Product{ ProductId=1, CategoryId=1, ProductName="Acer Laptop", QuantityPerUnit="32 GB RAM", UnitPrice=10000, UnitsInStock=5},
                new Product{ ProductId=2, CategoryId=1, ProductName="Asus Laptop", QuantityPerUnit="16 GB RAM", UnitPrice=8000, UnitsInStock=3},
                new Product{ ProductId=3, CategoryId=1, ProductName="HP Laptop", QuantityPerUnit="8 GB RAM", UnitPrice=6000, UnitsInStock=2},
                new Product{ ProductId=4, CategoryId=2, ProductName="Samsung Telefon", QuantityPerUnit="4 GB RAM", UnitPrice=5000, UnitsInStock=15},
                new Product{ ProductId=5, CategoryId=2, ProductName="Apple Telefon", QuantityPerUnit="6 GB RAM", UnitPrice=8000, UnitsInStock=0}
            };

            //Fiyati 5000 den fazla ve Stokta 3 taneden fazla olan urunlerin isimlerini cekmek istersek
            Console.WriteLine("---------Algoritmik---------");
            foreach(var product in products) {
                if(product.UnitPrice > 5000 && product.UnitsInStock > 3) {
                    Console.WriteLine(product.ProductName);
                }
            }

            Console.WriteLine("---------LINQ---------");
            //sarta uyan elemanlari bir lsiteye atar
            var result = products.Where(product => product.UnitPrice > 5000 && product.UnitsInStock > 3);//Where metodu kosul bildirir
            foreach (var product in result) {
                Console.WriteLine(product.ProductName);

            }

            //Any metodu bir listenin icinde belirtilen sarta uygun eleman olup olmadigini dondurur(bool doner)
            var anyResult = products.Any(p => p.ProductName == "Acer Laptop");
            Console.WriteLine("Any metodu : "+anyResult);

            //Find metodu listeden buldugu sarta uyan nesneyi dondurur(Any bool, Find nesne doner)
            var findResult = products.Find(p => p.ProductId == 2);
            Console.WriteLine("Find metodu : "+findResult.ProductName);

            //FindAll metodu sarta uya tum urunleri bir liste halinde getirir(Where gibi)
            var findAllResult = products.FindAll(p => p.ProductName.Contains("top"));//isminde "top" gecen urunler
            Console.WriteLine("FindAll metodu :");
            foreach (var product in findAllResult) {
                Console.WriteLine("   -"+product.ProductName);

            }

            //OrderBy ve OrderByDescending metodlari ile artan veya azalan sirada siralama yapariz
            //Eger fiyati ayni olanlari da ismi gore azalan veya artan sirada listelemek istersek 64. satirin sonuna ThenBy veya ThenBy Descending koy(OrderBy in ici gibi yaz)
            //isminde "top" gecen urunlerin fiyatlarini artan sirada listele
            var orderResult = products.Where(p => p.ProductName.Contains("top")).OrderBy(p => p.UnitPrice);
            Console.WriteLine("OrderBy metodu :");
            foreach (var product in orderResult) {
                Console.WriteLine("   -" + product.ProductName + " : " + product.UnitPrice+"$");

            }

            Console.WriteLine("---------SQL'e benzer bir LINQ kullanimi---------");
            //Bu sekilde bi yazim da mevcut
            var Result2 = from p in products
                          where p.UnitPrice > 6000 //baska sart yazmak istersek && koyariz
                          //orderby p.ProductName (sonuna ascending veya descending), p.UnitPrice (ascending veya descending)
                          select p;
            foreach (var product in Result2) {
                Console.WriteLine(product.ProductName);
            }

            //Burada DTO yapisini gorecegiz
            Console.WriteLine("\n DTO : ");
            
            var dtoResult = from p in products
                          where p.UnitPrice > 6000 
                          orderby p.ProductName ascending
                          select new ProductDto { ProductId=p.ProductId, ProductName=p.ProductName, UnitPrice=p.UnitPrice};
            foreach (var product in dtoResult) {
                Console.WriteLine(product.ProductName);
            }

            //Burada Join islemini gorecegiz
            Console.WriteLine("\n Join : ");

            var joinResult = from p in products
                             join c in categories
                             on p.CategoryId equals c.CategoryId
                             select new ProductDto { ProductId = p.ProductId, CategoryName = c.CategoryName, ProductName = p.ProductName, UnitPrice = p.UnitPrice };

            foreach (var product in joinResult) {
                Console.WriteLine(product.ProductName + " : " + product.CategoryName);
            }


        }
    }

    //Data Transgfer Object -> Bir alt tablodur (Product ve Category tablolarinin join edilmis ve bazi sutunlari alinmis hali)
    class ProductDto {
        public int ProductId { get; set; }
        public string ProductName { get; set; }
        public string CategoryName { get; set; } //Product ta sadece CategoryId var ama biz ismini istiyoruz burda (bunu join ile yapariz)
        public decimal UnitPrice { get; set; }

    }


    class Product {
        public int ProductId { get; set; }
        public int CategoryId { get; set; }
        public string ProductName { get; set; }
        public string QuantityPerUnit { get; set; }
        public decimal UnitPrice { get; set; }
        public int UnitsInStock { get; set; }

    }

    class Category {
        public int CategoryId { get; set; }
        public string CategoryName { get; set; }
    }
}
