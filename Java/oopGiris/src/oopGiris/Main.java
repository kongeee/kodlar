package oopGiris;

/*
classlar ikiye ayr�l�r : 
1-) �zellik tutucular(Product, Category)
2-) metod tutucular(ProductManager)
*/
public class Main {

	public static void main(String[] args) {
		
		Category category1 = new Category();//nesne olu�turuldu(referans olu�turma)
		//nesnenin �zelliklerini ekliyoruz
		category1.id = 1;
		category1.name = "Bilgisayar";
		
		//birka� tane daha nesne olu�tural�m
		Category category2 = new Category();
		category2.id = 2;
		category2.name = "Bah�e";
		
		Category category3 = new Category();
		category3.id = 3;
		category3.name = "Kitap";
		
		Category[] categories = {category1, category2, category3};//Category class�n�n nesnelerini tutan bir array olu�turduk
		System.out.println(categories.length+" tane kategori var : ");
		
		//for d�ng�s� kullanarak �r�nlerin isimlerini alal�m
		for(Category category : categories) {
			System.out.println(category.name);
		}
		
		
		
		//--------------------------------------------------------------------------------------------------------------------------
		System.out.println("###########################################################");
		
		Product product1 = new Product(1, "Lenovo", 7800, "16GB RAM"); // bu tan�mda parametrili const. �al���r
		//product1.id = 5; diyerek id de�erine eri�ip onu de�i�tirebiliriz
		
		Product product2 = new Product();//bu tan�mda parametresiz const. �al���r
		product2.id = 2;
		product2.name = "Asus";
		product2.detail = "8GB ram";
		product2.price = 6999;
		
		Product product3 = new Product();//bu tan�mda parametresiz const. �al���r
		product3.id = 3;
		product3.name = "HP";
		product3.detail = "32GB ram";
		product3.price = 12600;
		
		System.out.println("\n�r�n listesi :");
		Product[] products = {product1, product2, product3};
		
		for (Product product : products) {
			System.out.println(product.name);
		}
		
		//---------------------------------------------------------------------------------------------------------------------------------
		System.out.println("###########################################################");
		
		//ProductManager class� i�indeki addtocart metdouna bir �r�n vererek onu sepete ekliyoruz
		ProductManager productManager = new ProductManager();
		productManager.addToCart(product1);
		
		//----------------------------------------------------------------------------------------------------------------------------------
		System.out.println("###########################################################");
		//Bundan sonra yukaridaki gibi direkt oalrak ozelliklere erismiyoruz. Bunu yerine set ve get kullaniyoruz
		
		//tum degerleri olustururken de verebiliriz
		Product2 product4 = new Product2(11, "Samsung", 10000, "aa", 10);
		//daha sonras�nda set metodu ile de verebiliriz.(set yazma, get okuma)
		Product2 product5 = new Product2();
		product5.setId(7);
		product5.setName("Acer");
		product5.setPrice(5600);
		product5.setDetail("Acer marka pc");
		product5.setDiscount(10);
		
		//product5'in indirim sonrasi fiyatini ogrenelim
		System.out.println("�ndirim sonras� product5 fiyat� :"+product5.getPriceAfterDiscount()+"/indirim �ncesi : " +
		product5.getPrice());
	}

}
