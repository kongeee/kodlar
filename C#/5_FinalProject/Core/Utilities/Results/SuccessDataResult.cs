using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Results {
    public class SuccessDataResult<T>:DataResult<T> {

        //mesajlı
        public SuccessDataResult(T data, string message):base(data, true, message) {

        }

        //mesajsız
        public SuccessDataResult(T data):base(data, true) {

        }

        //boş veri gönderir (default demek T ye hangi tüp beri geliyorsa onun boş hali demektir)
        public SuccessDataResult(string message) : base(default, true, message) {

        }

        //ne mesaj ne data döner
        public SuccessDataResult():base(default,true) {

        }

    }
}
