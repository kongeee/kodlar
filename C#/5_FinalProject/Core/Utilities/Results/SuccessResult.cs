using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Results {
    public class SuccessResult:Result {

        //mesajlı
        public SuccessResult(string message):base(true, message) {

        }

        //mesajsız
        public SuccessResult() : base(true) {

        }
    }
}
