package kodlamaio.northwind.dataAccess.abstracts;

import org.springframework.data.jpa.repository.JpaRepository;

import kodlamaio.northwind.entities.concretes.Product;

//JPA repository i extend ediyoruz (interface, interface i extend eder)

//Asagidaki yapiya gore sorgular arkaplanda hazirlaniyor
//JpaRepository<Product, Integer> ---->  <DB ile iliskilendirilecek class, bu blassin primary keyinin turu>
public interface ProductDao extends JpaRepository<Product, Integer>{

}
