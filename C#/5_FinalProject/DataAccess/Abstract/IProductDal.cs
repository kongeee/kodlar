using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Text;

namespace DataAccess.Abstract {
    //I->interface, Product->hangi tablo, Dal->Data Access Layer (hangi katman oldugu)
    public interface IProductDal:IEntityRepository<Product> {

        
       


    }
}
