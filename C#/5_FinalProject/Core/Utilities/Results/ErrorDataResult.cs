using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Results {
    public class ErrorDataResult<T> : DataResult<T> {

        //mesajlı
        public ErrorDataResult(T data, string message) : base(data, false, message) {

        }

        //mesajsız
        public ErrorDataResult(T data) : base(data, false) {

        }

        //boş veri gönderir (default demek T ye hangi tüp beri geliyorsa onun boş hali demektir)
        public ErrorDataResult(string message) : base(default, false, message) {

        }

        //ne mesaj ne data döner
        public ErrorDataResult() : base(default, false) {

        }

    }
}
