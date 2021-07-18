using Business.Abstract;
using DataAccess.Abstract;
using DataAccess.Concrete.InMemory;
using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.Concrete {
    public class ProductManager : IProductService {

        //dependency injection yaptik cunku business ve data access birbirine baglanmali
        IProductDal _productDal;

        public ProductManager(IProductDal productDal) {
            _productDal = productDal;
        }

        public List<Product> GetAll() {

            //iş kodları...
            //yetki var mi kontrol edilir..
            //dier kontroller yapilir..

            //uygunsa
            return _productDal.GetAll();//data access katmanindaki GetAll metodunı cagirdik
        }

        public List<Product> GetAllByCategoryId(int id) {
            return _productDal.GetAll(p => p.CategoryId == id);//zaten Dal kısmında GetAll içine filtre yazma yetkisi vermiştik
        }

        public List<Product> GetByUnitPrice(decimal min, decimal max) {
            return _productDal.GetAll(p => p.UnitPrice >= min && p.UnitPrice <= max);
        }
    }
}
