using Business.Abstract;
using Business.Concrete;
using DataAccess.Concrete.EntityFramework;
using DataAccess.Concrete.InMemory;
using System;

namespace ConsoleUI {
    class Program {
        static void Main(string[] args) {
            //productmanager newlerken hangi data accessi kullancagimizi da vermek zorudnayiz(injectiondan dolayi)
            IProductService productService = new ProductManager(new EfProductDal());
            foreach (var product in productService.GetByUnitPrice(20, 75)) {

                Console.WriteLine(product.ProductName+" : "+product.UnitPrice);
            }
        }
    }
}
