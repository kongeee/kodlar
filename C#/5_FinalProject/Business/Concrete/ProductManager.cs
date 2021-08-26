using Business.Abstract;
using Business.Constants;
using Core.Utilities.Results;
using DataAccess.Abstract;
using DataAccess.Concrete.InMemory;
using Entitites.Concrete;
using Entitites.DTOs;
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

        public IResult Add(Product product) {

            //business codes
            if (product.ProductName.Length < 2) {
                return new ErrorResult(Messages.ProductNameInvalid);
            }

            _productDal.Add(product);
            return new SuccessResult(Messages.ProductAdded);
        }

        public IDataResult<List<Product>> GetAll() {

            //iş kodları...
            //yetki var mi kontrol edilir..
            //diger kontroller yapilir..
            if(DateTime.Now.Hour == 22) {//saat 10 ise getall yapılırken hata ver
                return new ErrorDataResult<List<Product>>(Messages.MaintenanceTime);
            }


            //uygunsa
            return new SuccessDataResult<List<Product>>(_productDal.GetAll(), Messages.ProductsListed);//data access katmanindaki GetAll metodunı cagirdik
        }

        public IDataResult<List<Product>> GetAllByCategoryId(int id) {
            return new SuccessDataResult<List<Product>>(_productDal.GetAll(p => p.CategoryId == id));//zaten Dal kısmında GetAll içine filtre yazma yetkisi vermiştik
        }

        public IDataResult<Product> GetById(int productId) {
            return new SuccessDataResult<Product>(_productDal.Get(p => p.ProductId == productId));
        }

        public IDataResult<List<Product>> GetByUnitPrice(decimal min, decimal max) {
            return new SuccessDataResult<List<Product>>(_productDal.GetAll(p => p.UnitPrice >= min && p.UnitPrice <= max));
        }

        public IDataResult<List<ProductDetailDTO>> GetProductDetails() {
            if (DateTime.Now.Hour == 13) {
                return new ErrorDataResult<List<ProductDetailDTO>>(Messages.MaintenanceTime);
            }
            return new SuccessDataResult<List<ProductDetailDTO>>(_productDal.GetProductDetails());
        }
    }
}
