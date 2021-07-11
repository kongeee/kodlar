using System;
using System.Collections.Generic;
using System.Text;

namespace OOP1 {

    //Varlik sinifi
    class Product {
        public int Id { get; set; }//primary key
        public int CategoryId { get; set; }//foreign key
        public string  ProductName { get; set; }
        public double UnitPrice { get; set; }
        public int UnitsInStock { get; set; }

    }
}
