using Entitites.Concrete;
using FluentValidation;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.ValidationRules.FluentValidation {
    public class ProductValidator:AbstractValidator<Product> {

        public ProductValidator() {
            RuleFor(p => p.ProductName).MinimumLength(2);
            RuleFor(p => p.ProductName).NotEmpty();
            RuleFor(p => p.UnitPrice).NotEmpty();
            RuleFor(p => p.UnitPrice).GreaterThan(0);

            //kategorisi 1 olan ürünlerin fiyatı en az 10 olmalıdır
            RuleFor(p => p.UnitPrice).GreaterThanOrEqualTo(10).When(p => p.CategoryId == 1);

            //ürün isimleri 'A' harfi ile başlamalı(kendi kurallarımızı nasıl yazarız onun bir örneği)
            RuleFor(p => p.ProductName).Must(StartWithA).WithMessage("Ürinler A harfi ile başlamalı");
        }

        private bool StartWithA(string arg) { //arg yukarıdaki productName ' e eşittir
            return arg.StartsWith('A'); //true ya da false döner
        }
    }
}
