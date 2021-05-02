package inheritance2;

//musteriler olgunu varsayalim ve musteri eklendiginde log kaydi tutmak istiyoruz diyelim

//!Altin kural : is yapan bir sinifin icinde baska bir is yapan sinif kullanacaksan asla somut siniftan (alt siniftan) gitme.
public class CustomerManager {
	public void add(Logger logger) {
		//musteri ekelme kodlari
		System.out.println("Musteri eklendi");
	
	
		//eðer bunu DB ye loglayacaksak : 
		/*
		DatabaseLogger logger = new DatabaseLogger();
		logger.log();
		 */
		//þeklinde kullanamayiz. (Altin kurala aykiri). Buu yerine musteri ile birlikte parametre olarak Logger yollariz ve
		logger.log(); // yazip isi bitiririz
	}
}
