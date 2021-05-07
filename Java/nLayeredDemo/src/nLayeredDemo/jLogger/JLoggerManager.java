package nLayeredDemo.jLogger;


//Baskasi tarafindan yazilmis kodlar barindirdigini dusunelim(Pakaet bu sekilde geliyor bu paket uzerinde degisiklik yapamiyoruz)
//Bunu projemize dahil etmek istiyoruz(core katmanina ekliyoruz bunu cunku projenin her yerinde kullanabiliriz)
public class JLoggerManager {
	public void log(String message) {
		System.out.println("JLogger ile loglama yapýldý : "+message);
	}
}
