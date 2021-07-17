using Business.Abstract;
using Business.Concrete;
using DataAccess.Concrete.InMemory;
using System;

namespace ConsoleUI {
    class Program {
        static void Main(string[] args) {
            //productmanager newlerken hangi data accessi kullancagimizi da vermek zorudnayiz(injectiondan dolayi)
            IProductService productService = new ProductManager(new InMemoryProductDal());
            foreach (var product in productService.GetAll()) {

                Console.WriteLine(product.ProductName);
            }
        }
    }
}
