﻿using Core.Entities;
using System;
using System.Collections.Generic;
using System.Text;

namespace Entitites.DTOs {
    public class ProductDetailDTO:IDto {
        public int ProductId { get; set; }
        public string ProductName { get; set; }
        public string CategoryName { get; set; }
        public short UnitInStock { get; set; }
    }
}
