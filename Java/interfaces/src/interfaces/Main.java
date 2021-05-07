package interfaces;

//interfaceler kullanarak sablonlar olusturuyoruz.
//interface icine yazilan metodlar bu interfacei impleme eden alt sýnýflar tarafýnsan override edilmke zorunda
//javada yalnizca 1 classtan inherit alabiliriz ama bir class birden fazla interfacei impleme edebilir
//baseclass ortak ozellikleri tutmak icin kullanilir


//Bu ornekte musteri ekleme cikarma gibi operasyonlari loglayacagiz

public class Main {

	public static void main(String[] args) {
		
		//sadece dizi kismini degistirerek tum projenin nereye loglanacagini degistirmis olduk
		Logger[] loggers = {new FileLogger(), new SmsLogger()};
		CustomerManager customerManager = new CustomerManager(loggers);
		
		Customer customer1 = new Customer(1, "furkan ekici");
		
		customerManager.add(customer1);

	}

}
