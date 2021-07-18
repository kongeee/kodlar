using DataAccess.Abstract;
using Entitites.Concrete;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq.Expressions;
using System.Text;

namespace DataAccess.Concrete.EntityFramework {
    public class EfProductDal : IProductDal {
        public void Add(Product entity) {

            //Entity Framework e basladik
            //using bitince Garbage Collector contex i aninda toplar(daha performansli yani)
            using (NorthwindContext context = new NorthwindContext()) {

                var addedEntity = context.Entry(entity);//gelen nesnin referansini yakala
                addedEntity.State = EntityState.Added;//onu DB ye ekle
                context.SaveChanges(); //islemleri onayla

            }
        }

        public void Delete(Product entity) {
            using (NorthwindContext context = new NorthwindContext()) {

                var deletedEntity = context.Entry(entity);
                deletedEntity.State = EntityState.Deleted;
                context.SaveChanges();

            }
        }

        public Product Get(Expression<Func<Product, bool>> filter) {
            throw new NotImplementedException();
        }

        public List<Product> GetAll(Expression<Func<Product, bool>> filter = null) {
            throw new NotImplementedException();
        }

        public void Update(Product entity) {
            using (NorthwindContext context = new NorthwindContext()) {

                var updatedEntity = context.Entry(entity);
                updatedEntity.State = EntityState.Modified;
                context.SaveChanges();

            }
        }
    }
}
