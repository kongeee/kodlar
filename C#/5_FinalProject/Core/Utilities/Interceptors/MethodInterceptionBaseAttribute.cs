
using Castle.DynamicProxy;
using System;


//https://github.com/engindemirog/NetCoreBackend/tree/master/Core/Utilities/Interceptors buradan aldık
namespace Core.Utilities.Interceptors {
    [AttributeUsage(AttributeTargets.Class | AttributeTargets.Method, AllowMultiple = true, Inherited = true)]
    public abstract class MethodInterceptionBaseAttribute : Attribute, IInterceptor {
        public int Priority { get; set; }

        public virtual void Intercept(IInvocation invocation) {

        }
    }
}
