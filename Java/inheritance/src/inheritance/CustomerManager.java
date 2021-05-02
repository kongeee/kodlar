package inheritance;

//bu metod s�n�f�d�r
//bu classta musteri ile ilgili metodlari yazacagiz(ekle sil guncelle listele ara ...)
public class CustomerManager {
	//buraya genel sinifi yaz�yoruz bireysel ve ticari s�n�flar i�in ayr� ayr� olu�turmuyoruz(polymorfizm). Bunu yapmasaydik her musteri
	//turu icin ayri ayri add metodu tan�mlard�k. Yeni bir musteri turu eklendiginde ise o musteri turunun de add metodunu yazmamiz gerekirdi.
	//Bunu onlemek icin base class parametre olarak veriyoruz. gelen musteri tipine gore asag�daki parametre sekilleniyor.(bireysel musteri
	//geldiyse customer degiskeni bireysel, kurumsal geldiysel kurumsal oluyor.)
	public void add(Customer customer) {
		
		System.out.println("M��reti eklendi : " + customer.getCustomerNumber());
	}
	
	//coklu musteri(bulk) eklemek istersek : bir custoemr arrayi aliriz ve her bir elemani icin yukaridaki add metodunu calistiririz
	public void addMultiple(Customer[] customers) {
		for(Customer customer : customers) {
			this.add(customer);//her bir musteriyi ayri ayri ekliyoruz
		}
	}
}
