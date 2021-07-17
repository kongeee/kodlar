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
    }
}
