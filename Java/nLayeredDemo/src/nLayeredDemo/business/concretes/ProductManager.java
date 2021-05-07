package nLayeredDemo.business.concretes;

import java.util.List;

import nLayeredDemo.business.abstracts.ProductService;
import nLayeredDemo.core.LoggerService;
import nLayeredDemo.dataAccess.abstracts.ProductDao;
import nLayeredDemo.entities.concretes.Product;

//is kodlari yazilir
public class ProductManager implements ProductService {

	//dependancy injection yapariz. Cunku burada gerekli kontrollerden gecen verinin DB'ye eklenmesi isteniyor. Bunun icin dataAccess
	//katmanina gecebilme imkanimiz olmali bunu da ProductDao interface i ile yapacagiz(Business ve dataAcces kati bagimli)
	private ProductDao productDao;
	
	//sonradan eklendi
	private LoggerService loggerService;
	
	public ProductManager(ProductDao productDao, LoggerService loggerService) {//->sag kisim sonradan eklendi
		super();
		this.productDao = productDao;
		
		//sonradan eklendi
		this.loggerService = loggerService;
	}

	@Override
	public void add(Product product) { //Aslinda bu metod ekleme yapmak icin degil. Eklenebilir mi diye kontrol etmek icin. Asil eklemeye 
									  //dataAccess katmani icerisindeki add metodu ile yapacagiz
		
		//bu sekilde kisitlmalar getirirlir
		if(product.getCategoryID() == 1) {
			System.out.println("Bu kategoride (1) urun kabul edilmiyor!!! : "+product.getName());
			return;
		}
		
		//eger bir sorun yoksa DB'ye ekliyoruz
		this.productDao.add(product);
		
		//sonradan eklendi
		this.loggerService.logToSystem(product.getName());
		
	}

	
	
	
	
	
	@Override
	public List<Product> getAll() {
		// TODO Auto-generated method stub
		return null;
	}

}
