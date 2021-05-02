package inheritance2;

//bir projedeki bilgiler tutulamk (loglanmak) isteniyor ve birden fazla loglama cesidi var. Dosyaya, DBye, maile godnerebiliriz.

/*!!!!!Birbirinin alternatifi olan kod bloklari icin if yazilmaz*/

public class Main {

	public static void main(String[] args) {

		//musterilerin vs olusturuldugunu varsayiyoruz
		
		CustomerManager customerManager = new CustomerManager();
		customerManager.add(new DatabaseLogger()); //tabi bunun yaninda musteri nesnesi de gonderilir gercek projede.
													//loglamayi DB ile yap dedik

	}

}
