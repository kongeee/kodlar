using Business.Abstract;
using DataAccess.Abstract;
using Entitites.Concrete;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.Concrete {
    public class CategoryManager : ICategoryService {

        ICategoryDal _categoryDal;

        public CategoryManager(ICategoryDal categoryDal) {
            _categoryDal = categoryDal;
        }

        public List<Category> GetAll() {
            return _categoryDal.GetAll();
        }

        public Category GetById(int id) {
            return _categoryDal.Get(category => category.CategoryId == id);
        }
    }
}
