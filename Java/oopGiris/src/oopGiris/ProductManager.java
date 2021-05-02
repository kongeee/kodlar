package oopGiris;



public class ProductManager {
	//normalde bunu Product classýna da yazabilirdik ama düzenli olmasý açýsýndan böyle yaptýk
	public void addToCart(Product product) {
		System.out.println("Sepete eklenen ürün :"+product.name);
	}
}
