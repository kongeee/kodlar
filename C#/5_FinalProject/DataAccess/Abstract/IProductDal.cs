using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Text;

namespace DataAccess.Abstract {
    //I->interface, Product->hangi tablo, Dal->Data Access Layer (hangi katman oldugu)
    public interface IProductDal {

        
        List<Product> GetAll();  //tum urunleri listeleme operasyonu
        void Add(Product product);
        void Update(Product product);
        void Delete(Product product);

        List<Product> GetAllByCategoryId(int categoryId);


    }
}
