using Core.Utilities.Results;
using Entitites.Concrete;
using Entitites.DTOs;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.Abstract {
    public interface IProductService {
        IDataResult<List<Product>> GetAll();//tum urunleri getir
        IDataResult<List<Product>> GetAllByCategoryId(int id);//Verilen Kategorideki tum urunleri getir
        IDataResult<List<Product>> GetByUnitPrice(decimal min, decimal max);//belirl fiyat aralığındaki ürünleri getir
        IDataResult<List<ProductDetailDTO>> GetProductDetails();//ürünleri kategori isimleri ile getirir(DTO sayesinde)
        IDataResult<Product> GetById(int productId);//Tek bir urun getir
        IResult Add(Product product);//Urun ekle
        
    }
}
