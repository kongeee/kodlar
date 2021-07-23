using Core.Entities;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Linq.Expressions;
using System.Text;

namespace Core.DataAccess.EntityFramework {
    public class EfEntityRepositoryBase<TEntity, TContext> : IEntityRepository<TEntity>
        where TEntity:class, IEntity, new()
        where TContext:DbContext, new(){

        public void Add(TEntity entity) {

            //Entity Framework e basladik
            //using bitince Garbage Collector contex i aninda toplar(daha performansli yani)
            using (TContext context = new TContext()) {

                var addedEntity = context.Entry(entity);//gelen nesnin referansini yakala
                addedEntity.State = EntityState.Added;//onu DB ye ekle
                context.SaveChanges(); //islemleri onayla

            }
        }

        public void Delete(TEntity entity) {
            using (TContext context = new TContext()) {

                var deletedEntity = context.Entry(entity);
                deletedEntity.State = EntityState.Deleted;
                context.SaveChanges();

            }
        }

        public TEntity Get(Expression<Func<TEntity, bool>> filter) {
            //tek data getirecek
            using (TContext context = new TContext()) {
                return context.Set<TEntity>().SingleOrDefault(filter);

            }

        }

        public List<TEntity> GetAll(Expression<Func<TEntity, bool>> filter = null) {
            using (TContext context = new TContext()) {
                //filtre yoksa tüm datayı getir, varsa bu filteryi uygulayıp datları öyle getir
                return filter == null ? context.Set<TEntity>().ToList() : context.Set<TEntity>().Where(filter).ToList();

            }
        }

        public void Update(TEntity entity) {
            using (TContext context = new TContext()) {

                var updatedEntity = context.Entry(entity);
                updatedEntity.State = EntityState.Modified;
                context.SaveChanges();

            }
        }


    }
}
