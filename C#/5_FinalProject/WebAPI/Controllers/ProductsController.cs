using Business.Abstract;
using Business.Concrete;
using DataAccess.Concrete.EntityFramework;
using Entitites.Concrete;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

//Verilerin dış dünyaya açıldıpı yer

namespace WebAPI.Controllers {
    [Route("api/[controller]")]
    [ApiController]  //Attribute -> Aşağıdaki class bir controller dır demek
    public class ProductsController : ControllerBase {

        //Loosely coupled
        IProductService _productService;

        //IoC Container -- inversion of Control (bununla productservice ' e bir manager verecez)
        //WebAPI katmanında Startup.cs'ye git ve ConfigureServices kısmına gerekenleri ekle
        public ProductsController(IProductService productService) {
            _productService = productService;
        }

        [HttpGet("getall")]
        public IActionResult GetAll() {

           
            var result = _productService.GetAll();//IDataResult döner
            if (result.Success) {
                return Ok(result); //işlem başarılıysa datayı Ok durum koduyla döndür
            }
            return BadRequest(result);
        }


        [HttpGet("getbyid")]
        public IActionResult GetById(int id) {
            var result = _productService.GetById(id);
            if (result.Success) {
                return Ok(result);
            }
            return BadRequest(result);
        }

        [HttpGet("getbycategoryid")]
        public IActionResult GetByCategoryId(int categoryId) {
            var result = _productService.GetAllByCategoryId(categoryId);
            if (result.Success) {
                return Ok(result);
            }
            return BadRequest(result);
        }

        [HttpPost("add")]
        public IActionResult Add(Product product) {
            var result = _productService.Add(product);//bu IDataResult değişdir IResult tur
            if (result.Success) {
                return Ok(result);
            }
            return BadRequest(result);
        }

        
    }
}
