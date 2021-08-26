using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Results {
    public class Result : IResult {
        
        //mesajlı
        public Result(bool success, string message):this(success) {//eğer mesaj gönderilmemişse aşağıdaki const
            //çalışır. Eğer mesaj gönderilmişse bu const çalışır. this(success) demek aşağıdaki constu çalıştır demektir
            //Böylece kod tekrarından kaçınmış olduk Success=success işi aşağıda yapılıyordu zaten
            Message = message;
            
        }
        //mesajsız
        public Result(bool success) {
            Success = success;
        }

        public bool Success { get; }
        public string Message { get; }

        
    }
}
