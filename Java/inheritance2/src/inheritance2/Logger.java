package inheritance2;


//Base class
//bu bir metod tutucu siniftir

//log metodunu siniflarin icinde ayri ayri tekrar olusturduk bu isleme override(ustune yazma) denir.
//Override edilmis metodlarin basina @Override yazmaya gerek yok ama okunabilirligi artirmak icin yaziliyor
public class Logger {
	
	public void log() {
		System.out.println("Tum loggerlar icin ortak konfigurasyon");
	}
}
