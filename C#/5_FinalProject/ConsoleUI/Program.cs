using Business.Abstract;
using Business.Concrete;
using DataAccess.Concrete.EntityFramework;
using DataAccess.Concrete.InMemory;
using System;

namespace ConsoleUI {
    class Program {
        static void Main(string[] args) {
            ProductTest();
            //CategoryTest();
        }

        private static void CategoryTest() {
            CategoryManager categoryManager = new CategoryManager(new EfCategoryDal());
            foreach (var category in categoryManager.GetAll()) {
                Console.WriteLine("-" + category.CategoryName);
            }
        }

        private static void ProductTest() {
            //productmanager newlerken hangi data accessi kullancagimizi da vermek zorudnayiz(injectiondan dolayi)
            IProductService productService = new ProductManager(new EfProductDal());
            foreach (var product in productService.GetProductDetails()) {

                Console.WriteLine(product.ProductName + " : " + product.CategoryName);
            }
        }
    }
}
