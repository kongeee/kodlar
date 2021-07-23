
using Core.Entities;
using System;
using System.Collections.Generic;
using System.Text;

namespace Entitites.Concrete {
    //tum katmanlardan ulasilabilmesi icin public yazdik basina

    //bosta class kalmasin(yani bir class ya inheritance ile bir class ya da interface almali)
    public class Product : IEntity {
        public int ProductId { get; set; }
        public int CategoryId { get; set; }
        public string ProductName { get; set; }
        public short UnitsInStock { get; set; }
        public decimal UnitPrice { get; set; }
    }
}
