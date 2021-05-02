package oopGiris;

//bu classta indirim ve indirim sonrasi fiyati da ekledik
public class Product2 {
	//kolay getter ve setter icin : ozellik sag tik -> source -> generate setter and getter(yerlerini de seçebiliyoruz)
	
	private int id;
	private String name;
	private double price;
	private String detail;
	private float discount;
	private double priceAfterDiscount;//bunun set metodu olmayacak cunkü bir islem sonucu olusuyor.
	
	
	public Product2(int id, String name, double unitPrice, String detail, float discount) {
		
		System.out.println("Parametreli constructor çalýþtý");
		
		this.id = id;
		this.name = name;
		this.price = unitPrice;
		this.detail = detail;
		this.discount = discount;
	}
	
	public Product2() {System.out.println("Parametresiz constructor çalýþtý.");
	}//bos const.

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public double getPrice() {
		return price;
	}

	public void setPrice(double price) {
		this.price = price;
	}

	public String getDetail() {
		return detail;
	}

	public void setDetail(String detail) {
		this.detail = detail;
	}

	public float getDiscount() {
		return discount;
	}

	public void setDiscount(float discount) {
		this.discount = discount;
	}

	public double getPriceAfterDiscount() {
		return this.price - (this.price*this.discount/100);
	}
	
	
}
