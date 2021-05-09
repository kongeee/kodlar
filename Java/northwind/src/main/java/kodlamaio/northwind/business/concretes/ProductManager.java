package kodlamaio.northwind.business.concretes;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import kodlamaio.northwind.business.abstracts.ProductService;
import kodlamaio.northwind.dataAccess.abstracts.ProductDao;
import kodlamaio.northwind.entities.concretes.Product;

@Service  //bu class servis gorevi gorecek (yani Business katmaninda oldugunu bildiririz)
public class ProductManager implements ProductService {
	//Burada dataAccess tarafindaki Dao ya erismemiz gerekiyor (gecen dersten hatirla) (Bunlar kati baglidir o yuzden injection yapariz)
	
	private ProductDao productDao;
	
	@Autowired   //Bunun sayesinde Product manager olustururken icine ProductDao newlememiz gerekmiyor, bizim yerimize bunu yapiyor
				//Projede ProductDao nesnesi varsa onu bulup direkt olarak getiriyor(yani ProductDao dyu impleme eden bir class varsa onu newler)
	public ProductManager(ProductDao productDao) {
		super();
		this.productDao = productDao;
	}

	@Override
	public List<Product> getAll() {
		
		return this.productDao.findAll(); //burada gerekli kontroller yapilir ve dataAccess katmanina erisilir
		//findall() jpa da olan bir metoddur, tum tabloyu getirir (biz de zaten tum bilgileri sitedik)
	}

}
