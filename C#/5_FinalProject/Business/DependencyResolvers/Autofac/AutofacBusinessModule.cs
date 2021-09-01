using Autofac;
using Autofac.Extras.DynamicProxy;
using Business.Abstract;
using Business.Concrete;
using Castle.DynamicProxy;
using Core.Utilities.Interceptors;
using DataAccess.Abstract;
using DataAccess.Concrete.EntityFramework;
using System;
using System.Collections.Generic;
using System.Text;

namespace Business.DependencyResolvers.Autofac {
    public class AutofacBusinessModule : Module{

        //Autofac ile artık IProductService productService = new ProductManager(new EfProductDal) yazmıyoruz
        //bunun yerine IProductService oluşturuyoruz ve diğerlerini kendisi oluşturuyor

        protected override void Load(ContainerBuilder builder) {
            //birisi IProductService isterse arkaplanda bir ProductManager oluştur ve onu ver
            builder.RegisterType<ProductManager>().As<IProductService>().SingleInstance();
            builder.RegisterType<EfProductDal>().As<IProductDal>().SingleInstance();

            builder.RegisterType<CategoryManager>().As<ICategoryService>().SingleInstance();
            builder.RegisterType<EfCategoryDal>().As<ICategoryDal>().SingleInstance();

            var assembly = System.Reflection.Assembly.GetExecutingAssembly();

            builder.RegisterAssemblyTypes(assembly).AsImplementedInterfaces()
                .EnableInterfaceInterceptors(new ProxyGenerationOptions() {
                    Selector = new AspectInterceptorSelector()
                }).SingleInstance();

        }
    }
}
