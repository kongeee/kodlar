package nLayeredDemo;

import nLayeredDemo.business.abstracts.ProductService;
import nLayeredDemo.business.concretes.ProductManager;
import nLayeredDemo.core.JLoggerManagerAdapter;
import nLayeredDemo.dataAccess.concretes.AlternativeDao;
import nLayeredDemo.dataAccess.concretes.HibernateProductDao;
import nLayeredDemo.entities.concretes.Product;


/*
 * Bu derste cok katmanli mimariyi isledik
 * 1-)Data Access : Veritabanina ulastigimiz katmandir
 * 2-)Business    : Is kurallarini yazdigimiz katmandir.(Gerekli kontrollerin yapildigi katman)
 * 3-)API         : Kullanici ile iletisim kurdugumuz katmandir. Projemizi dis dunya ile iletisim kuracak hale getirir(farkli platformlar ile calismasina olanak saglar)
 * Yardimci Katmanlar :
 * -Entities      : Varliklari (ozellik tutucu siniflari) barindiran katmandir.(Yukaridaki her katmanla iliskilidir.)
 * -Core          : Tum sistemin ortak olarak kullandýgý kodlar burada bulunur.
 * 
 * --> Bunlari Javada package kullanarak ayiriyoruz.(Dosuayalama yapiyoruz yani). Bu package lar icerisinde concretes ve abstracts diye iki alt
 * 		package da olabilir.(Somut ve soyut classlar icin)
 * 
 * **** API, Business katmanina istekte bulunur.(Orn : kullanici urun eklemek istiyor der). Business katmani bu istegin uygun olup
 * 		olmadigini kontrol eder. Eger bir sorun yoksa (yani tum kotrollerden gecerse), Business, DataAccess i cagirir ve DataAccess de
 * 		bu urunu veritabanina ekler.
 * 
 * 		!API, dogrudan DataAccess katmanina erisemez.
 * 
 * 
 * -->Her concrete classin bir abstracti olsun.(Buna cok dikkat et)
 * ----------------------------------------------------------------------------------------------------------------------------------------------
 * List:
 * 
 * ->Arrayler statik bir yapidadir. Ornegin :
 *   int[] sayilar = {1,2,3}; dersek ve arraye elemean eklemek istersek sorun olacaktir. Bu sorunun onune gecmek icin dinamik bir yapi kullaniriz
 *   
 *   //oncelikle import etmeliyiz. import java.util.List
 *   
 *   List<Integer> sayilar = new List<Integer>();  (Burada int kullanilmaz onun yerine bunun class karsiligi kullanilir)
 *   sayilar.add(1);
 *   satilar.add(2); diyerek dinamik bir sekilde diziye veri ekleyebiliriz
 *   
 *   
 * 
 */


//!kural : Entity ler haric bir seyi newlemek iyi degildir

public class Main {

	public static void main(String[] args) {
		
		//burada yukaridaki kurali cignedik ama Spring e gecince bu sorunu cozecegiz
		ProductService productService = new ProductManager(new HibernateProductDao(),new JLoggerManagerAdapter());//interface, alt classlarin referansini tutabilir(unutma)
																					//onun icin productservice = new productmanager diyebildik
		ProductService productService2 = new ProductManager(new AlternativeDao(), new JLoggerManagerAdapter()); //Hibernate sistemine alternatif bir sistem ekledik
		
		Product product1 = new Product(1, 1, "erik", 12, 50);
		Product product2 = new Product(7, 2, "elma", 10, 100);
		
		productService.add(product1);
		productService.add(product2);
		
		productService2.add(product2);
		
		//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		//jLogger Paketinin disaridan hazir alindigini dusunelim
		
		

	}

}
