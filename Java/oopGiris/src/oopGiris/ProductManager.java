package oopGiris;



public class ProductManager {
	//normalde bunu Product class�na da yazabilirdik ama d�zenli olmas� a��s�ndan b�yle yapt�k
	public void addToCart(Product product) {
		System.out.println("Sepete eklenen �r�n :"+product.name);
	}
}
