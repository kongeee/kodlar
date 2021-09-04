using Castle.DynamicProxy;
using Core.CrossCuttingConcerns.Caching;
using Core.Utilities.Interceptors;
using Core.Utilities.IoC;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Extensions.DependencyInjection;

namespace Core.Aspects.Autofac.Caching {
    public class CacheAspect : MethodInterception {
        private int _duration;
        private ICacheManager _cacheManager;

        public CacheAspect(int duration = 60) {
            _duration = duration;
            _cacheManager = ServiceTool.ServiceProvider.GetService<ICacheManager>();
        }

        public override void Intercept(IInvocation invocation) {
            var methodName = string.Format($"{invocation.Method.ReflectedType.FullName}.{invocation.Method.Name}");//namespace ve metod ismini alır
            var arguments = invocation.Arguments.ToList();//metodun argümanlarını listeye atar
            var key = $"{methodName}({string.Join(",", arguments.Select(x => x?.ToString() ?? "<Null>"))})";
            if (_cacheManager.IsAdd(key)) {//eğer keye sahip veri cache de varsa o değeri döndür
                invocation.ReturnValue = _cacheManager.Get(key);
                return;
            }
            invocation.Proceed();//yoksa metodu çalıştırmaya devam et
            _cacheManager.Add(key, invocation.ReturnValue, _duration);//cache ekle
        }
    }
}
