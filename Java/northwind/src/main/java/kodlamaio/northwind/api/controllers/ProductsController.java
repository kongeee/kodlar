package kodlamaio.northwind.api.controllers;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import kodlamaio.northwind.business.abstracts.ProductService;
import kodlamaio.northwind.entities.concretes.Product;

@RestController     					//Bunun bir controller oldugunu bildiriyoruz
@RequestMapping("/api/products")   		//istegin, domainde nereye yapiacagini bildirir (yani /api/products a istek gelirse asagidaki controller bunu karsilayacak)
public class ProductsController {
	
	//Api katmanini business katmanina baglamaliyiz
	private ProductService productService;
	
	@Autowired		//ProductService i impleme eden classi otomatik olarak newler
	public ProductsController(ProductService productService) {
		super();
		this.productService = productService;
	}

	@GetMapping("/getall")    			//Calistirilacak olan metod icin yazilir.(doamin/api/products/getall yazarsak api bize tum kullanicilari dondurur)
	public List<Product> getAll(){
		return this.productService.getAll(); //business katmanindaki getall metodunu cagirdik orada gerekli kontroller yapilip DB ye istek atilacak sonuc da buraya gelecek
	}
}
