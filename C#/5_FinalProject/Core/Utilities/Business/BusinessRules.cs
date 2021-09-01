using Core.Utilities.Results;
using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Business {

    //bu yapıda hata mesajı da döndürülür
    public class BusinessRules {
        public static IResult Run(params IResult[] logics) { //logic = her bir iş kuralı
            foreach (var logic in logics) {
                if (!logic.Success) {
                    return logic;
                }
               
            }
            return null;

        }
    }
}
