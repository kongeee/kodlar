package inheritance;

//Siniflar referans tiptir. Base calsslar onu extend eden alt classlarin adreslerini(referanslarini tutar.)
public class Main {

	public static void main(String[] args) {
		IndividualCustomer ekici = new IndividualCustomer();
		ekici.setId(1);
		ekici.setCustomerNumber("1111");
		ekici.setFirstName("Furkan");
		ekici.setLastName("Ekici");
		ekici.setNationalIdentitiy("123456789");
		
		CorporateCustomer hepsiBurada = new CorporateCustomer();
		hepsiBurada.setId(2);
		hepsiBurada.setCustomerNumber("2222");
		hepsiBurada.setCompanyName("Hepsi Burada");
		hepsiBurada.setTaxNumber("6666");
		
		CustomerManager customerManager = new CustomerManager();
		customerManager.add(ekici);
		customerManager.add(hepsiBurada);
		
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		//yeni bir musteri tipi ekleyelim SendikaCustomer diye.
		
		//yazilim gelistirme surecini SOLID harfleri ile anltiyoruz. O harfi-> Open closed principle. Bu prensibe gore yazilima yeni bir
		//sey eklendiginde onceki hicbir kodu degistirme. (Buarada da bu kurala uygun bir is yaptik sadece yeni sinifi olusturduk)
		SendikaCustomer sendika = new SendikaCustomer();
		sendika.setId(3);
		sendika.setCustomerNumber("777");
		sendika.setSendikaNo("99999");
		
		customerManager.add(sendika);
		
		System.out.println("\nToplu ekleme :");
		
		Customer[] customers = {ekici, hepsiBurada, sendika};
		customerManager.addMultiple(customers);
		
		

	}

}
