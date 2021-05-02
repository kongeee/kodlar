package oopGiris;

/*
classlar ikiye ayrýlýr : 
1-) özellik tutucular(Product, Category)
2-) metod tutucular(ProductManager)
*/
public class Main {

	public static void main(String[] args) {
		
		Category category1 = new Category();//nesne oluþturuldu(referans oluþturma)
		//nesnenin özelliklerini ekliyoruz
		category1.id = 1;
		category1.name = "Bilgisayar";
		
		//birkaç tane daha nesne oluþturalým
		Category category2 = new Category();
		category2.id = 2;
		category2.name = "Bahçe";
		
		Category category3 = new Category();
		category3.id = 3;
		category3.name = "Kitap";
		
		Category[] categories = {category1, category2, category3};//Category classýnýn nesnelerini tutan bir array oluþturduk
		System.out.println(categories.length+" tane kategori var : ");
		
		//for döngüsü kullanarak ürünlerin isimlerini alalým
		for(Category category : categories) {
			System.out.println(category.name);
		}
		
		
		
		//--------------------------------------------------------------------------------------------------------------------------
		System.out.println("###########################################################");
		
		Product product1 = new Product(1, "Lenovo", 7800, "16GB RAM"); // bu tanýmda parametrili const. çalýþýr
		//product1.id = 5; diyerek id deðerine eriþip onu deðiþtirebiliriz
		
		Product product2 = new Product();//bu tanýmda parametresiz const. çalýþýr
		product2.id = 2;
		product2.name = "Asus";
		product2.detail = "8GB ram";
		product2.price = 6999;
		
		Product product3 = new Product();//bu tanýmda parametresiz const. çalýþýr
		product3.id = 3;
		product3.name = "HP";
		product3.detail = "32GB ram";
		product3.price = 12600;
		
		System.out.println("\nÜrün listesi :");
		Product[] products = {product1, product2, product3};
		
		for (Product product : products) {
			System.out.println(product.name);
		}
		
		//---------------------------------------------------------------------------------------------------------------------------------
		System.out.println("###########################################################");
		
		//ProductManager classý içindeki addtocart metdouna bir ürün vererek onu sepete ekliyoruz
		ProductManager productManager = new ProductManager();
		productManager.addToCart(product1);
		
		//----------------------------------------------------------------------------------------------------------------------------------
		System.out.println("###########################################################");
		//Bundan sonra yukaridaki gibi direkt oalrak ozelliklere erismiyoruz. Bunu yerine set ve get kullaniyoruz
		
		//tum degerleri olustururken de verebiliriz
		Product2 product4 = new Product2(11, "Samsung", 10000, "aa", 10);
		//daha sonrasýnda set metodu ile de verebiliriz.(set yazma, get okuma)
		Product2 product5 = new Product2();
		product5.setId(7);
		product5.setName("Acer");
		product5.setPrice(5600);
		product5.setDetail("Acer marka pc");
		product5.setDiscount(10);
		
		//product5'in indirim sonrasi fiyatini ogrenelim
		System.out.println("Ýndirim sonrasý product5 fiyatý :"+product5.getPriceAfterDiscount()+"/indirim öncesi : " +
		product5.getPrice());
	}

}
