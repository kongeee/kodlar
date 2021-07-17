﻿using DataAccess.Abstract;
using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace DataAccess.Concrete.InMemory {
    //Bu sinif Ramde bir DB varmis gibi davranir yani simule eder(Asil SQL EntityFramework te)

    //InMemory->Teknoloji adi, Product->Ilgili veritabani nesnesi, Dal->katman ismi
    public class InMemoryProductDal : IProductDal {
        
        List<Product> _products;
        //constructor
        public InMemoryProductDal() {
            //yeni urunler olusturuyoruz(simule)
            _products = new List<Product> {
                new Product{ ProductId=1, CategoryId=1, ProductName="Bardak", UnitPrice=15, UnitsInStock=15},
                new Product{ ProductId=2, CategoryId=1, ProductName="Kamera", UnitPrice=500, UnitsInStock=3},
                new Product{ ProductId=3, CategoryId=2, ProductName="Telefon", UnitPrice=1500, UnitsInStock=2},
                new Product{ ProductId=4, CategoryId=2, ProductName="Klavye", UnitPrice=150, UnitsInStock=65},
                new Product{ ProductId=5, CategoryId=2, ProductName="Fare", UnitPrice=85, UnitsInStock=1}

            };
        }
        public void Add(Product product) {
            _products.Add(product);
        }

        public void Delete(Product product) {
            //LINQ - Language Integrated Query
            //bu yapi ile listeleri DB tablolari gibi dolasabiliyoruz

            Product productToDelete = null;

            /*
            foreach(var p in _products) {
                if(p.ProductId == product.ProductId) {
                    productToDelete = p;
                }
            }
            */


            //bir dongu yapmak yerine bunu yazdik(SingleOrDefault -> tek bir urun bulmaya yarar),(Lambda->tek satirda yukaridaki donguyu yazdik)
            //p -> foreachteki listenin her bir elemanini temsil ediyor
            productToDelete = _products.SingleOrDefault(p => p.ProductId == product.ProductId);

            _products.Remove(productToDelete);
        }

        public List<Product> GetAll() {
            return _products;
        }

        public void Update(Product product) {
            //Gelen urun id sine sahip urunu listeden bul
            Product productToUpdate = _products.SingleOrDefault(p => p.ProductId == product.ProductId);

            //Referans tip oldugu icin sunu yapabiliriz
            productToUpdate.ProductName = product.ProductName;
            productToUpdate.CategoryId = product.CategoryId;
            productToUpdate.UnitPrice = product.UnitPrice;
            productToUpdate.UnitsInStock = product.UnitsInStock;
        }
        public List<Product> GetAllByCategoryId(int categoryId) {
            //yine LINQ kullaniyoruz

            //_prodcuts icinde category id si bizim gonderdigimize esit olan urunlerden bir lsite yap ve onu dondur
            return _products.Where(p => p.CategoryId == categoryId).ToList();
        }
    }
}