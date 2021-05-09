package kodlamaio.northwind.entities.concretes;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import javax.persistence.Table;

//lombok bizim yerimize getter ve settler lari olusturdu(class ustune @Data dersek hallediyor)
import lombok.Data;

/*
 * Hicbir somut class tek basina kalmayacak demistik. somut classlarin hangi katmana ait oldugunu belirtmeliyiz(anotasyon yöntemi)
 * Ornegin buradaki sinif Entity katmanina ait(yani bir veritabani nesnesi)
 * Bu Entitity'nin(yani Product classinin) veritabaninda hangi tabloya karsilik gelecegini belirtmeliyiz
 * Class icindeki ozellikerin veritabaninda hangi sutuna denk geldigine de soylemeyiliz (@Columns(name="column_name") ile
 * Primary key belirtmek icin : @Id
 * primary keyin auto increment oldugunu söylemek icin : @GeneratedValue
 * */

@Entity                            //bir varliktir(veritabani nesnesidir)
@Table(name="products")			   //bu tablodan veri alir
@Data							   //getter ve setterlari olustur(ayrica constructor da olusturur)
public class Product {
	@Id								//primary key
	@GeneratedValue					//auto-inc
	@Column(name="product_id")		//hangi sutunu temsil ediyor
	private int id;
	
	@Column(name="category_id")
	private int categoryId;
	
	@Column(name="product_name")
	private String productName;
	
	@Column(name="unit_price")
	private double unitPrice;
	
	@Column(name="units_in_stock")
	private short unitsInStock;
	
	@Column(name="quantity_per_unit")
	private String quantityPerUnit;//urunun kacli satildigi (Orn 6li kola)
	
}
