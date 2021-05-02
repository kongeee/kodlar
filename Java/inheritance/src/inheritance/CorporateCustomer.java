package inheritance;

//kurumsal
public class CorporateCustomer extends Customer {//extends ile miras alinir
	
	private String companyName;
	private String taxNumber;
	
	public String getCompanyName() {
		return companyName;
	}
	public void setCompanyName(String companyName) {
		this.companyName = companyName;
	}
	public String getTaxNumber() {
		return taxNumber;
	}
	public void setTaxNumber(String taxNumber) {
		this.taxNumber = taxNumber;
	}

}
