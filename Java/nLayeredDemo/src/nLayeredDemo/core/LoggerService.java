package nLayeredDemo.core;

//Gelen paketi sistemimize direkt impleme etmek istemeyiz. Cunku o sisteme alternatif bir sistem getirdigimizde tum kodlari degistirmemiz gerekir
//gelen paket uzerinde oynama yapamayacag�mza gore burada birkac islem yapip sistemimiz icin uygun hale getiriyoruz
public interface LoggerService {
	//bu asag�daki kodlar gelen sistemden bagimsizdir(yine onun yapisina benzetmeye calisiyoruz ama)
	
	void logToSystem(String message);
}
