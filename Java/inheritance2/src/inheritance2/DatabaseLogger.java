package inheritance2;


//database loglama islemini yapacak
public class DatabaseLogger extends Logger {
	@Override
	public void log() {
		System.out.println("DB log");
		
	}

}
