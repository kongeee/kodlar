using Entitites.Concrete;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Text;

namespace DataAccess.Concrete.EntityFramework {
    //Context : DB tablolari ile proje classlarini baglar
    public class NorthwindContext:DbContext {//Entity Frameworkten DbContext abstract sinifini kullaniyoruz

        //Veritabaninin yerini gosterir
        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder) {
            //normalde \ kacis karateridir basina @ koyunca \ kendisi gibi algilanir
            //Server = Serverin yeri, DataBase = hangi DB ile calisacagiz, Trusted_Connection = true yapinca k.adi sifre istemez
            optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=Northwind;Trusted_Connection=true");

        }

        //tablo ve entity classlarinin baglanmasi
        public DbSet<Product> Products { get; set; } //Product sinifini DB deki Products ile bagla
        public DbSet<Category> Categories { get; set; }
        public DbSet<Customer> Customers { get; set; }
        public DbSet<Order> Orders { get; set; }

    }
}
