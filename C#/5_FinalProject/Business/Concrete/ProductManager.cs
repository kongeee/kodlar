using Business.Abstract;
using Business.BusinessAspects.Autofac;
using Business.Constants;
using Business.ValidationRules.FluentValidation;
using Core.Aspects.Autofac.Validation;
using Core.CrossCuttingConcerns.Validation;
using Core.Utilities.Business;
using Core.Utilities.Results;
using DataAccess.Abstract;
using DataAccess.Concrete.InMemory;
using Entitites.Concrete;
using Entitites.DTOs;
using FluentValidation;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Business.Concrete {
    public class ProductManager : IProductService {

        //dependency injection yaptik cunku business ve data access birbirine baglanmali
        IProductDal _productDal;
        ICategoryService _categoryService;

        //ProductManager'a yalnızca productdal enjekte edilebilir ama diğer entitylerin servisleri kullanılabilir
        public ProductManager(IProductDal productDal, ICategoryService categoryService) {
            _productDal = productDal;
            _categoryService = categoryService;
        }

        [SecuredOperation("product.add,admin")]
        [ValidationAspect(typeof(ProductValidator))]
        public IResult Add(Product product) {

            //validiton : verilerin yapısal durumunun uyumuna doğrulama denir(kişinin adı min2 harf olmalı gibi)(AoP ile hallettik)
            //iş kuralı : (kişinin notu 80 ise sınavdan geçsin)(burada yazdıklarımız)


            IResult result = BusinessRules.Run(
                CheckIfCategoryProductCountOfCategoryCorrect(product.CategoryId),
                CheckIfProductNameExists(product.ProductName),
                CheckIfCategoryLimitExceeded()
                );

            if (result != null) {
                return result;
            }
            
            _productDal.Add(product);
            return new SuccessResult(Messages.ProductAdded);

        }


        [ValidationAspect(typeof(ProductValidator))]
        public IResult Update(Product product) {

            CheckIfCategoryProductCountOfCategoryCorrect(product.CategoryId);

            throw new NotImplementedException();
        }

        public IDataResult<List<Product>> GetAll() {

            //iş kodları...
            //yetki var mi kontrol edilir..
            //diger kontroller yapilir..

            if (DateTime.Now.Hour == 22) {//saat 22 ise getall yapılırken hata ver
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


        //İŞ KURALLARI

        //Bir kategoride en fazla 10 ürün olabilir
        private IResult CheckIfCategoryProductCountOfCategoryCorrect(int categoryId) {
            var categoryControlList = _productDal.GetAll(p => p.CategoryId == categoryId);
            if (categoryControlList.Count > 10) {
                return new ErrorResult(Messages.ErrorSmth);
            }
            return new SuccessResult();
        }

        //Aynı isimde ürün eklenemez
        private IResult CheckIfProductNameExists(string productName) {
            var result = _productDal.GetAll(p => p.ProductName == productName).Any();
            if(result) {
                return new ErrorResult(Messages.ProductNameAlreadyExists);
            }
            
            return new SuccessResult();

        }

        private IResult CheckIfCategoryLimitExceeded() {
            var result = _categoryService.GetAll().Data.Count;
            if (result > 15) {
                return new ErrorResult(Messages.CategoryLimitExceeded);
            }
            return new SuccessResult();
        }

        
    }
}
