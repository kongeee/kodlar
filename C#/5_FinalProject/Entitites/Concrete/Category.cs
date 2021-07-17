using Entitites.Abstract;
using System;
using System.Collections.Generic;
using System.Text;

namespace Entitites.Concrete {
    public class Category: IEntity {
        public int CategoryId { get; set; }
        public string CategoryName { get; set; }
    }
}
