using Business.Abstract;
using Business.Concrete;
using DataAccess.Abstract;
using DataAccess.Concrete.EntityFramework;
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.HttpsPolicy;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
using Microsoft.Extensions.Logging;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace WebAPI {
    public class Startup {
        public Startup(IConfiguration configuration) {
            Configuration = configuration;
        }

        public IConfiguration Configuration { get; }

        // This method gets called by the runtime. Use this method to add services to the container.
        public void ConfigureServices(IServiceCollection services) {
            services.AddControllers();


            /*
             * Bu k�sm� kald�r�p bununla ayn� i�i yapmas� i�in autofac kulland�k. B�ylece projede ba�ka api gelse
             * bile autofac business katman�nda oldu�u i�in sorun ya�amay�z
             * 
            //birisi IProductService isterse arkaplanda bir ProductManager olu�tur ve onu ver
            services.AddSingleton<IProductService,ProductManager>(); //buray� biz ekledik
            //birisi IProductDal isterse arkaplanda bir EfProductDal olu�tur ve onu ver
            services.AddSingleton<IProductDal, EfProductDal>(); //buray� biz ekledik
            */
        }

        // This method gets called by the runtime. Use this method to configure the HTTP request pipeline.
        public void Configure(IApplicationBuilder app, IWebHostEnvironment env) {
            if (env.IsDevelopment()) {
                app.UseDeveloperExceptionPage();
            }

            app.UseHttpsRedirection();

            app.UseRouting();

            app.UseAuthorization();

            app.UseEndpoints(endpoints => {
                endpoints.MapControllers();
            });
        }
    }
}
