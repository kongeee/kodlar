package interfaces;

//bu class icimde birtakim araclar yazacagiz(customer managerdeki for dongusunu burada halledegiz)
public class Utils {
	//s�kl�kla kullancag�m�z (bu ornekteki gibi her metoda yazilacak kod parcacigi)
	//varsa bun metodu stacik yazariz. Boylece new lemeye gerek kalmaz
	 public static void runLoggers(Logger[] loggers, String message) {
		 for(Logger logger : loggers) {
				logger.log(message);
			}
	 }
}
