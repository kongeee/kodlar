using Castle.DynamicProxy;
using Core.Utilities.Interceptors;
using System;
using System.Collections.Generic;
using System.Text;
using System.Transactions;

namespace Core.Aspects.Autofac.Transaction {
    public class TransactionScopeAspect : MethodInterception {
        public override void Intercept(IInvocation invocation) {
            using (TransactionScope transactionScope = new TransactionScope()) {
                try {
                    invocation.Proceed(); //metodu çalıştır
                    transactionScope.Complete();//metod hata vermezse buraya gelecek ve transaction tamamlanacak
                }
                catch (System.Exception e) {
                    transactionScope.Dispose();//metodda hata verirse metodu sanki hiç çalışmamış gibi yapacak
                    throw;
                }
            }
        }
    }
}
