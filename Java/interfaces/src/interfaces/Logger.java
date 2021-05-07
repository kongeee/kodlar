package interfaces;

//interface
public interface Logger {
	//gecen haftaki ornegi yapiyoruz. gecen hafta baseclassta(Logger) log metodunu tanimlarken onune public koymustuk.
	//burada sadece void log diyecegiz(yani imzasini yazacagiz) (interface icindekiler zaten publictir)
	
	void log(String message);

}
