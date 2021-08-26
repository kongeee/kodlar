using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Results {
    public class ErrorResult:Result {
        //mesajlı
        public ErrorResult(string message) : base(false, message) {

        }

        //mesajsız
        public ErrorResult() : base(false) {

        }
    }
}
