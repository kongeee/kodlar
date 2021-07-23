using Core.DataAccess;
using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Text;

namespace DataAccess.Abstract {
    public interface IOrderDal:IEntityRepository<Order> {
    }
}
