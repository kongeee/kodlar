package oopGiris;

//class isimleri b�y�k harfle ba�lamal�

public class Product {
	/*
	 * kolay yoldan constructor olu�turmak i�in :
	 * herhangi bir ozellige sag tikla -> Source -> Generate const.*/
	
	/*
	 * ozellikerin basina final koyarsak bu ozelliklere sadece constructordan erisilebilir
	 * ozelliklerin bas�na private koyarsak bu ozellikler sadece class icinden erisilebilir
	 * BU OZELLIKLERI PRIVATE YAPIP BUNLARI ATAMAK VE ALMAK ICIN SETTER VE GETTER METODLARI OLUSTURACAGIZ(Product2'ye bak)*/
	int id;
	String name;
	double price;
	String detail;
	
	//constructor olu�turma
	public Product(int id, String name, double unitPrice, String detail) {
		//constructordan gelen parametreleri class�n �zelliklerine at�yoruz
		System.out.println("Parametreli constructor �al��t�");
		
		//this(); yazarsak a�a��daki constructor'� �a��r�r ve ekrana parametresiz const. yazar
		
		this.id = id;
		this.name = name;
		this.price = unitPrice;
		this.detail = detail;
	}
	
	//birden fazla constructor olu�turabiliriz (overloading)
	public Product() {
		System.out.println("Parametresiz constructor �al��t�.");
	}
	
	
}
