using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Results {

    //Ürün listesi veya tek bir ürün dönderen metodlar için REsult
    public interface IDataResult<T>:IResult {

        T Data { get; }
    }
}
