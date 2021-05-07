package nLayeredDemo.entities.concretes;

import nLayeredDemo.entities.abstracts.Entity;

//Herhangi bir class yalin haldeyse(implement ve inheritance yoksa) ileride sorun yasama ihtimalimiz var.
//Bunun icin bu nesnesin hangi katmana ait oldugunu belitriyoruz(Ileride bu kat uzerindeki tum nesnelere bir sinirlandirma getirme isteyebiliriz
//boyle bir durumda bu yaptigimiz hareket isleri kolaylastiracaktir)
public class Product implements Entity{
	private int id;
	private int categoryID;
	private String name;
	private double unitPrice;
	private int unitsInStock;
	
	public Product() { }

	public Product(int id, int categoryID, String name, double unitPrice, int unitsInStock) {
		super();
		this.id = id;
		this.categoryID = categoryID;
		this.name = name;
		this.unitPrice = unitPrice;
		this.unitsInStock = unitsInStock;
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public int getCategoryID() {
		return categoryID;
	}

	public void setCategoryID(int categoryID) {
		this.categoryID = categoryID;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public double getUnitPrice() {
		return unitPrice;
	}

	public void setUnitPrice(double unitPrice) {
		this.unitPrice = unitPrice;
	}

	public int getUnitsInStock() {
		return unitsInStock;
	}

	public void setUnitsInStock(int unitsInStock) {
		this.unitsInStock = unitsInStock;
	}
}
