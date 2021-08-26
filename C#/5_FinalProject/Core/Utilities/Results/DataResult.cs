using System;
using System.Collections.Generic;
using System.Text;

namespace Core.Utilities.Results {
    public class DataResult<T> : Result, IDataResult<T> {

        //mesajlı
        public DataResult(T data, bool success, string message):base(success,message) {
            Data = data;
        }

        //mesajsız
        public DataResult(T data, bool success):base(success) {
            Data = data;
        }
        
        public T Data { get; }
    }
}
