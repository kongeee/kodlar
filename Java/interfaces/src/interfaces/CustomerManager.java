package interfaces;

//Customermanager, loglamaya bagimlidir.
//2 tur bagimlilik var(loosly ve tightlt coupled (gevsek ve kati))
//kati bagli sistemleri gevsek hale getirmemiz gerek

public class CustomerManager {
	
	//dependency injection yapiyoruz
	private Logger[] loggers;//neye bagimlisysak onun private degiskenini olsutur
	//daha sonrasinda bu sinifa bir constructor olustur ve parametre olarak yukaridaki degiskeni ver
	
	//constructor
	public CustomerManager(Logger[] loggers) {
		this.loggers = loggers;
	}
	//parametresiz constructor olusturmuyoruz. Bu sayede bu operasyon sinifi
	//cagirilirken bir loglama turu verilmek zorunda
	
	//bu adimdan sonra lodlanmak istenen operasyonlara logger.log() yazariz ve sectigimiz
	//loglama cesidine gore hepsi loglanir.
	
	
	//operations
	public void add(Customer customer) {
		System.out.println("Müþteri eklendi : "+customer.getName());
		
		/*
		 * Tum metodlar icin bunu ayri ayri yazmak  zahmetli bir is
		 * 
		for(Logger logger : loggers) {
			logger.log(customer.getName());
		}
		*/
		
		//statik metodu cagirmak icin classi kullandýk ve new lemedik
		Utils.runLoggers(loggers, customer.getName());
		
	}
	
	public void delete(Customer customer) {
		System.out.println("Müþteri silindi : "+customer.getName());
		
		/*for(Logger logger : loggers) {
			logger.log(customer.getName());
		}
		*/
		Utils.runLoggers(loggers, customer.getName());
	}
	
}
