package inheritance;

public class Customer {
	/*
	 * //!!BOYLE COK GENEL CLASSLAR YAPMA BIREYSEL VE TICARI MUSTERLERI AYIR
	private int id;
	private String customerNumber;
	private String firstName;
	private String lastName;
	private String nationalIdentitiy;
	private String companyName;
	private String taxNumber;*/
	
	//burada sadece ortak alanlar kalsýn
	
	
	private int id;
	private String customerNumber;
	
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getCustomerNumber() {
		return customerNumber;
	}
	public void setCustomerNumber(String customerNumber) {
		this.customerNumber = customerNumber;
	}
	
}
