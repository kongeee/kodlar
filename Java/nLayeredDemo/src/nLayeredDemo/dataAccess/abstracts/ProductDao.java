package nLayeredDemo.dataAccess.abstracts;

import java.util.List;

import nLayeredDemo.entities.concretes.Product;

//DAO : Data Access Objects
public interface ProductDao {
	
	void add(Product product);
	void update(Product product);
	void delete(Product product);
	Product get(int id);  //Urun arama
	List<Product> getAll(); //ornegin arama yerine bir urun adi yaziyoruz ve birsuru sonuc cikiyor. Onun icin yazdik
}
