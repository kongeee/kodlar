package interfaces;


//inheritance kullanirken extends yaziyorduk burada implements yazacagiz
//interface icine yazilan tum metodlari override etmek zorundayiz!!!
public class Databaselogger implements Logger {

	@Override
	public void log(String message) {
		
		System.out.println("DB loglandi : "+message);
	}

}
