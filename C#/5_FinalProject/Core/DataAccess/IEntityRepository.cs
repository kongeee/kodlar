using Core.Entities;
using System;
using System.Collections.Generic;
using System.Linq.Expressions;
using System.Text;

namespace Core.DataAccess {

    //Add, Update, Delete, GetAll gibi metodlar tum Entitylerde ayni. Bu yuzden bu metodlari Generic sekilde yazariz.


    //generic constraint ile T sadece belirli ozelliklere sahip olabilir(Sadece veritabani nesnelerini vermek istiyoruz)
    //class : sadece referans tip olabilir
    //IEntity : IEntity veya onu impleme eden bir class olabilir 
    //new() : newlenebilir olmali (yani IEntity olamaz)
    public interface IEntityRepository<T> where T:class, IEntity, new() {

        List<T> GetAll(Expression<Func<T, bool>> filter=null);//Linqteki p=>p.Id == 1 gibi bir sey yazmak icin bunu olusturduk
        T Get(Expression<Func<T, bool>> filter);//tek bir data getirmek icin
        void Add(T entity);
        void Update(T entity);
        void Delete(T entity);

       
    }
}
