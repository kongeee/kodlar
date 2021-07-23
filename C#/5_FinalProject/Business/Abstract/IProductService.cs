using Entitites.Concrete;
using Entitites.DTOs;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.Abstract {
    public interface IProductService {
        List<Product> GetAll();//tum urunleri getir
        List<Product> GetAllByCategoryId(int id);//Verilen Kategorideki tum urunleri getir
        List<Product> GetByUnitPrice(decimal min, decimal max);//belirl fiyat aralığındaki ürünleri getir
        List<ProductDetailDTO> GetProductDetails();//ürünleri kategori isimleri ile getirir(DTO sayesinde)

    }
}
