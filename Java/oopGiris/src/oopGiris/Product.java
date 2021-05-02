package oopGiris;

//class isimleri büyük harfle baþlamalý

public class Product {
	/*
	 * kolay yoldan constructor oluþturmak için :
	 * herhangi bir ozellige sag tikla -> Source -> Generate const.*/
	
	/*
	 * ozellikerin basina final koyarsak bu ozelliklere sadece constructordan erisilebilir
	 * ozelliklerin basýna private koyarsak bu ozellikler sadece class icinden erisilebilir
	 * BU OZELLIKLERI PRIVATE YAPIP BUNLARI ATAMAK VE ALMAK ICIN SETTER VE GETTER METODLARI OLUSTURACAGIZ(Product2'ye bak)*/
	int id;
	String name;
	double price;
	String detail;
	
	//constructor oluþturma
	public Product(int id, String name, double unitPrice, String detail) {
		//constructordan gelen parametreleri classýn özelliklerine atýyoruz
		System.out.println("Parametreli constructor çalýþtý");
		
		//this(); yazarsak aþaðýdaki constructor'ý çaðýrýr ve ekrana parametresiz const. yazar
		
		this.id = id;
		this.name = name;
		this.price = unitPrice;
		this.detail = detail;
	}
	
	//birden fazla constructor oluþturabiliriz (overloading)
	public Product() {
		System.out.println("Parametresiz constructor çalýþtý.");
	}
	
	
}
