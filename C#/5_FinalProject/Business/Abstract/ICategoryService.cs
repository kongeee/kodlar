using Core.Utilities.Results;
using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.Abstract {
    public interface ICategoryService {
        IDataResult<List<Category>> GetAll();
        IDataResult<Category> GetById(int id);
    }
}
