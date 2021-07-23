using Core.DataAccess.EntityFramework;
using DataAccess.Abstract;
using Entitites.Concrete;
using Entitites.DTOs;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Linq.Expressions;
using System.Text;

namespace DataAccess.Concrete.EntityFramework {
    //EfentityRepositoryBase in içinde IProductDal ın istediği operasyonlarol olduğu için bir sorun kalmıyor
    public class EfProductDal : EfEntityRepositoryBase<Product, NorthwindContext>, IProductDal {

        //Burada join yapacağız
        public List<ProductDetailDTO> GetProductDetails() {
            using (NorthwindContext context = new NorthwindContext()) {
                var result = from p in context.Products
                             join c in context.Categories
                             on p.CategoryId equals c.CategoryId
                             select new ProductDetailDTO { 
                                 ProductId = p.ProductId, CategoryName = c.CategoryName, ProductName = p.ProductName, UnitInStock = p.UnitsInStock 
                             };
                return result.ToList();
            }


        }
    }
}
