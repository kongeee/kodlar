using System;
using System.Collections.Generic;
using System.Text;


//Temel voidler için başlangıç (Örneğin businesstaki Add metodu için dçnüş tüpü yerine Iresult oldu böylece
//işlemin başarı durumunu ve işlem mesajını döndürebildik)
namespace Core.Utilities.Results {
    public interface IResult {

        bool Success { get; }
        string Message { get; }
    }
}
